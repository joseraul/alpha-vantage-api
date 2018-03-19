# alpha-vantage-api
Alpha Vantage API Client

# Example of use
``
use AlphaVantage\Client;

$alpha_vantage = new Client('ZQ2AW1FN7V9Z6JE4');
$data = $alpha_vantage
    ->stock()
    ->intraday('NFEC', AlphaVantage\Resources\Stock::INTERVAL_1MIN);
``