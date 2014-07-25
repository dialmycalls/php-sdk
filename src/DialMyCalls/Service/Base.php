<?php

namespace DialMyCalls\Service;

use DialMyCalls\Client;

class Base
{
    /**
     * API client.
     *
     * @var Client
     */
    protected $client;

    /**
     * Request Exception.
     *
     * @var \Exception
     */
    protected $exception;

    /**
     * Constructor
     *
     * @param Client $client API client.
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Get exception.
     *
     * @return boolean|\Exception
     */
    public function getException()
    {
        if ($this->exception instanceof \Exception) {
            return $this->exception;
        }

        return false;
    }
}
