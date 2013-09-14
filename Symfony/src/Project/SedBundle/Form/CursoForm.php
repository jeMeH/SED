<?php

/**
 * Description of CursoForm
 *
 * @author administrador
 */

namespace Project\SedBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class CursoForm extends AbstractType {

    function buildForm(FormBuilderInterface $builder, array $options) {
        
        $builder->add('docente', 'choice', array('choices' => array('1113666505' => 'Jefferson Mendoza')));
        $builder->add('materia', 'choice', array('choices' => array('110050M' => 'Calculo I')));
        $builder->add('grupo', 'number');
        $builder->add('Guardar', 'submit');
    }

    public function getName() {
        return 'curso';
    }

}

?>
