<?php

namespace App\Cvrapi;

use GuzzleHttp\Client;

class Cvrapi
{
    protected $client;
    protected $url = 'http://cvrapi.dk/api?country=dk&search=';

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function search(string $phrase)
    {
        return json_decode($this->client->get($this->url . $phrase)->getBody());
    }
}
