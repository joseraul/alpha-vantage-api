<?php

namespace AlphaVantage;

use AlphaVantage\Resources\Stock;

/**
 * Simple wrapper for Alpha Vantage finance api.
 * https://www.alphavantage.co/documentation/
 *
 * Class Client
 * @package JoseRaul\AlphaVantage
 */
class Client
{
    const INTRADAY = 'TIME_SERIES_INTRADAY';
    const DAILY = 'TIME_SERIES_DAILY';

    private $stock_client;

    public function __construct($api_key, Stock $stock_client = null)
    {
        if (is_null($stock_client)) {
            $stock_client = new Stock($api_key);
        }
        $this->stock_client = $stock_client;
    }

    public function stock()
    {
        return $this->stock_client;
    }
}