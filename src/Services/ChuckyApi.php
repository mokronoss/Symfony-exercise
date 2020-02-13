<?php
namespace App\Services;

use Symfony\Component\HttpClient\HttpClient;

class ChuckyApi {

public function getPhrase(){
        $client = HttpClient::create();
        $response = $client->request("GET", "https://api.chucknorris.io/jokes/random");
        $phrase = $response->toArray()['value'];
        return $phrase;
}


