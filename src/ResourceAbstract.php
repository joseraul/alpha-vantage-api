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

    public function __construct($api_key, $http_client = null)
    {
        if(is_null($http_client)) {
            $http_client = new Client();
        }
        $this->http_client = $http_client;
        $this->api_key = $api_key;
    }

    protected function get($parameters)
    {
        $response = $this->http_client->get($this->base_url, [
                'query' => $parameters
            ]);

        return $this->filterResponse($response);
    }

    protected function filterResponse(\GuzzleHttp\Psr7\Response $response)
    {
        return json_decode($response->getBody()->getContents(), true);
    }
}