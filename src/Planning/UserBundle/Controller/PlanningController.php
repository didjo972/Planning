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
            return $this->render('PlanningUserBundle:Advert:admin.html.twig');            
        } else {
            //echo $idConnexion;
            $User = $this->getDoctrine()
                        ->getRepository('PlanningUserBundle:User')
                        ->findOneBy(array('id'=>$idConnexion));
            if(is_null($User) || !isset($User)) {
                throw $this->createNotFoundException('L\'utilisateur n\'existe pas !');
            }
            //echo $User->getId();
            $Eleve = $this->getDoctrine()
                          ->getRepository('PlanningUserBundle:Eleve')
                          ->findOneBy(array('useriduser'=>$User->getId()));
            if(is_null($Eleve) || !isset($Eleve)) {
                throw $this->createNotFoundException('Aucun élève correpondant à votre id Utilisateur !');
            }
            //echo $Eleve->getPrenom();
            $Promotion = $this->getDoctrine()
                              ->getRepository('PlanningUserBundle:Promotion')
                              ->findOneBy(array('idpromotion'=>$Eleve->getPromotionidpromotion()));
            if(is_null($Promotion->getNumPromotion()) || !isset($Promotion)) {
                throw $this->createNotFoundException('Aucune promotion lié à l\'élève demandé !');
            }
            //echo $Promotion->getNumPromotion();
            $Cours = $this->getDoctrine()
                        ->getRepository('PlanningUserBundle:Cours')
                        ->findBy(array('promotionidpromotion'=>$Promotion->getIdpromotion()));
            if(is_null($Cours) || !isset($Cours)) {
                throw $this->createNotFoundException('Aucun cours trouvé pour la promotion demandé');
            }

            return $this->render('PlanningUserBundle:Advert:planning_annuel.html.twig', array('Cours' => $Cours,
                                                                                          'Promotion' => $Promotion));
        }
    }
    
    public function gestionpromoAction() {
        $Promotion = $this->getDoctrine()
                ->getRepository('PlanningUserBundle:Promotion')
                ->findAll();
        return $this->render('PlanningUserBundle:Advert:gestion_promotion.html.twig', array('Promotion' => $Promotion));
    }
    
    public function gestionprofesseurAction() {
        $Professeur = $this->getDoctrine()
                ->getRepository('PlanningUserBundle:Professeur')
                ->findAll();
        return $this->render('PlanningUserBundle:Advert:gestion_professeur.html.twig', array('Professeur' => $Professeur));
    }
    
    public function gestioneleveAction() {
        $Eleve = $this->getDoctrine()
                ->getRepository('PlanningUserBundle:Eleve')
                ->findAll();
        return $this->render('PlanningUserBundle:Advert:gestion_eleve.html.twig', array('Eleve' => $Eleve));
    }
    
    public function gestionmatiereAction() {
        $Matiere = $this->getDoctrine()
                ->getRepository('PlanningUserBundle:Matiere')
                ->findAll();
        return $this->render('PlanningUserBundle:Advert:gestion_matiere.html.twig', array('Matiere' => $Matiere));
    }
    
    public function gestionsiteAction() {
        $Site = $this->getDoctrine()
                ->getRepository('PlanningUserBundle:Site')
                ->findAll();
        return $this->render('PlanningUserBundle:Advert:gestion_site.html.twig', array('Site' => $Site));
    }
    
    public function gestionsalleAction() {
        $Salle = $this->getDoctrine()
                ->getRepository('PlanningUserBundle:Salle')
                ->findAll();
        return $this->render('PlanningUserBundle:Advert:gestion_salle.html.twig', array('Salle' => $Salle));
    }
}
