<?php

namespace MonDsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class dstp23Controller extends Controller
{
    public function indexAction()
    {
        return $this->render('MonDsBundle:Default:index.html.twig');
    }

    public function dstp23Action()
    {
        $nombre_alea = rand(15, 85);

        return $this->render('MonDsBundle:Default:dstp23.html.twig', array(
            'nombre_alea' => $nombre_alea,
        ));
    }
}
