# alpha-vantage-api
Alpha Vantage API Client

# Example of use
```
use AlphaVantage\Client;

$alpha_vantage = new Client('demo');
$data = $alpha_vantage
    ->stock()
    ->intraday('NFEC', AlphaVantage\Resources\Stock::INTERVAL_1MIN);
```