<?php

declare(strict_types=1);

namespace App;

use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\App;
use Slim\Factory\AppFactory;

/**
 * This class encapsulates the central Slim application,
 * making it easier to create and test.
 */
final class Application
{
    private App $app;

    public function __construct(private readonly ContainerInterface $container)
    {
        AppFactory::setContainer($container);
        $this->app = AppFactory::createFromContainer($container);
    }

    public function setupRoutes(): void
    {
        $this->app->get('/', [$this, 'handleDefaultRoute']);
    }

    public function run(): void
    {
        $this->app->run();
    }

    public function handleDefaultRoute(
        ServerRequestInterface $request,
        ResponseInterface $response,
    ): ResponseInterface {
        return $response;
    }
}
