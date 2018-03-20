<?php

use AlphaVantage\Resources\Stock;
use GuzzleHttp\Psr7\Response;

class StockTest extends \PHPUnit\Framework\TestCase
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
    public function intraday_method_makes_api_call_with_passed_parameters_and_it_returns_filtered_response()
    {
        $response = new Response(200, ['X-Foo' => 'Bar'], json_encode(['fake-response']));

        $http_client_mock = $this->getHttpClientMock([
            'function' => 'TIME_SERIES_INTRADAY',
            'symbol' => 'fake-symbol',
            'interval' => 'fake-interval',
            'outputsize' => 'fake-ouput',
            'datatype' => 'fake-data-type',
            'apikey' => 'fake-api_key',
        ], $response);

        $alpha_vantage_client = new Stock('fake-api_key', $http_client_mock);
        $response = $alpha_vantage_client->intraday('fake-symbol', 'fake-interval', 'fake-ouput', 'fake-data-type');
        $this->assertEquals(['fake-response'], $response);
    }

    /** @test */
    public function daily_method_makes_api_call_with_passed_parameters_and_it_returns_filtered_response()
    {
        $response = new Response(200, ['X-Foo' => 'Bar'], json_encode(['fake-response']));

        $http_client_mock = $this->getHttpClientMock([
            'function' => 'TIME_SERIES_DAILY',
            'symbol' => 'fake-symbol',
            'outputsize' => 'fake-ouput',
            'datatype' => 'fake-data-type',
            'apikey' => 'fake-api_key',
        ], $response);

        $alpha_vantage_client = new Stock('fake-api_key', $http_client_mock);
        $response = $alpha_vantage_client->daily('fake-symbol', 'fake-ouput', 'fake-data-type');
        $this->assertEquals(['fake-response'], $response);
    }

    /** @test */
    public function dailyAdjusted_method_makes_api_call_with_passed_parameters_and_it_returns_filtered_response()
    {
        $response = new Response(200, ['X-Foo' => 'Bar'], json_encode(['fake-response']));

        $http_client_mock = $this->getHttpClientMock([
            'function' => 'TIME_SERIES_DAILY_ADJUSTED',
            'symbol' => 'fake-symbol',
            'outputsize' => 'fake-ouput',
            'datatype' => 'fake-data-type',
            'apikey' => 'fake-api_key',
        ], $response);

        $alpha_vantage_client = new Stock('fake-api_key', $http_client_mock);
        $response = $alpha_vantage_client->dailyAdjusted('fake-symbol', 'fake-ouput', 'fake-data-type');
        $this->assertEquals(['fake-response'], $response);
    }
}