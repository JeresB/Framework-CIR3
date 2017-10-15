<?php

namespace BackOfficeBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\Mapping as ORM;

class InternauteController extends Controller
{

    public function listAction() {
        $em = $this->get('doctrine')->getManager();
        $internautes = $em->getRepository('BackOfficeBundle:Internaute')->findAll();
        $taille = sizeof($internautes);

        return $this->render('BackOfficeBundle:Default:internautes.html.twig', array(
            'internautes' => $internautes,
            'taille' => $taille,
        ));
    }

    public function detailsAction($id) {
        $em = $this->get('doctrine')->getManager();
        $internaute = $em->getRepository('BackOfficeBundle:Internaute')->find($id);
        $annonces = $em->getRepository('BackOfficeBundle:Annonce')->findBy(array('internaute_id' => $id));
        $avis = $em->getRepository('BackOfficeBundle:Avis')->findBy(array('internauteId' => $id));

        return $this->render('BackOfficeBundle:Default:internaute.html.twig', array(
            'internaute' => $internaute,
            'annonces' => $annonces,
            'avis' => $avis,
        ));
    }
}
