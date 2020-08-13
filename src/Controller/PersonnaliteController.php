<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class PersonnaliteController
 * @package App\Controller
 * @Route("/personnalite")
 */
class PersonnaliteController extends AbstractController
{
    /**
     * @Route("/list", name="personnalite")
     */
    public function listPersonnalite()
    {
        $conn = $this->getDoctrine()->getConnection();
        $sql = 'SELECT id, nom, date_naissance, date_deces, biographie, img_url FROM personnalite';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $this->render('personnalite/personnalitelist.html.twig', ['data'=>$stmt->fetchAll()]);
    }


}