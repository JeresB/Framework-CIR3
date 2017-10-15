<?php

namespace MonDsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RouteElaboreeController extends Controller
{
    public function indexAction()
    {
        return $this->render('MonDsBundle:Default:index.html.twig');
    }

    public function dstp22Action()
    {
        return $this->render('MonDsBundle:Default:dstp22.html.twig');
    }

    public function dstp22MessageAction($message)
    {
        return $this->render('MonDsBundle:Default:dstp22Message.html.twig', array(
            'message' => $message,
        ));
    }
}
