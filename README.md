# Alpha Vantage API Client
Not official PHP Client for the Alpha Vantage service. 
[![Build Status](https://travis-ci.org/joseraul/alpha-vantage-api.svg?branch=master)](https://travis-ci.org/joseraul/alpha-vantage-api)

## Example of use
```
use AlphaVantage\Client;

$alpha_vantage = new Client('demo');
$data = $alpha_vantage
    ->stock()
    ->intraday('NFEC', AlphaVantage\Resources\Stock::INTERVAL_1MIN);
```