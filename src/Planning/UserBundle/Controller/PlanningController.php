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
use Symfony\Component\HttpFoundation\Response;

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
    public function accueilAction(){
        // Pour charger un utilisateur
        $idConnexion = $this->get('security.context')->getToken()->getUser()->getId();
        // On récupère la liste des rôles d'un utilisateur
        $roles = $this->get('security.context')->getToken()->getRoles();
        // On transforme le tableau d'instance en tableau simple
        $rolesTab = array_map(function($role){ 
          return $role->getRole(); 
        }, $roles);
        // S'il s'agit d'un admin ou d'un utilisateur on le redirige vers la page administrateur ou la page utilisateur
        if (in_array('ROLE_ADMIN', $rolesTab, true)) {
            return new Response('Tu es ADMINISTRATEUR');            
        } else {
            echo $idConnexion;
        $User = $this->getDoctrine()
                ->getRepository('PlanningUserBundle:User')
                ->findOneBy(array('id'=>$idConnexion));
        echo $User->getId();
        $Eleve = $this->getDoctrine()
                ->getRepository('PlanningUserBundle:Eleve')
                ->findOneBy(array('useriduser'=>$User->getId()));
        echo $Eleve->getPrenom();
        $Promotion = $this->getDoctrine()
                ->getRepository('PlanningUserBundle:Promotion')
                ->findOneBy(array('idpromotion'=>$Eleve->getPromotionidpromotion()));
        echo $Promotion->getNumPromotion();
        $Cours = $this->getDoctrine()
                ->getRepository('PlanningUserBundle:Cours')
                ->findBy(array('promotionidpromotion'=>$Promotion->getIdpromotion()));

        return $this->render('PlanningUserBundle:Advert:planning_annuel.html.twig', array('Cours' => $Cours,
                                                                                          'Promotion' => $Promotion));
        }
    }
}
