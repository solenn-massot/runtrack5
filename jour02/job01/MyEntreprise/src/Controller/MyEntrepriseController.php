<?php

namespace App\Controller;

use App\Entity\Projets;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MyEntrepriseController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home()
    {

        return $this->render('myEntreprise/home.html.twig', [
            'controller_name' => 'MyEntrepriseController',
        ]);
    }
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

    /**
     * @Route("/myentreprise/projet/{id}", name="project_page")
     */
    public function projectPage($id)
    {
        $projet = $this->getDoctrine()->getRepository(Projets::class)->findOneBy(['id' => $id]);
        if (!$projet) {
            // Si aucun article n'est trouvé, nous créons une exception
            throw $this->createNotFoundException('Le projet n\'existe pas');
        }
        // Si l'article existe nous envoyons les données à la vue
        return $this->render('myEntreprise/projectPage.html.twig', compact('projet'));
    }
}
