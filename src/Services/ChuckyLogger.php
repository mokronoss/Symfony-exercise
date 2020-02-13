<?php

namespace App\Services;



use Psr\Log\LoggerInterface;
use Symfony\Component\HttpClient\HttpClient;

class ChuckyLogger
{

    private $logger;


    // pour pouvoir acceder a un parametres de services - dans contructeur
    // Je ne peux pas injecter un service dans UNE METHODE de l'autre service 
    // = > on peut le faire dans le constructeur  exemple : ChuckyLogger 

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }


    public function getPhrase()
    {
        // https://api.chucknorris.io/jokes/random

        $client = HttpClient::create();
        $response = $client->request("GET", "https://api.chucknorris.io/jokes/random");
        $phrase = $response->toArray()['value'];

        $this->logger->info("Appel au Service ChucyLogger ok!");

        return $phrase;
    }
}