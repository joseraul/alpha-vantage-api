[![Build Status](https://travis-ci.org/joseraul/alpha-vantage-api.svg?branch=master)](https://travis-ci.org/joseraul/alpha-vantage-api)

# Alpha Vantage API Client
Not official PHP Client for the Alpha Vantage service. 

## Installation
```composer require joseraul/alpha-vantage-api```

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

#### Weekly
https://www.alphavantage.co/documentation/#weekly
```
$data = $alpha_vantage
    ->stock()
    ->weekly('GOOGL');
```

#### Weekly Adjusted
https://www.alphavantage.co/documentation/#weeklyadj
```
$data = $alpha_vantage
    ->stock()
    ->weeklyAdjusted('GOOGL');
```

#### Monthly
https://www.alphavantage.co/documentation/#monthly
```
$data = $alpha_vantage
    ->stock()
    ->monthly('GOOGL');
```

#### Monthly Adjusted
https://www.alphavantage.co/documentation/#monthlyadj
```
$data = $alpha_vantage
    ->stock()
    ->monthlyAdjusted('GOOGL');
```

### Currency
https://www.alphavantage.co/documentation/#fx

#### Exchange Rate
https://www.alphavantage.co/documentation/#currency-exchange
```
$data = $alpha_vantage
    ->currency()
    ->exchange('BTC', 'USD');
```