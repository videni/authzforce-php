<?php

namespace AuthzForce\Endpoints;

abstract class AbstractEndpoint
{
    public const HTTP_METHOD_POST= 'POST';
    public const HTTP_METHOD_DELETE= 'DELETE';
    public const HTTP_METHOD_PUT= 'PUT';
    public const HTTP_METHOD_GET= 'GET';

     /** @var  [] */
    protected $params;

     /** @var  string */
    protected $method = null;

    /** @var  array */
    protected $body = null;

    /** @var array  */
    private $options = [];

    /**
     * @return string
     */
    abstract public function getURI();
    /**
     * @return string
     */
    abstract public function getMethod();

    /**
     * @return array
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set the parameters for this endpoint
     *
     * @param string[] $params Array of parameters
     * @return $this
     */
    public function setParams($params)
    {
        $this->params;

        return $this;
    }

     /**
     * @return array
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }
}
