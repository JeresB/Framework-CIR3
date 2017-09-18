<?php

// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller
{
    /**
     * @Route("/datedujour")
     */
    public function numberAction()
    {
        $date = getdate();

        return $this->render('default/datedujour.html.twig', array(
            'date' => $date,
        ));
    }
}

?>