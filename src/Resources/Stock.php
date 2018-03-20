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

    /**
     * Make a call to the intraday resource.
     * https://www.alphavantage.co/documentation/#intraday
     *
     * @param string $symbol
     * @param string $interval
     * @param string $output_size
     * @param string $data_type
     * @return mixed
     */
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

    /**
     * Make a call to the daily resource.
     * https://www.alphavantage.co/documentation/#daily
     *
     * @param string $symbol
     * @param string $output_size
     * @param string $data_type
     * @return mixed
     */
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

    /**
     * Make a call to the daily adjusted resource.
     * https://www.alphavantage.co/documentation/#dailyadj
     *
     * @param $symbol
     * @param string $output_size
     * @param string $data_type
     * @return mixed
     */
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

    /**
     * Make a call to the weekly resource.
     * https://www.alphavantage.co/documentation/#weekly
     *
     * @param $symbol
     * @param string $output_size
     * @param string $data_type
     * @return mixed
     */
    public function weekly($symbol, $output_size = self::OUTPUT_COMPACT, $data_type = self::DATA_TYPE_CSV)
    {
        return $this->get([
            'function' => 'TIME_SERIES_WEEKLY',
            'symbol' => $symbol,
            'outputsize' => $output_size,
            'datatype' => $data_type,
            'apikey' => $this->api_key,
        ]);
    }

    /**
     * Make a call to the weekly adjusted resource.
     * https://www.alphavantage.co/documentation/#weeklyadj
     *
     * @param $symbol
     * @param string $output_size
     * @param string $data_type
     * @return mixed
     */
    public function weeklyAdjusted($symbol, $output_size = self::OUTPUT_COMPACT, $data_type = self::DATA_TYPE_CSV)
    {
        return $this->get([
            'function' => 'TIME_SERIES_WEEKLY_ADJUSTED',
            'symbol' => $symbol,
            'outputsize' => $output_size,
            'datatype' => $data_type,
            'apikey' => $this->api_key,
        ]);
    }

    /**
     * Make a call to the monthly resource.
     * https://www.alphavantage.co/documentation/#monthly
     *
     * @param $symbol
     * @param string $output_size
     * @param string $data_type
     * @return mixed
     */
    public function monthly($symbol, $output_size = self::OUTPUT_COMPACT, $data_type = self::DATA_TYPE_CSV)
    {
        return $this->get([
            'function' => 'TIME_SERIES_MONTHLY',
            'symbol' => $symbol,
            'outputsize' => $output_size,
            'datatype' => $data_type,
            'apikey' => $this->api_key,
        ]);
    }

    /**
     * Make a call to the monthly adjusted resource.
     * https://www.alphavantage.co/documentation/#monthlyadj
     *
     * @param $symbol
     * @param string $output_size
     * @param string $data_type
     * @return mixed
     */
    public function monthlyAdjusted($symbol, $output_size = self::OUTPUT_COMPACT, $data_type = self::DATA_TYPE_CSV)
    {
        return $this->get([
            'function' => 'TIME_SERIES_MONTHLY_ADJUSTED',
            'symbol' => $symbol,
            'outputsize' => $output_size,
            'datatype' => $data_type,
            'apikey' => $this->api_key,
        ]);
    }
}