<?php

namespace Service;

use Doctrine\ORM\ORMSetup;
use Doctrine\ORM\EntityManager;

class DatabaseService
{
    /**
     * Create a doctrine entity manager.
     *
     * @return EntityManager
     */
    public static function create()
    {
        $isDevMode = true;
        $metadata = ORMSetup::createAnnotationMetadataConfiguration([__DIR__ . '/../Entities'], $isDevMode);

        $dbParams = [
            'driver'   => 'pdo_sqlite',
            'path'     => __DIR__ . '/../../database.sqlite'
        ];
        
        // obtaining the entity manager
        return EntityManager::create($dbParams, $metadata);
    }
}
