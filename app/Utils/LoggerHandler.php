<?php


namespace App\Utils;


use Monolog\Handler\StreamHandler;
use Monolog\Logger;

/**
 * Class LoggerHandler
 * @package App\Utils
 */
class LoggerHandler
{
    /**
     * @return \Monolog\Logger Logger
     */
    public static function getLogger(): Logger
    {
        $logger = new Logger('logger');
        $rootDir = __DIR__ . '/../../';
        $logger->pushHandler(new StreamHandler($rootDir . 'Log.log', Logger::INFO));
        return $logger;
    }
}