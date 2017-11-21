<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;


/*
 * auto load vendor
 */
require __DIR__ ."/vendor/autoload.php";


use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array(__DIR__ . "/app/models/");
$isDevMode = false;

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'host'     => 'localhost',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'test',
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, null, null, false);
$entityManager = EntityManager::create($dbParams, $config);

return ConsoleRunner::createHelperSet($entityManager);