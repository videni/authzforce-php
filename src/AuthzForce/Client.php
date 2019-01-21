<?php

namespace AuthzForce;

use AuthzForce\Endpoints\Domain;
use GuzzleHttp\Client as GuzzleHttpClient;
use AuthzForce\Endpoints\EndpointFactory;

class Client
{
    private $transport;

    public function __construct(Transport $transport)
    {
        $this->transport = $transport;
    }

    public function domain()
    {
        return new Domain($this->transport);
    }
}
