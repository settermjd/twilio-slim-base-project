<?php

declare(strict_types=1);

use App\Application;
use DI\Container;
use Dotenv\Dotenv;
use Twilio\Rest\Client;

require __DIR__ . '/../vendor/autoload.php';

// Load environment variables from .env in the project's parent directory
$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// Ensure that the following environment variables are available and not empty.
// They are available in the Twilio Console (https://console.twilio.com) in the Account Info panel.
$dotenv->required([
    'TWILIO_ACCOUNT_SID',
    'TWILIO_AUTH_TOKEN',
    'TWILIO_PHONE_NUMBER',
])->notEmpty();

$container = new Container();

/**
 * Register a Twilio REST Client object as a service with the DI container
 */
$container->set(
    Client::class,
    fn() => new Client($_ENV['TWILIO_ACCOUNT_SID'], $_ENV['TWILIO_AUTH_TOKEN']),
);

$application = new Application($container);
$application->setupRoutes();
$application->run();
