[![Build Status](https://travis-ci.org/joseraul/alpha-vantage-api.svg?branch=master)](https://travis-ci.org/joseraul/alpha-vantage-api)

# Alpha Vantage API Client
Not official PHP Client for the Alpha Vantage service. 

## Example of use
```
use AlphaVantage\Client;

$alpha_vantage = new Client('api_key');
$data = $alpha_vantage
    ->stock()
    ->intraday('GOOGL', AlphaVantage\Resources\Stock::INTERVAL_1MIN);
```
## Resources
### Stocks
https://www.alphavantage.co/documentation/#time-series-data

#### Intraday
https://www.alphavantage.co/documentation/#intraday
```
$data = $alpha_vantage
    ->stock()
    ->intraday('GOOGL', AlphaVantage\Resources\Stock::INTERVAL_1MIN);
```

#### Daily
https://www.alphavantage.co/documentation/#daily
```
$data = $alpha_vantage
    ->stock()
    ->daily('GOOGL');
```

#### Daily Adjusted
https://www.alphavantage.co/documentation/#dailyadj
```
$data = $alpha_vantage
    ->stock()
    ->dailyAdjusted('GOOGL');
```