<?php

namespace AuthzForce\Endpoints\Domain;

class Create extends AbstractEndpoint
{
    private $externalId;

    private $description;

    public function getURI()
    {
        return '/domains';
    }

    public function getMethod()
    {
        return self::HTTP_METHOD_POST;
    }

    public function getBody()
    {
        if(! $this->getExternalId()) {
            throw new \RuntimeException('external_id is required for Domain creation');
        }

        return [
            'external_id' => $this->getExternalId(),
            'description' => $this->getDescription(),
        ];
    }

    /**
     * @return mixed
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * @param mixed $externalId
     *
     * @return self
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}
