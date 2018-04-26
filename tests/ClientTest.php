<?php

use AlphaVantage\Client;

class ClientTest extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function stock_function_returns_stock_resource()
    {
        $alpha_vantage_client = new Client('api_key');
        $this->assertEquals('AlphaVantage\Resources\Stock', get_class($alpha_vantage_client->stock()));
    }

    /** @test */
    public function exchange_function_returns_exchange_resource()
    {
        $alpha_vantage_client = new Client('api_key');
        $this->assertEquals('AlphaVantage\Resources\Currency', get_class($alpha_vantage_client->currency()));
    }

    /** @test */
    public function indicator_function_returns_indicator_resource()
    {
        $alpha_vantage_client = new Client('api_key');
        $this->assertEquals('AlphaVantage\Resources\Indicator', get_class($alpha_vantage_client->indicator()));
    }
}