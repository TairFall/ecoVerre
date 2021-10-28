<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class CallApiService
{
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    public function getParisData(): array
    {
        $response = $this->client->request(
            'GET',
            'https://opendata.paris.fr/api/records/1.0/search/?dataset=dechets-menagers-points-dapport-volontaire-colonnes-a-verre&q=&facet=type_colonne&facet=code_postal&facet=etat&facet=flux'
        );

        return $response->toArray();
    }
}