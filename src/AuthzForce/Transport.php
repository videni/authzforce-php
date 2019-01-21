<?php

namespace AuthzForce;

use AuthzForce\Endpoints\Domain;
use GuzzleHttp\Client as GuzzleHttpClient;

class Transport
{
    private  $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function request(AbstractEndpoint $endpoint)
    {
       $client = $this->createHttpClient();

       $response =  $client->request(
            $endpoint->getMethod(),
            $endpoint->getURI(),
            [
                'query' => $endpoint->getParams(),
                'body' => $endpoint->getBody(),
            ]
        );

       return $response;
    }

    private function createHttpClient()
    {
        if(isset($this->config['host'])) {

        }
        if(isset($this->config['port'])) {
            $this->config['port'] = 8080;
        }

        $baseURI = $this->config['host']. ':'. $this->config['port'];

        $client = new GuzzleHttp\GuzzleHttpClient([
            'base_uri' => $baseURI,
        ]);

        return $client;
    }
}
