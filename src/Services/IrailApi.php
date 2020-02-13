<?php
namespace App\Services;

use Symfony\Component\HttpClient\HttpClient;

class IrailApi {
    public function utiliserIrail(){
        
        $client = HttpClient::create();
        $response = $client->request("GET", "https://api.irail.be:80/liveboard/?id=BE.NMBS.008812005&lang=fr&format=json");
        $phrase = $response->toArray()['value'];
        return $phrase;
        }
    }

}