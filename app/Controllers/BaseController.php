<?php 

namespace App\Controllers;

use App\data\EntityManagerFactory;
use App\Utils\LoggerHandler;
use App\Utils\ViewHandler;

class BaseController{

     /**
     * @var \Doctrine\ORM\EntityManagerInterface
     */
    private $entityManager;


    /**
     * @var \Doctrine\ORM\EntityManagerInterface
     */
    private $logger;

    public function __construct()
    {
        $this->logger = LoggerHandler::getLogger();
        $this->entityManager = EntityManagerFactory::getEntityManager();
    }
}


?>