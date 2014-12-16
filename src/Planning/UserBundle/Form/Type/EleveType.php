<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserType
 *
 * @author Didjo'BG
 */

namespace Planning\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EleveType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('prenom', 'text');
        $builder->add('nom', 'text');
        $builder->add('useriduser', new UserType());
        $builder->add('promotionidpromotion', new PromotionType());
        $builder->add('save',      'submit');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Planning\UserBundle\Entity\Eleve'
        ));
    }

    public function getName()
    {
        return 'eleve';
    }
}
