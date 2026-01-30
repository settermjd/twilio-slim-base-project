<?php

declare(strict_types=1);

use App\Application;
use DI\Container;
use Dotenv\Dotenv;

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$application = new Application(new Container());
$application->setupRoutes();
$application->run();
