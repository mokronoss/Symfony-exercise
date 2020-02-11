<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EmbedApiController extends AbstractController
{
    /**
     * @Route("/embed/api/vue1", name="embed_api1")
     */


     //action
    public function afficherVue1()
    {
        return $this->render('embed_api/affiche_vue1_api.html.twig');
    }

    /**
     * @Route("/embed/api/vue2", name="embed_api2")
     */
    public function afficherVue2()
    {
        return $this->render('embed_api/affiche_vue2_api.html.twig');
    }

    public function donneesApi( $nom )
    {
        return $this->render('embed_api/donnees_api.html.twig', ['nom' => $nom ]);
    }
}
