<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DocenteForm
 *
 * @author administrador
 */

namespace Project\SedBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class DocenteForm extends AbstractType {

    function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('cedula', 'text');
        $builder->add('nombres', 'text');
        $builder->add('apellidos', 'text');
        $builder->add('titulo', 'text');
        $builder->add('foto', 'file');
        $builder->add('Guardar', 'submit');
    }

    public function getName() {
        return 'docente';
    }

//    public function setDefaultOptions(OptionsResolverInterface $resolver) {
//        $resolver->setDefaults(array('data_class' => 'Project\SedBundle\Entity\Docente',));
//    }

}

?>
