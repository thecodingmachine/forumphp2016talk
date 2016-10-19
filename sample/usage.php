<?php
namespace App;

use L33t\WeatherApi\WeatherApi;

use GuzzleHttp\Client as GuzzleClient;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;
use Monolog\Handler\StreamHandler;
use Monolog\Logger as MonologLogger;
use Stash\Driver\FileSystem;
use Stash\Pool;

$guzzle = new GuzzleClient([]);
$httplugAdapter = new GuzzleAdapter($guzzle);

$logger = new MonologLogger('my_logger');
$logger->pushHandler(new StreamHandler(__DIR__.'/my_app.log', MonologLogger::DEBUG));

$driver = new FileSystem();
$cache = new Pool($driver);

$weatherApi = new WeatherApi($httplugAdapter, $logger, $cache);
$weather = $weatherApi->getWeather('fr', 'Paris');