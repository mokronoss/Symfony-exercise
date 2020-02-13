<?php

namespace App\Controller;

use App\Services\Bonjour;
use App\Services\ChuckyApi;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ServicesExemplesController extends AbstractController
{
    /**
     * @Route("/services/exemples", name="services_exemples")
     */
    public function utiliseLogger(LoggerInterface $logger)
    {
        $logger->info("les infos de moi");
        $logger->error("l'avion est en feu"); // autiliser p.ex dans le catch de try catch
        return $this->render('services_exemples/utilise_logger.html.twig');
    }

    /**
     * @Route("/services/exemples/Bonjour", name="services_exemples")
     */
    public function utiliseBonjour(Bonjour $objBonjour)
    {
        $msg = $objBonjour->direBonjour();
        return $this->render('services_exemples/utilise_bonjour.html.twig', ['msg' => $msg]);
    }

    /**
     * @Route("/services/exemples/ChuckyApi", name="services_exemples")
     */
    public function utiliseChuckyApi(ChuckyApi $objChuckyApi)
    {
        $msg = $objChuckyApi->getPhrase();
        return $this->render(
            'services_exemples/utilise_chuckyapi.html.twig',
            ['msg' => $msg]
        );
    }
}
