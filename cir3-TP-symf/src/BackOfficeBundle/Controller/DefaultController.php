<?php

namespace BackOfficeBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BackOfficeBundle\lib\Test;
use Doctrine\ORM\Mapping as ORM;

class DefaultController extends Controller
{
   
    public function indexAction()
    {
        return $this->render('BackOfficeBundle:Default:index.html.twig');
    }

    
    public function showIpAction()
    {
        $ip = $_SERVER['REMOTE_ADDR'];

        return $this->render('BackOfficeBundle:Default:ip.html.twig', array(
            'ip' => $ip,
        ));
    }

    public function test3Action()
    {
        $test = new Test();

        return $this->render('BackOfficeBundle:Default:testobject.html.twig', array(
            'test' => $test,
        ));
    }

    public function test4Action()
    {
        $test = new Test();
        $libelle = $test->getLibelle();
        $value = $test->getValue();
        $nb = $test->getNb();

        return $this->render('BackOfficeBundle:Default:testobject2.html.twig', array(
            'libelle' => $libelle,
            'value' => $value,
            'nb' => $nb,
        ));
    }

    public function exo3Action($vallibel, $valvalue, $valnb)
    {
        $test = new Test();

        $test->setLibelle($vallibel);
        $test->setValue($valvalue);
        $test->setNb($valnb);

        $libelle = $test->getLibelle();
        $value = $test->getValue();
        $nb = $test->getNb();

        return $this->render('BackOfficeBundle:Default:exo3.html.twig', array(
            'libelle' => $libelle,
            'value' => $value,
            'nb' => $nb,
        ));
    }

    public function exo4Action($vallibel, $valvalue, $valnb)
    {
        $test = new Test();

        $test->setLibelle($vallibel);
        $test->setValue($valvalue);
        $test->setNb($valnb);

        $libelle = $test->getLibelle();
        $value = $test->getValue();
        $nb = $test->getNb();

        return $this->render('BackOfficeBundle:Default:exo4.html.twig', array(
            'libelle' => $libelle,
            'value' => $value,
            'nb' => $nb,
        ));
    }

    public function getDBAction() {
        $em = $this->get('doctrine')->getManager();
        $annonce = $em->getRepository('BackOfficeBundle:Annonce');
        $annonces = $annonce->findAll();

        return $this->render('BackOfficeBundle:Default:db.html.twig', array(
            'test' => $annonces,
        ));
    }
}
