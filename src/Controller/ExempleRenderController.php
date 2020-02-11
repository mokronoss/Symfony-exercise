<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ExempleRenderController extends AbstractController
{
    /**
     * @Route("/exemple/render", name="exemple_render")
     */
    public function index()
    {
        return $this->render('exemple_render/index.html.twig', [
            // 'controller_name' => 'ExempleRenderController',
        ]);
    }

    // action envoyant un string
    /**
     * @Route("/exemple/ville")
     */
    public function envoyerVille()
    {
        $ville = "Bruxelles";

        return $this->render('exemple_render/envoyer_ville.html.twig', [
            "ville" => $ville
        ]);
    }

    // action envoyant un tableau
    // on peut également envoyer un ibjet
       /**
     * @Route("/exemple/villes")
     */
    public function envoyerVilles(){
        $villes = ['Bruxelles', 'Kigali', 'Colmar'];
        return $this->render('exemple_render/envoyer_villes.html.twig', [
            'villes' => $villes
        ]);
    }
}
