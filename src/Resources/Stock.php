<?php

namespace AlphaVantage\Resources;

use AlphaVantage\ResourceAbstract;

class Stock extends ResourceAbstract
{
    // Intervals supported.
    const INTERVAL_1MIN = '1min';
    const INTERVAL_5MIN = '5min';
    const INTERVAL_15MIN = '15min';
    const INTERVAL_30MIN = '30min';
    const INTERVAL_60MIN = '60min';

    // Outputs supported.
    const OUTPUT_COMPACT = 'compact';
    const OUTPUT_FULL = 'full';

    public function intraday($symbol, $interval, $output_size = self::OUTPUT_COMPACT, $data_type = self::DATA_TYPE_JSON)
    {
        return $this->get([
            'function' => 'TIME_SERIES_INTRADAY',
            'symbol' => $symbol,
            'interval' => $interval,
            'outputsize' => $output_size,
            'datatype' => $data_type,
            'apikey' => $this->api_key,
        ]);
    }

    public function daily($symbol, $output_size = self::OUTPUT_COMPACT, $data_type = self::DATA_TYPE_CSV)
    {
        return $this->get([
            'function' => 'TIME_SERIES_DAILY',
            'symbol' => $symbol,
            'outputsize' => $output_size,
            'datatype' => $data_type,
            'apikey' => $this->api_key,
        ]);
    }

    public function dailyAdjusted($symbol, $output_size = self::OUTPUT_COMPACT, $data_type = self::DATA_TYPE_CSV)
    {
        return $this->get([
            'function' => 'TIME_SERIES_DAILY_ADJUSTED',
            'symbol' => $symbol,
            'outputsize' => $output_size,
            'datatype' => $data_type,
            'apikey' => $this->api_key,
        ]);
    }
}