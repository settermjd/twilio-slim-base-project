<?php

declare(strict_types=1);

namespace App;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\App as SlimApp;
use Slim\Interfaces\RouteInterface;

/**
 * This class encapsulates the central Slim application,
 * making it easier to create and test.
 */
final class Application
{
    public function __construct(private readonly SlimApp $app)
    {
    }

    public function setupRoutes(): void
    {
        $this->app->get('/', [$this, 'handleDefaultRoute']);
    }

    /**
     * @return RouteInterface[]
     */
    public function getRoutes(): array
    {
        return $this->app->getRouteCollector()->getRoutes();
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
