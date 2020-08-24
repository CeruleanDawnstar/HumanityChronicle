<?php


namespace App\Controller;


use App\Entity\Anecdotes;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class AnecdoteController extends AbstractController
{
    /**
     * @Route("/anecdotes", name="anecdotes")
     * @return mixed
     */
    public function listAnecdote()
    {
        $anecdotes = $this->getDoctrine()->getRepository(Anecdotes::class)->findAll();
        return $this->render('anecdote/anecdote.html.twig',['data'=>$anecdotes]);
    }
}