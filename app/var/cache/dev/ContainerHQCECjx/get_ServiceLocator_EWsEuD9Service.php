<?php

namespace ContainerHQCECjx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EWsEuD9Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.eWsEuD9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.eWsEuD9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'movieRepository' => ['privates', 'App\\Repository\\MovieRepository', 'getMovieRepositoryService', true],
        ], [
            'movieRepository' => 'App\\Repository\\MovieRepository',
        ]);
    }
}
