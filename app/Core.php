<?php


namespace App;

use App\Utils\LoggerHandler;

/**
 * Class Core
 * @package App
 */
class Core
{
    /**
     * @var \Monolog\Logger
     */
    private $logger;

    /**
     * Core constructor.
     * @param $className
     * @param $methodRequested
     */
    public function __construct($className, $methodRequested)
    {
        $this->logger = LoggerHandler::getLogger();
        $this->logger->info("Calling controller ". $className);
        try {
            $controller = new $className();
            $controller->$methodRequested([]);
        } catch (\Error $e) {
            $this->logger->error("Error while Loading controller " . $className . "on method" . $methodRequested );
            $this->logger->error($e);
        }


    }
}