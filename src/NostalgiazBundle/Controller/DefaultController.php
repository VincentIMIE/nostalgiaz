<?php

namespace NostalgiazBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('NostalgiazBundle:Utilisateur')->findAll();

        return $this->render('NostalgiazBundle:Default:index.html.twig', array('users' => $users));
    }

}
