<?php

namespace Project\SedBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Project\SedBundle\Entity\Docente;
use Project\SedBundle\Entity\Materia;
use Project\SedBundle\Entity\Programa;
use Project\SedBundle\Entity\Curso;
use Project\SedBundle\Entity\Pregunta;

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
        $errores = "";
        if ($_POST) {
            /* Analizando y tomando el archivo */
            $fotosDir = $this->container->getParameter('fotos_dir');
            $fotoNombre = $_FILES['foto']['name'];
            $fotoFichero = $_FILES['foto']['tmp_name'];
            if ($fotoNombre == "") {
                $fotoNombre = "nofoto.jpg";
            } else {
                $fotoNombre = $_POST['cedula'] . ".jpg";
                move_uploaded_file($fotoFichero, $fotosDir . '/' . $fotoNombre);
            }
            $docente = new Docente($_POST['cedula'], $_POST['nombres'], $_POST['apellidos'], $_POST['titulo'], $fotoNombre);
            /* validando campos */
            $validador = $this->get('validator');
            $errores = $validador->validate($docente);
            if (count($errores) <= 0) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($docente); //persisitendo
                $em->flush();
            }
        }
        $repository = $this->getDoctrine()
                ->getRepository('ProjectSedBundle:Docente');

        $docentes = $repository->findAll();

        return $this->render('ProjectSedBundle:Default:docentes.html.twig', array('pagina' => "Docentes", 'docentes' => $docentes, 'errores' => $errores));
    }

//        $form = $this->createFormBuilder($docente)
//        ->add('cedula', 'text')
//        ->add('nombres', 'text')
//        ->add('apellidos', 'text')
//        ->add('titulo', 'text')
//        ->add('foto', 'file')
//        ->add('Guardar', 'submit')
//        ->getForm();
//return $this->render('ProjectSedBundle:Default:docentes.html.twig', array('pagina' => "Docentes", 'form' => $form->createView()));


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
                ->add('pregunta','textarea')
                ->add('Guardar','submit')
                ->getForm();

        return $this->render('ProjectSedBundle:Default:preguntas.html.twig', array('pagina' => "Preguntas", 'form' =>$form->createView()));
    }

    public function reportesAction() {
        return $this->render('ProjectSedBundle:Default:reportes.html.twig', array('pagina' => "Reportes"));
    }

    public function acercaAction() {
        return $this->render('ProjectSedBundle:Default:acerca.html.twig', array('pagina' => "Acerca de"));
    }

}

