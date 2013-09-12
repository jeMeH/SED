<?php

/**
 * Description of Docente
 *
 * @author jefferson
 */

namespace Project\SedBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Docentes")
 */
class Docente {

    /**
     * @ORM\Id
     * @ORM\Column(type="bigint") 
     * @Assert\NotBlank()
     * @Assert\Type(type="numeric", message="El valor {{ value }} no es un valor valido en el campo cedula.")
     */
    protected $cedula;

    /**
     * @ORM\Column(type="string",length=45) 
     */
    protected $nombres;

    /**
     * @ORM\Column(type="string",length=45) 
     */
    protected $apellidos;

    /**
     * @ORM\Column(type="string",length=45) 
     * @Assert\NotBlank()
     */
    protected $titulo;

    /**
     * @ORM\Column(type="string",length=45) 
     */
    protected $foto;

    /**
     * @ORM\OneToMany(targetEntity="Curso", mappedBy="docente")
     */
    protected $cursos;

    //  public function __construct() {
    //    $this->cursos = new \Doctrine\Common\Collections\ArrayCollection();
    //}

    /**
     * Constructor
     */
    function __construct($cedula, $nombres, $apellidos, $titulo, $foto) {
        $this->cedula = $cedula;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->titulo = $titulo;
        $this->foto = $foto;
        $this->cursos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set cedula
     *
     * @param integer $cedula
     * @return Docente
     */
    public function setCedula($cedula) {
        $this->cedula = $cedula;

        return $this;
    }

    /**
     * Get cedula
     *
     * @return integer 
     */
    public function getCedula() {
        return $this->cedula;
    }

    /**
     * Set nombres
     *
     * @param string $nombres
     * @return Docente
     */
    public function setNombres($nombres) {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Get nombres
     *
     * @return string 
     */
    public function getNombres() {
        return $this->nombres;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     * @return Docente
     */
    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos() {
        return $this->apellidos;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return Docente
     */
    public function setTitulo($titulo) {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo() {
        return $this->titulo;
    }

    /**
     * Set foto
     *
     * @param string $foto
     * @return Docente
     */
    public function setFoto($foto) {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string 
     */
    public function getFoto() {
        return $this->foto;
    }

    /**
     * Add cursos
     *
     * @param \Project\SedBundle\Entity\Curso $cursos
     * @return Docente
     */
    public function addCurso(\Project\SedBundle\Entity\Curso $cursos) {
        $this->cursos[] = $cursos;

        return $this;
    }

    /**
     * Remove cursos
     *
     * @param \Project\SedBundle\Entity\Curso $cursos
     */
    public function removeCurso(\Project\SedBundle\Entity\Curso $cursos) {
        $this->cursos->removeElement($cursos);
    }

    /**
     * Get cursos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCursos() {
        return $this->cursos;
    }

}