<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/test/{name}/{firstname}", name="homepage")
     * @Template()
     */
    public function indexAction($name="Elodie", $firstname="Morel")
    {
        $eManager = $this->getDoctrine()->getManager();
        $loisirs = $eManager->getRepository("AppBundle:Loisir")->FindAll();
        
       return array('name' => $name, 'firstname' => $firstname, 'lo'=> $loisirs);
    }
    
    /**
     * @Route("/admin")
     */
     public function adminAction()
     {
         return new Response('<html><body>Admin page!</body></html>');
     }
    
    public function insertAction ()
    {
    $form = new Formation();
    $form->setName('Ma formation');
    $form->setLieu('Grenoble');
    $form->setDateDebut(new \DateTime());
    $form->setDateFin(new \DateTime());
    
    $eManager=$this->getDoctrine()->getManager();
    $eManager->persist($form);
    
    $eManager->flush();
    
    return array();
    }
    
}
