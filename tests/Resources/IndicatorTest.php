<?php

use AlphaVantage\Resources\Indicator;
use GuzzleHttp\Psr7\Response;

class IndicatorTest extends \PHPUnit\Framework\TestCase
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
    public function wma_method_makes_api_call_with_passed_parameters_and_it_returns_filtered_response()
    {
        $response = new Response(200, ['X-Foo' => 'Bar'], json_encode(['fake-response']));

        $http_client_mock = $this->getHttpClientMock([
            'function' => 'WMA',
            'symbol' => 'fake-symbol',
            'interval' => 'fake-interval',
            'time_period' => 'fake-time-period',
            'series_type' => 'fake-type',
            'apikey' => 'fake-api_key',
        ], $response);

        $indicator_client = new Indicator('fake-api_key', $http_client_mock);
        $response = $indicator_client->wma('fake-symbol', 'fake-interval', 'fake-time-period', 'fake-type');
        $this->assertEquals(['fake-response'], $response);
    }
}