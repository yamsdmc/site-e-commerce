<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.25H.ilb' shared service.

return $this->privates['.service_locator.25H.ilb'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'data' => ['privates', '.errored..service_locator.25H.ilb.App\\Entity\\Promo', NULL, 'Cannot autowire service "api_platform.subresource_operation_factory.cached.inner": it references class "App\\Entity\\Promo" but no such service exists.'],
], [
    'data' => 'App\\Entity\\Promo',
]);
