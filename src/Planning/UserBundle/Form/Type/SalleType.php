<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SalleType
 *
 * @author Didjo'BG
 */

namespace Planning\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SalleType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('numSalle', 'integer');
        $builder->add('nbPc', 'integer');
        $builder->add('siteidsite', 'entity', array(
            'class'=>'PlanningUserBundle:Site',
            'property'=>'libelle',
            'multiple'=>false));
        $builder->add('save',      'submit');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Planning\UserBundle\Entity\Salle'
        ));
    }

    public function getName()
    {
        return 'salle';
    }
}
