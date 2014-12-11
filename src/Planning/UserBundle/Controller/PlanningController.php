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
        // Pour charger un utilisateur
        $connexion = $this->get('security.context')->getToken()->getUser();
        echo $connexion;
        //TODO Résoudre le problème de récupération du User
//        $User = $this->getDoctrine()
//                ->getRepository('PlanningUserBundle:User')
//                ->findOneBy(array('username'=>$connexion));
//        echo $User->getId();
//        $Eleve = $this->getDoctrine()
//                ->getRepository('PlanningUserBundle:Eleve')
//                ->findOneBy(array('useriduser'=>$User));
//        echo $Eleve;
//        $Promotion = $this->getDoctrine()
//                ->getRepository('PlanningUserBundle:Promotion')
//                ->findOneBy(array('numPromotion'=>$Eleve->promotionidpromotion()));
//        echo $Promotion;
//        $Cours = $this->getDoctrine()
//                ->getRepository('PlanningUserBundle:Cours')
//                ->findBy(array('promotionpromotion'=>$Promotion->getNumPromotion()));
        
        $Cours = $this->getDoctrine()
                ->getRepository('PlanningUserBundle:Cours')
                ->findBy(array('promotionidpromotion'=>$Promotion->getIdpromotion()));
        $Promotion = 1;

        return $this->render('PlanningUserBundle:Advert:planning_annuel.html.twig', array('Cours' => $Cours,
                                                                                          'Promotion' => $Promotion));
    }
}
