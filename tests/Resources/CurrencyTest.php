<?php

use AlphaVantage\Resources\Currency;
use GuzzleHttp\Psr7\Response;

class CurrencyTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Generate the http client mock.
     *
     * @param $query_arguments
     * @param $response
     * @return \PHPUnit\Framework\MockObject\MockObject
     */
    protected function getHttpClientMock($query_arguments, $response)
    {
        $http_client = $this
            ->getMockBuilder(GuzzleHttp\Client::class)
            ->setMethods(['get'])
            ->getMock();

        $http_client
            ->expects($this->once())
            ->method('get')
            ->with(
                'https://www.alphavantage.co/query', [
                    'query' => $query_arguments
                ]
            )
            ->willReturn($response);

        return $http_client;
    }

    /** @test */
    public function exchange_method_makes_api_call_with_passed_parameters_and_it_returns_filtered_response()
    {
        $response = new Response(200, ['X-Foo' => 'Bar'], json_encode(['fake-response']));

        $http_client_mock = $this->getHttpClientMock([
            'function' => 'CURRENCY_EXCHANGE_RATE',
            'from_currency' => 'fake-from-currency',
            'to_currency' => 'fake-to-currency',
            'apikey' => 'fake-api_key',
        ], $response);

        $currency_client = new Currency('fake-api_key', $http_client_mock);
        $response = $currency_client->exchange('fake-from-currency', 'fake-to-currency');
        $this->assertEquals(['fake-response'], $response);
    }
}