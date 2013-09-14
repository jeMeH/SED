<?php

namespace Project\SedBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Project\SedBundle\Entity\Docente;
use Project\SedBundle\Entity\Materia;
use Project\SedBundle\Entity\Programa;
use Project\SedBundle\Entity\Curso;
use Project\SedBundle\Entity\Pregunta;
use Project\SedBundle\Form\DocenteForm;

class DefaultController extends Controller {

    public function inicioAction() {
        return $this->render('ProjectSedBundle:Default:inicio.html.twig', array('pagina' => "Inicio"));
    }

    public function docentesAction() {
        if ($_GET) {
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery('delete from ProjectSedBundle:Docente d where  d.cedula = :id')->setParameter('id', $_GET['cedula']);
            $query->getResult();
        }
        $docente = new Docente();
        $form = $this->createForm(new DocenteForm(), $docente);
        $request = $this->get('request');
        /*
         * Se captura si existe la solicitud post. Si asi es, se persiste el objeto
         */
        if ($request->getMethod('POST')) {
            $form->bind($request);
            $cedula = $form['cedula']->getData();
            if ($form->isValid()) {
                if ($form['foto']->getData() != "") {
                    $docente->setFoto($cedula . ".jpg");
                    $fotosDir = $this->container->getParameter('fotos_dir');
                    $form['foto']->getData()->move($fotosDir, $cedula . ".jpg");
                } else {
                    $docente->setFoto("nofoto.jpg");
                }
                $em = $this->getDoctrine()->getManager();
                $em->persist($docente);
                $em->flush();
            }
            $docente = new Docente();
            $form = $this->createForm(new DocenteForm(), $docente);
        }
        $repository = $this->getDoctrine()->getRepository('ProjectSedBundle:Docente');
        $docentes = $repository->findAll();
        return $this->render('ProjectSedBundle:Default:docentes.html.twig', array('pagina' => "Docentes", 'docentes' => $docentes, 'form' => $form->createView()));
    }

    public function materiasAction() {
        $materia = new Materia();
        $form = $this->createFormBuilder($materia)
                ->add('codigo', 'text')
                ->add('nombre', 'text')
                ->add('programa', 'choice', array('choices' => array('2702' => 'Tecnologia en sistemas', '2703' => 'Tecnologia en electronica')))
                ->add('creditos', 'number')
                ->add('noSemestre', 'number')
                ->add('Guardar', 'submit')
                ->getForm();
        return $this->render('ProjectSedBundle:Default:materias.html.twig', array('pagina' => "Materias", 'form' => $form->createView()));
    }

    public function programasAction() {
        $programa = new Programa();
        $form = $this->createFormBuilder($programa)
                ->add('codigo', 'text')
                ->add('nombre', 'text')
                ->add('Guardar', 'submit')
                ->getForm();

        return $this->render('ProjectSedBundle:Default:programas.html.twig', array('pagina' => "Programas", 'form' => $form->createView()));
    }

    public function cursosAction() {
        $curso = new Curso();
        $form = $this->createFormBuilder()
                ->add('docente', 'choice', array('choices' => array('1113666505' => 'Jefferson Mendoza')))
                ->add('materia', 'choice', array('choices' => array('110050M' => 'Calculo I')))
                ->add('grupo', 'number')
                ->add('Guardar', 'submit')
                ->getForm();
        return $this->render('ProjectSedBundle:Default:cursos.html.twig', array('pagina' => "Cursos", 'form' => $form->createView()));
    }

    public function preguntasAction() {
        $pregunta = new Pregunta ();
        $form = $this->createFormBuilder()
                ->add('pregunta', 'textarea')
                ->add('Guardar', 'submit')
                ->getForm();

        return $this->render('ProjectSedBundle:Default:preguntas.html.twig', array('pagina' => "Preguntas", 'form' => $form->createView()));
    }

    public function reportesAction() {
        return $this->render('ProjectSedBundle:Default:reportes.html.twig', array('pagina' => "Reportes"));
    }

    public function acercaAction() {
        return $this->render('ProjectSedBundle:Default:acerca.html.twig', array('pagina' => "Acerca de"));
    }

}

