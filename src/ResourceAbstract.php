<?php

namespace AlphaVantage;

use GuzzleHttp\Client;

abstract class ResourceAbstract
{
    // Data types supported.
    const DATA_TYPE_JSON = 'json';
    const DATA_TYPE_CSV = 'csv';

    protected $http_client;
    protected $api_key;
    protected $base_url = 'https://www.alphavantage.co/query';

    /**
     * ResourceAbstract constructor.
     *
     * @param $api_key
     * @param null $http_client
     */
    public function __construct($api_key, $http_client = null)
    {
        if(is_null($http_client)) {
            $http_client = new Client();
        }
        $this->http_client = $http_client;
        $this->api_key = $api_key;
    }

    /**
     * Perform a GET call to the API with $parameters.
     *
     * @param $parameters
     * @return mixed
     */
    protected function get($parameters)
    {
        $response = $this->http_client->get($this->base_url, [
                'query' => $parameters
            ]);

        return $this->filterResponse($response);
    }

    /**
     * Filter the response, try to maintain the original format.
     *
     * @param \Psr\Http\Message\ResponseInterface
     * @return mixed
     */
    protected function filterResponse(\Psr\Http\Message\ResponseInterface $response)
    {
        return json_decode($response->getBody()->getContents(), true);
    }
}