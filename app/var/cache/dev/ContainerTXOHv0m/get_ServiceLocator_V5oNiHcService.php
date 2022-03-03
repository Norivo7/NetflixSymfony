<?php

namespace ContainerTXOHv0m;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_V5oNiHcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.V5oNiHc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.V5oNiHc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'movie' => ['privates', '.errored..service_locator.V5oNiHc.App\\Entity\\Movie', NULL, 'Cannot autowire service ".service_locator.V5oNiHc": it references class "App\\Entity\\Movie" but no such service exists.'],
        ], [
            'movie' => 'App\\Entity\\Movie',
        ]);
    }
}
