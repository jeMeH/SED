<?php

/**
 * Description of Docente
 *
 * @author jefferson
 */

namespace Project\SedBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="DetallePreguntas")
 */
class DetallePregunta {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer") 
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * 
     * @ORM\Column(type="smallint") 
     */
    protected $calificacion;

    /**
     * @ORM\Column(type="string",length=100) 
     */
    protected $comentario;

    /**
     * @ORM\ManyToOne(targetEntity="Pregunta", inversedBy="detallePreguntas")
     * @ORM\JoinColumn(name="idPregunta", referencedColumnName="id") 
     */
    protected $pregunta;

    /**
     * @ORM\ManyToOne(targetEntity="Curso", inversedBy="detallePreguntas")
     * @ORM\JoinColumn(name="idCurso", referencedColumnName="id") 
     */
    protected $idCurso;
    


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set calificacion
     *
     * @param integer $calificacion
     * @return DetallePregunta
     */
    public function setCalificacion($calificacion)
    {
        $this->calificacion = $calificacion;
    
        return $this;
    }

    /**
     * Get calificacion
     *
     * @return integer 
     */
    public function getCalificacion()
    {
        return $this->calificacion;
    }

    /**
     * Set comentario
     *
     * @param string $comentario
     * @return DetallePregunta
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;
    
        return $this;
    }

    /**
     * Get comentario
     *
     * @return string 
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set pregunta
     *
     * @param \Project\SedBundle\Entity\Pregunta $pregunta
     * @return DetallePregunta
     */
    public function setPregunta(\Project\SedBundle\Entity\Pregunta $pregunta = null)
    {
        $this->pregunta = $pregunta;
    
        return $this;
    }

    /**
     * Get pregunta
     *
     * @return \Project\SedBundle\Entity\Pregunta 
     */
    public function getPregunta()
    {
        return $this->pregunta;
    }

    /**
     * Set idCurso
     *
     * @param \Project\SedBundle\Entity\Curso $idCurso
     * @return DetallePregunta
     */
    public function setIdCurso(\Project\SedBundle\Entity\Curso $idCurso = null)
    {
        $this->idCurso = $idCurso;
    
        return $this;
    }

    /**
     * Get idCurso
     *
     * @return \Project\SedBundle\Entity\Curso 
     */
    public function getIdCurso()
    {
        return $this->idCurso;
    }
}