<?php
namespace L33t\WeatherApi;

use Http\Client\HttpClient;
use Psr\Cache\CacheItemPoolInterface;
use Psr\Log\LoggerInterface;

class WeatherApi
{
    private $httpClient;
    private $logger;
    private $cache;

    public function __construct(HttpClient $httpClient, LoggerInterface $logger, CacheItemPoolInterface $cache)
    {
        $this->httpClient = $httpClient;
        $this->logger = $logger;
        $this->cache = $cache;
    }

    public function getWeather(string $countryCode, string $cityName) : Weather
    {
        // Do stuff...
    }
}
