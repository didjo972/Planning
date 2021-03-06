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
use Planning\UserBundle\Entity\Eleve;
use Planning\UserBundle\Entity\Professeur;
use Planning\UserBundle\Entity\Promotion;
use Planning\UserBundle\Entity\Matiere;
use Planning\UserBundle\Entity\Site;
use Planning\UserBundle\Entity\Salle;
use Planning\UserBundle\Entity\Cours;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Planning\UserBundle\Form\Type\RegistrationType;
use Planning\UserBundle\Form\Model\Registration;

use Planning\UserBundle\Form\Type\EleveType;
use Planning\UserBundle\Form\Type\ProfesseurType;
use Planning\UserBundle\Form\Type\PromotionType;
use Planning\UserBundle\Form\Type\MatiereType;
use Planning\UserBundle\Form\Type\SiteType;
use Planning\UserBundle\Form\Type\SalleType;
use Planning\UserBundle\Form\Type\CoursType;



class PlanningController extends Controller {
    public function planningAction() {        
    
        $Promotion = $this->getDoctrine()
                ->getRepository('PlanningUserBundle:Promotion')
                ->findOneBy(array('numPromotion'=>'1'));
        $Cours = $this->getDoctrine()
                ->getRepository('PlanningUserBundle:Cours')
                ->findOneBy(array('promotionpromotion'=>$Promotion->getIdpromotion()));
        return $this->render('PlanningUserBundle:Advert:fullcalendar.html.twig', array('Cours' => $Cours));
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
            return $this->affichagePlanning($idConnexion);
        }
    }
    
    public function gestionpromoAction() {
        $Promotion = $this->getDoctrine()
                ->getRepository('PlanningUserBundle:Promotion')
                ->findAll();
        $newPromotion = new Promotion();
        $form = $this->get('form.factory')->create(new PromotionType(), $newPromotion);
        
        
        if($form->handleRequest($this->getRequest())->isValid()){
            $registration = $form->getData();
            $this->ajouterPromotion($registration);
        }  
        
        return $this->render('PlanningUserBundle:Advert:gestion_promotion.html.twig', array('Promotion' => $Promotion,
                                                                                            'form' => $form->createView()));
    }
    
    public function gestionprofesseurAction() {
        $Professeur = $this->getDoctrine()
                ->getRepository('PlanningUserBundle:Professeur')
                ->findAll();
        $newProfesseur = new Professeur();
        $form = $this->get('form.factory')->create(new ProfesseurType(), $newProfesseur);
        
        
        if($form->handleRequest($this->getRequest())->isValid()){
            $registration = $form->getData();
            $this->ajouterProfesseur($registration);
        }   
        
        return $this->render('PlanningUserBundle:Advert:gestion_professeur.html.twig', array('Professeur' => $Professeur,
                                                                                             'form' => $form->createView()));
    }
    
    public function gestioneleveAction() {
        $Eleve = $this->getDoctrine()
                ->getRepository('PlanningUserBundle:Eleve')
                ->findAll();
        $newEleve = new Eleve();
        $form = $this->get('form.factory')->create(new EleveType(), $newEleve);
        
        
        if($form->handleRequest($this->getRequest())->isValid()){
            $registration = $form->getData();
            $this->ajouterEleve($registration);
        }        
        
        return $this->render('PlanningUserBundle:Advert:gestion_eleve.html.twig', array('Eleve' => $Eleve,
                                                                                        'form' => $form->createView()));
    }
    
    public function gestionmatiereAction() {
        $Matiere = $this->getDoctrine()
                ->getRepository('PlanningUserBundle:Matiere')
                ->findAll();
        $newMatiere = new Matiere();
        $form = $this->get('form.factory')->create(new MatiereType(), $newMatiere);
        
        if($form->handleRequest($this->getRequest())->isValid()){
            $registration = $form->getData();
            $this->ajouterMatiere($registration);
        }
        
        return $this->render('PlanningUserBundle:Advert:gestion_matiere.html.twig', array('Matiere' => $Matiere,
                                                                                          'form' => $form->createView()));
    }
    
    public function gestionsiteAction() {
        $Site = $this->getDoctrine()
                ->getRepository('PlanningUserBundle:Site')
                ->findAll();
        $newSite = new Site();
        $form = $this->get('form.factory')->create(new SiteType(), $newSite);
        
        if($form->handleRequest($this->getRequest())->isValid()){
            $registration = $form->getData();
            $this->ajouterSite($registration);
        }
        
        return $this->render('PlanningUserBundle:Advert:gestion_site.html.twig', array('Site' => $Site,
                                                                                       'form' => $form->createView()));
    }
    
    public function gestionsalleAction() {
        $Salle = $this->getDoctrine()
                ->getRepository('PlanningUserBundle:Salle')
                ->findAll();
        $newSalle = new Salle();
        $form = $this->get('form.factory')->create(new SalleType(), $newSalle);
        
        if($form->handleRequest($this->getRequest())->isValid()){
            $registration = $form->getData();
            $this->ajouterSalle($registration);
        }
        
        return $this->render('PlanningUserBundle:Advert:gestion_salle.html.twig', array('Salle' => $Salle,
                                                                                        'form' => $form->createView()));
    }
    
    public function gestionCoursAction() 
    {
        $Cours = $this->getDoctrine()
                ->getRepository('PlanningUserBundle:Cours')
                ->findAll();
        
        $newCours = new Cours();
        
        $form = $this->get('form.factory')->create(new CoursType(), $newCours);
        
        if($form->handleRequest($this->getRequest())->isValid())
        {
            $registration = $form->getData();
            $this->ajouterCours($registration);
        }
        
        return $this->render('PlanningUserBundle:Advert:gestion_cours.html.twig', array('Cours' => $Cours,
                                                                                        'form' => $form->createView()));
    }
    
     function registerAction() {
        $form = $this->createForm(new RegistrationType(), new Registration());
        return $this->render('PlanningUserBundle:Advert:register.html.twig', array('form' => $form->createView()));
    }
    
    public function createAction() {        
        $form = $this->get('form.factory')->create(new EleveType(), $advert);
        $form->handleRequest($this->getRequest());
        $em = $this->getDoctrine()->getEntityManager();
        if($form->handleRequest($this->getRequest())->isValid()){
            $registration = $form->getData();
            $User = $registration->getUser();
            $em->persist($User);
            $em->flush();
            echo $User->getId();
            //$Eleve = $registration->getEleve();
        }   
        
        $Eleve = $this->getDoctrine()
                ->getRepository('PlanningUserBundle:Eleve')
                ->findAll();
        return $this->render('PlanningUserBundle:Advert:gestion_eleve.html.twig', array('form' => $form->createView(), 'Eleve' => $Eleve));
    }
    
    public function suppressioncoursAction(Request $request) {
        $idCours =  $request->query->get('idcours');
        $repository = $this->getDoctrine()->getRepository('PlanningUserBundle:Cours');
        $Cours = $repository->find($idCours);
        if(is_null($Cours) || !isset($Cours)) {
            throw $this->createNotFoundException('Aucun Cours existe à cette id !');
        } else {
            $this->getDoctrine()->getManager()->remove($Cours);
            $this->getDoctrine()->getManager()->flush();
            return new Response("Ce cours a été supprimé !");
        }
    }
    
    public function suppressionpromoAction(Request $request) {
        $idPromotion =  $request->query->get('idpromotion');
        $repository = $this->getDoctrine()->getRepository('PlanningUserBundle:Promotion');
        $Promotion = $repository->find($idPromotion);
        if(is_null($Promotion->getNumPromotion()) || !isset($Promotion)) {
            throw $this->createNotFoundException('Aucune Promotion existe à cette id !');
        } else {
            $this->getDoctrine()->getManager()->remove($Promotion);
            $this->getDoctrine()->getManager()->flush();
            return new Response("Cette promotion a été supprimé !");
        }
    }
    
    public function suppressioneleveAction(Request $request) {
        $idEleve =  $request->query->get('ideleve');
        $repository = $this->getDoctrine()->getRepository('PlanningUserBundle:Eleve');
        $Eleve = $repository->find($idEleve);
        $User = $this->getDoctrine()
                ->getRepository('PlanningUserBundle:User')->find($Eleve->getUseriduser());
        //return new Response($User->getId());
        if(is_null($Eleve) || !isset($Eleve) || is_null($User) || !isset($User)) {
            throw $this->createNotFoundException('Aucun Elève existe à cette id !');
        } else {
            $this->getDoctrine()->getManager()->remove($Eleve);
            $this->getDoctrine()->getManager()->flush();
            $this->getDoctrine()->getManager()->remove($User);
            $this->getDoctrine()->getManager()->flush();
            return new Response("Cet élève a été supprimé !");
        }
    }
    
    public function suppressionprofesseurAction(Request $request) {
        $idProfesseur =  $request->query->get('idprofesseur');
        $repository = $this->getDoctrine()->getRepository('PlanningUserBundle:Professeur');
        $Professeur = $repository->find($idProfesseur);
        $User = $this->getDoctrine()
                ->getRepository('PlanningUserBundle:User')->find($Professeur->getUseriduser());
        if(is_null($Professeur) || !isset($Professeur) || is_null($User) || !isset($User)) {
            throw $this->createNotFoundException('Aucun Professeur existe à cette id !');
        } else {
            $this->getDoctrine()->getManager()->remove($Professeur);
            $this->getDoctrine()->getManager()->flush();
            $this->getDoctrine()->getManager()->remove($User);
            $this->getDoctrine()->getManager()->flush();
            return new Response("Ce professeur a été supprimé !");
        }
    }
    
    public function suppressionmatiereAction(Request $request) {
        $idMatiere =  $request->query->get('idmatiere');
        $repository = $this->getDoctrine()->getRepository('PlanningUserBundle:Matiere');
        $Matiere = $repository->find($idMatiere);
//        return new Response($Matiere->getIdmatiere());
        if(is_null($Matiere) || !isset($Matiere)) {
            throw $this->createNotFoundException('Aucune Matière existe à cette id !');
        } else {
            $this->getDoctrine()->getManager()->remove($Matiere);
            $this->getDoctrine()->getManager()->flush();
            return new Response("Cette matière a été supprimé !");
        }
    }
    
    public function suppressionsiteAction(Request $request) {
        $idSite =  $request->query->get('idsite');
        $repository = $this->getDoctrine()->getRepository('PlanningUserBundle:Site');
        $Site = $repository->find($idSite);
        if(is_null($Site) || !isset($Site)) {
            throw $this->createNotFoundException('Aucun Site existe à cette id !');
        } else {
            $this->getDoctrine()->getManager()->remove($Site);
            $this->getDoctrine()->getManager()->flush();
            return new Response("Ce site a été supprimé !");
        }
    }
    
    public function suppressionsalleAction(Request $request) {
        $idSalle =  $request->query->get('idsalle');
        $repository = $this->getDoctrine()->getRepository('PlanningUserBundle:Salle');
        $Salle = $repository->find($idSalle);
        if(is_null($Salle) || !isset($Salle)) {
            throw $this->createNotFoundException('Aucune Salle existe à cette id !');
        } else {
            $this->getDoctrine()->getManager()->remove($Salle);
            $this->getDoctrine()->getManager()->flush();
            return new Response("Cette salle a été supprimé !");
        }
    }
    
    
    /************************************************************************************************************/
    /*
    /*                                            METHODES
    /************************************************************************************************************/

    public function ajouterEleve($registration) {
            $em = $this->getDoctrine()->getEntityManager();
            $User = $registration->getUseriduser();
            $em->persist($User);
            $em->flush();
            $newEleve = $registration;
            $Promotion = $registration->getPromotionidpromotion();
           
            $newEleve->setUseriduser($User);
            $newEleve->setPromotionidpromotion($Promotion);
            $em->persist($newEleve);
            $em->flush();
    }
    
    public function ajouterProfesseur($registration) {
        $em = $this->getDoctrine()->getEntityManager();
            $User = $registration->getUseriduser();
            $em->persist($User);
            $em->flush();
            $newProfesseur = $registration;
           
            $newProfesseur->setUseriduser($User);
            $em->persist($newProfesseur);
            $em->flush();
    }
    
    public function ajouterPromotion($registration) {
        $em = $this->getDoctrine()->getEntityManager();
            $newPromotion = $registration;
            $em->persist($newPromotion);
            $em->flush();
    }
    
    public function ajouterMatiere($registration) {
        $em = $this->getDoctrine()->getEntityManager();
            $newMatiere = $registration;
            $em->persist($newMatiere);
            $em->flush();
    }
    
    public function ajouterSite($registration) {
        $em = $this->getDoctrine()->getEntityManager();
            $newSite = $registration;
            $em->persist($newSite);
            $em->flush();
    }
    
    public function ajouterSalle($registration) {
        $em = $this->getDoctrine()->getEntityManager();
            $newSalle = $registration;
            $em->persist($newSalle);
            $em->flush();
    }
    
    public function ajouterCours($registration) {
        $em = $this->getDoctrine()->getEntityManager();
            $newCours = $registration;
            $em->persist($newCours);
            $em->flush();
    }
    
    public function affichagePlanning($idConnexion) {
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

            return $this->render('PlanningUserBundle:Advert:fullcalendar.html.twig', array('Cours' => $Cours,
                                                                                          'Promotion' => $Promotion));
    }
}
