<?php

require 'vendor/autoload.php';

use AlphaVantage\Client;

$alpha_vantage = new Client('ZQ2AW1FN7V9Z6JE4');
$data = $alpha_vantage
    ->stock()
    ->intraday('NFEC', AlphaVantage\Resources\Stock::INTERVAL_1MIN);

print_r($data);