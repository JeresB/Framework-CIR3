<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FrontOfficeBundle:Default:index.html.twig');
    }

    public function messageAction($message)
    {
        return $this->render('FrontOfficeBundle:Default:message.html.twig', array(
            'message' => $message,
        ));
    }

    public function test1Action($numero)
    {
        return $this->render('FrontOfficeBundle:Default:numero.html.twig', array(
            'numero' => $numero,
        ));
    }

    public function test2Action($texte)
    {
        return $this->render('FrontOfficeBundle:Default:texte.html.twig', array(
            'texte' => $texte,
        ));
    }
}
