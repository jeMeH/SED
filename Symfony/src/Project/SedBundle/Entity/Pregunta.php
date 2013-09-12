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
 * @ORM\Table(name="Preguntas")
 */
class Pregunta {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer") 
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @ORM\Column(type="string",length=100) 
     */
    protected $pregunta;



    /**
     * @ORM\OneToMany(targetEntity="DetallePregunta", mappedBy="pregunta")
     */
    protected $detallePreguntas;
 


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->detallePreguntas = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * Set pregunta
     *
     * @param string $pregunta
     * @return Pregunta
     */
    public function setPregunta($pregunta)
    {
        $this->pregunta = $pregunta;
    
        return $this;
    }

    /**
     * Get pregunta
     *
     * @return string 
     */
    public function getPregunta()
    {
        return $this->pregunta;
    }

  

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Add detallePreguntas
     *
     * @param \Project\SedBundle\Entity\DetallePregunta $detallePreguntas
     * @return Pregunta
     */
    public function addDetallePregunta(\Project\SedBundle\Entity\DetallePregunta $detallePreguntas)
    {
        $this->detallePreguntas[] = $detallePreguntas;
    
        return $this;
    }

    /**
     * Remove detallePreguntas
     *
     * @param \Project\SedBundle\Entity\DetallePregunta $detallePreguntas
     */
    public function removeDetallePregunta(\Project\SedBundle\Entity\DetallePregunta $detallePreguntas)
    {
        $this->detallePreguntas->removeElement($detallePreguntas);
    }

    /**
     * Get detallePreguntas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDetallePreguntas()
    {
        return $this->detallePreguntas;
    }
}