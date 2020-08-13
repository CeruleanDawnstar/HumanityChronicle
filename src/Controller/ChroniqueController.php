<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ChroniqueController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function affPageAccueil()
    {
        return $this->render('accueil/accueil.html.twig');
    }

    /**
     * @Route("/anecdote", name="anecdote")
     */
    public function affPageAnecdote()
    {
        return $this->render('accueil/anecdote.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function affPageContact()
    {
        return $this->render('footer/contact.html.twig');
    }

    /**
     * @Route("/apropos", name="apropos")
     */
    public function affPageApropos()
    {
        return $this->render('footer/apropos.html.twig');
    }

    /**
     * @Route("/rgpd", name="rgpd")
     */
    public function affPageRGPD()
    {
        return $this->render('footer/rgpd.html.twig');
    }
}