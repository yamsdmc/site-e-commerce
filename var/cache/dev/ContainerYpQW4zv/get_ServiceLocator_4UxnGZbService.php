<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.4UxnGZb' shared service.

return $this->privates['.service_locator.4UxnGZb'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'subcategory' => ['privates', '.errored..service_locator.4UxnGZb.App\\Entity\\SubCategory', NULL, 'Cannot autowire service "api_platform.subresource_operation_factory.cached.inner": it references class "App\\Entity\\SubCategory" but no such service exists.'],
], [
    'subcategory' => 'App\\Entity\\SubCategory',
]);
