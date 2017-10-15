<?php

namespace BackOfficeBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\Mapping as ORM;

class AvisController extends Controller
{

    public function listAction() {
        $em = $this->get('doctrine')->getManager();
        $avis = $em->getRepository('BackOfficeBundle:Avis')->findAll();

        return $this->render('BackOfficeBundle:Default:avis.html.twig', array(
            'avis' => $avis,
        ));
    }
}
