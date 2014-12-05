<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CoursController
 *
 * @author Didjo'BG
 */

namespace Planning\UserBundle\Controller;

use Planning\UserBundle\Entity\Cours;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;

class CoursController extends Controller{
    
    /**Ajouter un cours dans la base de donnée**/
    public function ajoutercoursAction() {
        /*$dateDebut = new DateTime('2014-12-01');
        $dateFin = new DateTime('2014-12-19');*/
        
        $dure = "7";
        $lieu = "jussieu";
        $matiere = "php";
        $cours = new Cours();
        
        /*$cours->setDateDebut($dateDebut);
        $cours->setDateFin($dateFin);*/
        $cours->setDure($dure);
        $cours->setLieu($lieu);
        $cours->setMatiere($matiere);
        $em = $this->getDoctrine()->getManager();
        $em->persist($cours);
        $em->flush();
        return new Response('Id du produit créé : '.$cours->getIdCours());
    }  
    
    /**Récupérer un cours dans la base de donnée**/
    public function recuperercoursAction() {
        $id=1;
        $cours = new Cours();
        $cours = $this->getDoctrine()
        ->getRepository('PlanningUserBundle:Cours')
        ->find($id);

        if (!$cours) {
            throw $this->createNotFoundException(
                'Aucun produit trouvé pour cet id : '.$id
            );
        } else {
            return new Response ('Voici les caracteristiques du cours : '.$cours->getDure().'<br>'.$cours->getLieu().'<br>'.$cours->getMatiere());
        }
    }
}
