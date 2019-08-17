<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
     * @Route("/accueil", name="accueil")
     */
    public function index()
    {
        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }

    /**
     * @Route("/apropos", name="apropos")
     */
    public function aPropos()
    {
        return $this->render('accueil/apropos.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }

    /**
     * @Route("/activites", name="activites")
     */
    public function activites()
    {
        return $this->render('accueil/activite.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
     public function contact()
     {
         return $this->render('accueil/contact.html.twig', [
             'controller_name' => 'AccueilController',
         ]);
     }
}
