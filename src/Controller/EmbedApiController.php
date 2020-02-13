<?php

namespace App\Controller;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EmbedApiController extends AbstractController
{
    /**
     * @Route("/embed/api/vue1", name="embed_api1")
     */


     //action
    public function afficherVue1()
    {
                // https://api.chucknorris.io/jokes/random

                $client = HttpClient::create();
                $response = $client->request("GET", "https://api.chucknorris.io/jokes/random");
                $phrase = $response->toArray()['value'];
        
                return $this->render(
                    'embed_api/affiche_vue1_api.html.twig',
                    ['phrase' => $phrase]
                );
       
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
