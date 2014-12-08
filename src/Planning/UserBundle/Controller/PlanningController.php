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

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Doctrine\Common\Collections\Criteria;

class PlanningController extends Controller {
    public function rechercheretudiantAction($id) {
        $Eleve = $this->getDoctrine()->getRepository('PlanningUserBundle:Eleve')->findAll();
        
        return new Response('Id du produit retrouvé : '.$Eleve);
    }
}
