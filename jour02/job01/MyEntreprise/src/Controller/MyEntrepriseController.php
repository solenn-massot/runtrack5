<?php

namespace App\Controller;

use App\Entity\Projets;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MyEntrepriseController extends AbstractController
{
    /**
     * @Route("/myentreprise", name="myEntreprise")
     */
    public function index()
    {
        $projets = $this->getDoctrine()
        ->getRepository(Projets::class)
        ->findAll();

        return $this->render('myEntreprise/index.html.twig', [
            'controller_name' => 'MyEntrepriseController',
            'projets' => $projets,
        ]);
    }
}
