<?php

/**
 * Description of MateriaFor
 *
 * @author administrador
 */

namespace Project\SedBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class MateriaForm extends AbstractType {

    protected $programas;

    function buildForm(FormBuilderInterface $builder, array $options) {
        echo $options;
        $builder->add('codigo', 'text');
        $builder->add('nombre', 'text');
        $builder->add('programa', 'choice', $this->programas);
        $builder->add('creditos', 'number');
        $builder->add('noSemestre', 'number');
        $builder->add('Guardar', 'submit');
    }

    public function getN() {
        return $this->programas;
    }

    public function setProgramas($programas) {
        $this->programas = $programas;
    }



}

?>
