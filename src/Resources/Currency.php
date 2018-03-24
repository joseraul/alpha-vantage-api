<?php

namespace AlphaVantage\Resources;

use AlphaVantage\ResourceAbstract;

class Currency extends ResourceAbstract
{
    /**
     * Make a call to the exchange rate resource.
     * https://www.alphavantage.co/documentation/#currency-exchange
     *
     * @param string $from_currency
     * @param string $to_currency
     * @return mixed
     */
    public function exchange($from_currency, $to_currency)
    {
        return $this->get([
            'function' => 'CURRENCY_EXCHANGE_RATE',
            'from_currency' => $from_currency,
            'to_currency' => $to_currency,
            'apikey' => $this->api_key,
        ]);
    }
}