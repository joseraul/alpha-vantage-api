<?php

namespace AlphaVantage\Resources;

use AlphaVantage\ResourceAbstract;

class Indicator extends ResourceAbstract
{
    // Intervals supported.
    const INTERVAL_1MIN = '1min';
    const INTERVAL_5MIN = '5min';
    const INTERVAL_15MIN = '15min';
    const INTERVAL_30MIN = '30min';
    const INTERVAL_60MIN = '60min';
    const INTERVAL_DAILY = 'daily';
    const INTERVAL_WEEKLY = 'weekly';
    const INTERVAL_MONTHLY = 'monthly';

    // Series type supported.
    const SERIES_TYPE_OPEN = 'open';
    const SERIES_TYPE_CLOSE = 'close';
    const SERIES_TYPE_HIGH = 'high';
    const SERIES_TYPE_LOW = 'low';

    /**
     * Make a call to the WMA indicator resource.
     * https://www.alphavantage.co/documentation/#wma
     *
     * @param string $symbol
     * @param string $interval
     * @param string $time_period
     * @param string $series_type
     * @return mixed
     */
    public function wma($symbol, $interval, $time_period, $series_type)
    {
        return $this->get([
            'function' => 'WMA',
            'symbol' => $symbol,
            'interval' => $interval,
            'time_period' => $time_period,
            'series_type' => $series_type,
            'apikey' => $this->api_key,
        ]);
    }
}