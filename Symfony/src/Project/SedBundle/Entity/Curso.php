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
 * @ORM\Table(name="Cursos")
 */
class Curso {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer") 
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id; 
     /**
     * @ORM\ManyToOne(targetEntity="Docente", inversedBy="cursos")
     * @ORM\JoinColumn(name="cedulaDocente", referencedColumnName="cedula")
     */
    protected $docente; 
    /**
     * @ORM\ManyToOne(targetEntity="Materia", inversedBy="cursos")
     * @ORM\JoinColumn(name="idMateria", referencedColumnName="id") 
     */
   
    protected $materia; 

    /**
     * @ORM\Column(type="smallint") 
     */       
    protected $noGrupo;
 

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
     * Set noGrupo
     *
     * @param integer $noGrupo
     * @return Curso
     */
    public function setNoGrupo($noGrupo)
    {
        $this->noGrupo = $noGrupo;
    
        return $this;
    }

    /**
     * Get noGrupo
     *
     * @return integer 
     */
    public function getNoGrupo()
    {
        return $this->noGrupo;
    }

    /**
     * Set docente
     *
     * @param \Project\SedBundle\Entity\Docente $docente
     * @return Curso
     */
    public function setDocente(\Project\SedBundle\Entity\Docente $docente = null)
    {
        $this->docente = $docente;
    
        return $this;
    }

    /**
     * Get docente
     *
     * @return \Project\SedBundle\Entity\Docente 
     */
    public function getDocente()
    {
        return $this->docente;
    }

    /**
     * Set materia
     *
     * @param \Project\SedBundle\Entity\Materia $materia
     * @return Curso
     */
    public function setMateria(\Project\SedBundle\Entity\Materia $materia = null)
    {
        $this->materia = $materia;
    
        return $this;
    }

    /**
     * Get materia
     *
     * @return \Project\SedBundle\Entity\Materia 
     */
    public function getMateria()
    {
        return $this->materia;
    }
}