<?php

namespace BackOfficeBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\Mapping as ORM;

class AnnonceController extends Controller
{

    public function listAction() {
        $em = $this->get('doctrine')->getManager();
        $annonces = $em->getRepository('BackOfficeBundle:Annonce')->findAll();

        return $this->render('BackOfficeBundle:Default:annonces.html.twig', array(
            'annonces' => $annonces,
        ));
    }
}
