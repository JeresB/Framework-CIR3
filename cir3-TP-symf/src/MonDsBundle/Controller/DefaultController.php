<?php

namespace MonDsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MonDsBundle:Default:index.html.twig');
    }

    public function dstp21Action()
    {
        return $this->render('MonDsBundle:Default:dstp21.html.twig');
    }
}
