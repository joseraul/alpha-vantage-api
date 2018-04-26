<?php

namespace AlphaVantage;

use AlphaVantage\Resources\Currency;
use AlphaVantage\Resources\Stock;
use AlphaVantage\Resources\Indicator;

/**
 * Simple wrapper for Alpha Vantage finance api.
 * https://www.alphavantage.co/documentation/
 *
 * Class Client
 * @package JoseRaul\AlphaVantage
 */
class Client
{
    private $stock_client;
    private $currency_client;
    private $indicator_client;

    /**
     * Client constructor.
     *
     * @param $api_key
     * @param Stock|null $stock_client
     * @param Currency|null $currency_client
     * @param Indicator|null $indicator_client
     */
    public function __construct($api_key, Stock $stock_client = null, Currency $currency_client = null, Indicator $indicator_client = null)
    {
        if (is_null($stock_client)) {
            $stock_client = new Stock($api_key);
        }
        if (is_null($currency_client)) {
            $currency_client = new Currency($api_key);
        }
        if (is_null($indicator_client)) {
            $indicator_client = new Indicator($api_key);
        }
        $this->stock_client = $stock_client;
        $this->currency_client = $currency_client;
        $this->indicator_client = $indicator_client;
    }

    /**
     * Return the stock resource.
     *
     * @return Stock
     */
    public function stock()
    {
        return $this->stock_client;
    }

    /**
     * Return the exchange resource.
     *
     * @return Currency
     */
    public function currency()
    {
        return $this->currency_client;
    }

    /**
     * Return the indicator resource.
     *
     * @return Indicator
     */
    public function indicator()
    {
        return $this->indicator_client;
    }
}