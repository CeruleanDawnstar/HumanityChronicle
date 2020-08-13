<?php


namespace App\Controller;


use App\Entity\Invention;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class InventController
 * @package App\Controller
 * @Route("/invent")
 */
class InventController extends AbstractController
{
    /**
     * @Route("/{invent}", name="detailsInvention", requirements={"invent"="\d+"})
     * @param Invention $invent
     * @return Response
     */
    public function detailInvention(Invention $invent)
    {
        return $this->render('invent/detailsInvention.html.twig', ['invention' => $invent]);
    }

    /**
     * @Route("/list", name="listInvention")
     * @return Response
     */
    public function listInvention()
    {
        $conn = $this->getDoctrine()->getConnection();
        $sql = 'SELECT id, titre, extrait, detail, img_url FROM invention';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $this->render('invent/listInvention.html.twig',['data'=>$stmt->fetchAll()]);
    }

    /**
     * @Route("/list/prehistoire", name="listInventionPrehistoire")
     * @return Response
     */
    public function filtreInventionPrehistoire()
    {
        $conn = $this->getDoctrine()->getConnection();
        $sql = 'SELECT id, titre, extrait, detail, img_url FROM invention WHERE epoque = \'préhistoire\'';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $this->render('invent/listInvention.html.twig',['data'=>$stmt->fetchAll()]);
    }

    /**
     * @Route("/list/antiquite", name="listInventionAntiquite")
     * @return Response
     */
    public function filtreInventionAntiquite()
    {
        $conn = $this->getDoctrine()->getConnection();
        $sql = 'SELECT id, titre, extrait, detail, img_url FROM invention WHERE epoque = \'antiquité\'';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $this->render('invent/listInvention.html.twig',['data'=>$stmt->fetchAll()]);
    }

    /**
     * @Route("/list/moyenage", name="listInventionMoyenAge")
     * @return Response
     */
    public function filtreInventionMoyenage()
    {
        $conn = $this->getDoctrine()->getConnection();
        $sql = 'SELECT id, titre, extrait, detail, img_url FROM invention WHERE epoque = \'moyen age\'';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $this->render('invent/listInvention.html.twig',['data'=>$stmt->fetchAll()]);
    }

    /**
     * @Route("/list/moderne", name="listInventionModerne")
     * @return Response
     */
    public function filtreInventionModerne()
    {
        $conn = $this->getDoctrine()->getConnection();
        $sql = 'SELECT id, titre, extrait, detail, img_url FROM invention WHERE epoque = \'moderne\'';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $this->render('invent/listInvention.html.twig',['data'=>$stmt->fetchAll()]);
    }

    /**
     * @Route("/list/contemporaine", name="listInventionContemporaine")
     * @return Response
     */
    public function filtreInventionContemporaine()
    {
        $conn = $this->getDoctrine()->getConnection();
        $sql = 'SELECT id, titre, extrait, detail, img_url FROM invention WHERE epoque = \'contemporaine\'';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $this->render('invent/listInvention.html.twig',['data'=>$stmt->fetchAll()]);
    }
}