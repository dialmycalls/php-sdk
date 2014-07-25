<?php

namespace DialMyCalls;

use DialMyCalls\Exception;
use GuzzleHttp\Exception\RequestException;

class Client
{
    const API_URL = 'http://%s@api.dialmycalls.com/2.0/';

    protected $apiKey = null;
    protected $apiUrl = null;

    /**
     * Constructor.
     *
     * @param string $apiKey API key.
     */
    public function __construct($apiKey = null)
    {
        if (!empty($apiKey)) {
            $this->setApiKey($apiKey);
        }
    }

    /**
     * Set the API key.
     *
     * @param string $apiKey API key.
     *
     * @return $this
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
        $this->apiUrl = sprintf(self::API_URL, $this->apiKey);

        return $this;
    }

    /**
     * Make API request.
     *
     * @throws \Exception
     *
     * @param string $method   HTTP method [GET / POST / PUT / DELETE].
     * @param string $endpoint API endpoint.
     * @param array  $data     The request body.
     *
     * @return boolean|array
     */
    public function request($method, $endpoint, array $data = array())
    {
        $client = new \GuzzleHttp\Client();
        $request = $client->createRequest(
            $method,
            $this->apiUrl . $endpoint,
            array(
                'body'    => json_encode($data),
                'headers' => array(
                    'Content-Type' => 'application/json',
                    'Accept'       => 'application/json',
                ),
            )
        );

        try {
            $response = $client->send($request);
            $body = $response->json();

            return $body;
        } catch (RequestException $e) {
            $response = $e->getResponse();
            $body     = $response->json();

            switch ((int) $response->getStatusCode()) {
                case 400:
                    throw new Exception\ValidationException($body['results']['error']['message']);
                    break;
                case 401:
                    throw new Exception\AuthenticationException('Failed authentication.');
                    break;
                case 402:
                    throw new Exception\PaymentRequiredException('Payment required.');
                    break;
                case 404:
                    throw new Exception\NotFoundException('Resource not found.');
                    break;
                case 500:
                    throw new Exception\ServerException('Server error.');
                    break;
            }
        }

        return false;
    }
}
