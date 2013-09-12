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
 * @ORM\Table(name="Materias")
 */
class Materia {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer") 
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @ORM\Column(type="string",length=8) 
     */
    protected $codigo;

    /**
     * @ORM\Column(type="string",length=45) 
     */
    protected $nombre;

    /**
     * @ORM\Column(type="smallint") 
     */
    protected $creditos;

    /**
     * @ORM\Column(type="smallint") 
     */
    protected $noSemestre;

    /**
     * @ORM\ManyToOne(targetEntity="Programa", inversedBy="materias")
     * @ORM\JoinColumn(name="codigoPrograma", referencedColumnName="codigo") 
     */
    protected $programa;

    /**
     * @ORM\OneToMany(targetEntity="Curso", mappedBy="materia")
     */
    protected $cursos;
    
    

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cursos = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set codigo
     *
     * @param string $codigo
     * @return Materia
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    
        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Materia
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
     * Set creditos
     *
     * @param integer $creditos
     * @return Materia
     */
    public function setCreditos($creditos)
    {
        $this->creditos = $creditos;
    
        return $this;
    }

    /**
     * Get creditos
     *
     * @return integer 
     */
    public function getCreditos()
    {
        return $this->creditos;
    }

    /**
     * Set noSemestre
     *
     * @param integer $noSemestre
     * @return Materia
     */
    public function setNoSemestre($noSemestre)
    {
        $this->noSemestre = $noSemestre;
    
        return $this;
    }

    /**
     * Get noSemestre
     *
     * @return integer 
     */
    public function getNoSemestre()
    {
        return $this->noSemestre;
    }

    /**
     * Set programa
     *
     * @param \Project\SedBundle\Entity\Programa $programa
     * @return Materia
     */
    public function setPrograma(\Project\SedBundle\Entity\Programa $programa = null)
    {
        $this->programa = $programa;
    
        return $this;
    }

    /**
     * Get programa
     *
     * @return \Project\SedBundle\Entity\Programa 
     */
    public function getPrograma()
    {
        return $this->programa;
    }

    /**
     * Add cursos
     *
     * @param \Project\SedBundle\Entity\Curso $cursos
     * @return Materia
     */
    public function addCurso(\Project\SedBundle\Entity\Curso $cursos)
    {
        $this->cursos[] = $cursos;
    
        return $this;
    }

    /**
     * Remove cursos
     *
     * @param \Project\SedBundle\Entity\Curso $cursos
     */
    public function removeCurso(\Project\SedBundle\Entity\Curso $cursos)
    {
        $this->cursos->removeElement($cursos);
    }

    /**
     * Get cursos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCursos()
    {
        return $this->cursos;
    }
}