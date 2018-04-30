[![Build Status](https://travis-ci.org/joseraul/alpha-vantage-api.svg?branch=master)](https://travis-ci.org/joseraul/alpha-vantage-api)

# Alpha Vantage API Client
PHP Client for the [Alpha Vantage](https://www.alphavantage.co/documentation/) service. 

* [Installation](https://github.com/joseraul/alpha-vantage-api#installation)
* [Resources](https://github.com/joseraul/alpha-vantage-api#resources)
    * [Stocks](https://github.com/joseraul/alpha-vantage-api#stocks)
    * [Currencies](https://github.com/joseraul/alpha-vantage-api#currency)
    * [Indicators](https://github.com/joseraul/alpha-vantage-api#indicators)

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

### Indicators
https://www.alphavantage.co/documentation/#technical-indicators

#### SMA
https://www.alphavantage.co/documentation/#sma
```
$data = $alpha_vantage
    ->indicator()
    ->sma('GOOGL', AlphaVantage\Resources\Indicator::INTERVAL_1MIN, 60, AlphaVantage\Resources\Indicator::SERIES_TYPE_HIGH);
```

#### WMA
https://www.alphavantage.co/documentation/#wma
```
$data = $alpha_vantage
    ->indicator()
    ->wma('GOOGL', AlphaVantage\Resources\Indicator::INTERVAL_1MIN, 60, AlphaVantage\Resources\Indicator::SERIES_TYPE_HIGH);
```