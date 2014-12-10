<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PlanningController
 *
 * @author Didjo'BG
 */

namespace Planning\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PlanningController extends Controller {
    public function planningAction() {
        $Promotion = $this->getDoctrine()
                ->getRepository('PlanningUserBundle:Promotion')
                ->findOneBy(array('numPromotion'=>'1'));
        $Cours = $this->getDoctrine()
                ->getRepository('PlanningUserBundle:Cours')
                ->findOneBy(array('promotionpromotion'=>$Promotion->getIdpromotion()));
        return $this->render('PlanningUserBundle:Advert:planning.html.twig', array('Cours' => $Cours));
    }
    public function annuelAction(){
        $jourjanvier = 0;
        $jourfevrier = 0;
        $jourmars = 0;
        $jouravril = 0;
        $jourmai = 0;
        $jourjuin = 0;
        $jourjuillet = 0;
        $jouraout = 0;
        $jourseptembre = 0;
        $jouroctobre = 0;
        $journovembre = 0;
        $jourdecembre = 0;

        return $this->render('PlanningUserBundle:Advert:planning_annuel.html.twig', array('jourjanvier' => $jourjanvier,
                                                                                          'jourfevrier' => $jourfevrier,
                                                                                          'jourmars' => $jourmars,
                                                                                          'jouravril' => $jouravril,
                                                                                          'jourmai' => $jourmai,
                                                                                          'jourjuin' => $jourjuin,
                                                                                          'jourjuillet' => $jourjuillet,
                                                                                          'jouraout' => $jouraout,
                                                                                          'jourseptembre' => $jourseptembre,
                                                                                          'jouroctobre' => $jouroctobre,
                                                                                          'journovembre' => $journovembre,
                                                                                          'jourdecembre' => $jourdecembre));
    }
}
