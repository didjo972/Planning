<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CoursType
 *
 * @author Didjo'BG
 */

namespace Planning\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CoursType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('dure', 'integer');
        $builder->add('dateDebut', 'date');
        $builder->add('dateFin', 'date');
        $builder->add('professeuridprofesseur', 'entity', array(
            'class'=>'PlanningUserBundle:Professeur',
            'property'=>'nom',
            'multiple'=>false));
        $builder->add('matiereidmatiere', 'entity', array(
            'class'=>'PlanningUserBundle:Matiere',
            'property'=>'libelle',
            'multiple'=>false));
        $builder->add('promotionidpromotion', 'entity', array(
            'class'=>'PlanningUserBundle:Promotion',
            'property'=>'numPromotion',
            'multiple'=>false));
        $builder->add('salleidsalle', 'entity', array(
            'class'=>'PlanningUserBundle:Salle',
            'property'=>'numSalle',
            'multiple'=>false));
        $builder->add('save',      'submit');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Planning\UserBundle\Entity\Cours'
        ));
    }

    public function getName()
    {
        return 'cours';
    }
}
