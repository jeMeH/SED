<?php

/**
 * Description of Docente
 *
 * @author jefferson
 */
namespace Project\SedBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Table(name="Programas")
 * @ORM\Entity
 */
class Programa {
    /**
     * @ORM\Id
     * @ORM\Column(type="smallint") 
     */
    protected $codigo; 
    /**
     * @ORM\Column(type="string",length=45) 
     */
    protected $nombre; 
    /**
     * @ORM\Column(type="string",length=1) 
     */
    protected $jornada; 
    
     /**
     * @ORM\OneToMany(targetEntity="Materia", mappedBy="programa")
     */
    protected $materias; 
    
    

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->materias = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set codigo
     *
     * @param integer $codigo
     * @return Programa
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    
        return $this;
    }

    /**
     * Get codigo
     *
     * @return integer 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Programa
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set jornada
     *
     * @param string $jornada
     * @return Programa
     */
    public function setJornada($jornada)
    {
        $this->jornada = $jornada;
    
        return $this;
    }

    /**
     * Get jornada
     *
     * @return string 
     */
    public function getJornada()
    {
        return $this->jornada;
    }

    /**
     * Add materias
     *
     * @param \Project\SedBundle\Entity\Materia $materias
     * @return Programa
     */
    public function addMateria(\Project\SedBundle\Entity\Materia $materias)
    {
        $this->materias[] = $materias;
    
        return $this;
    }

    /**
     * Remove materias
     *
     * @param \Project\SedBundle\Entity\Materia $materias
     */
    public function removeMateria(\Project\SedBundle\Entity\Materia $materias)
    {
        $this->materias->removeElement($materias);
    }

    /**
     * Get materias
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMaterias()
    {
        return $this->materias;
    }
}