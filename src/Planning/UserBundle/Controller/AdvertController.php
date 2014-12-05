<?php
/**
 * Description of AdvertController
 *
 * @author Didjo'BG
 */

namespace Planning\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller{
    /**
     * @Template()
     */
    public function indexAction() {
        $cours = new \Planning\UserBundle\Entity\Cours();
        $lieu = $cours->getLieu();
        return $this->render('PlanningUserBundle:Advert:index.html.twig', array('lieu' => $lieu));
        //return new Response("Veuillez vous connectez !");
    }  
    
    public function homeAction() {
        return $this->render('PlanningUserBundle:Advert:accueil.html.twig');
        //return new Response("Bienvenue Dimitri et Geoffrey !");
    }
    
    public function planningAction() {
        return $this->render('PlanningUserBundle:Advert:planning.html.twig');
    }
}
