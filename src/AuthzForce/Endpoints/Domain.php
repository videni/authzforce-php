<?php

namespace AuthzForce\Endpoints;

use AuthzForce\Endpoints\Domain\Create;
use AuthzForce\Transport;

class Domain
{
    private $transport;

    public function __construct(Transport $transport)
    {
        $this->transport = $transport;
    }

	public function create(array $params)
    {
       $create =  new Create();
       $create->setExternalId($params['external_id']);
       $create->setExternalId($params['description']);

       return $this->transport->request($create);
    }

    public function delete($domainId)
    {
        $delete = new Delete();

        $delete->setDomainID($domainId);

        return $this->transport->request($delete);
    }
}
