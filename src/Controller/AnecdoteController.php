<?php


namespace App\Controller;


use App\Entity\Anecdotes;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class AnecdoteController
 * @package App\Controller
 * @Route("/anecdotes")
 */
class AnecdoteController extends AbstractController
{
    /**
     * @Route("/list", name="listAnecdotes")
     * @return mixed
     */
    public function listAnecdote()
    {
        $anecdotes = $this->getDoctrine()->getRepository(Anecdotes::class)->findAll();
        return $this->render('anecdote/listAnecdote.html.twig',['data'=>$anecdotes]);
    }

    /**
     * @Route("/{anecdote}", name="detailsAnecdote", requirements={"anecdote"="\d+"})
     * @param Anecdotes $anecdote
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function detailAnecdotes(Anecdotes $anecdote)
    {
        return $this->render('anecdote/detailsAnecdotes.html.twig', ['anecdotes' => $anecdote]);
    }
}