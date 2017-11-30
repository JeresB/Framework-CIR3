<?php

namespace BackOfficeBundle\Controller;

use BackOfficeBundle\Entity\Internaute;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
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

    public function addAction(Request $request) {
        $internaute = new Internaute();

        $form = $this->createFormBuilder($internaute)
            ->add('Nom',    TextType::class)
            ->add('Prenom', TextType::class)
            ->add('Mail',   EmailType::class)
            ->add('Tel',    TextType::class)
            ->add('Actif', CheckboxType::class)
            ->add('Ajouter',      SubmitType::class)
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();

            $em = $this->get('doctrine')->getManager();
            $em->persist($user);
            $em->flush($user);

            return $this->redirectToRoute('back_office_listInternaute');
        }

        return $this->render('BackOfficeBundle:Default:add_internaute.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
