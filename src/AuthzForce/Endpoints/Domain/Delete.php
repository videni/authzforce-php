<?php

namespace AuthzForce\Endpoints\Domain;

use AuthzForce\Exceptions\UnexpectedValueException;

class Delete extends AbstractEndpoint
{
    private $domainID;

    public function getURI()
    {
        if (!$this->getDomainID){
            throw new \LogicException('Domain id is required');
        }

        return '/domains/'. $this->getDomainID();
    }

    public function getMethod()
    {
        return self::HTTP_METHOD_DELETE;
    }

    /**
     * @return mixed
     */
    public function getDomainID()
    {
        return $this->domainID;
    }

    /**
     * @param mixed $domainID
     *
     * @return self
     */
    public function setDomainID($domainID)
    {
        $this->domainID = $domainID;

        return $this;
    }
}
