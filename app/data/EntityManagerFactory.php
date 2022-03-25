<?php


namespace App\data;
require_once __DIR__.'/../../vendor/autoload.php';

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\ORMException;
use Doctrine\ORM\Tools\Setup;



class EntityManagerFactory
{
    /**
     * @return EntityManagerInterface
     * @throws ORMException
     */
    public static function getEntityManager(): EntityManagerInterface
    {
        $rootDir = __DIR__ . '/..';
        $config = Setup::createAnnotationMetadataConfiguration(
            [$rootDir . '/Model'],
            true
        );
        $connection = [
            'driver' => 'pdo_sqlite',
            'path' => __DIR__ .'/data.sqlite'
        ];


        return EntityManager::create($connection, $config);
    }
}