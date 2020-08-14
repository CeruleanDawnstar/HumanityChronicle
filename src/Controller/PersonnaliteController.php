<?php


namespace App\Controller;


use App\Entity\Personnalite;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class PersonnaliteController
 * @package App\Controller
 * @Route("/personnalite")
 */
class PersonnaliteController extends AbstractController
{
//    /**
//     * @Route("/list", name="personnalite")
//     */
//    public function listPersonnalite()
//    {
//        $conn = $this->getDoctrine()->getConnection();
//        $sql = 'SELECT id, nom, date_naissance, date_deces, biographie, img_url FROM personnalite';
//        $stmt = $conn->prepare($sql);
//        $stmt->execute();
//
//        return $this->render('personnalite/personnalitelist.html.twig', ['data'=>$stmt->fetchAll()]);
//    }

    /**
     * @Route("/list", name="personnalite")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listPersonnalite()
    {
        $personnalite = $this->getDoctrine()->getRepository(Personnalite::class)->findAll();
        return $this->render('personnalite/personnalitelist.html.twig',['data'=>$personnalite]);
    }

    /**
     * @Route("/{personnalite}", name="detailsPersonnalite", requirements={"personnalite"="\d+"})
     * @param Personnalite $personnalite
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function detailPersonnalite(Personnalite $personnalite)
    {
        return $this->render('personnalite/detailsPersonnalite.html.twig', ['personnalite' => $personnalite]);
    }
}