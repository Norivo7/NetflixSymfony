<?php

namespace ContainerXR1PU1r;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMoviesControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\MoviesController' shared autowired service.
     *
     * @return \App\Controller\MoviesController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/MoviesController.php';

        $container->services['App\\Controller\\MoviesController'] = $instance = new \App\Controller\MoviesController(($container->privates['App\\Repository\\MovieRepository'] ?? $container->load('getMovieRepositoryService')), ($container->privates['App\\Repository\\CategoryRepository'] ?? $container->load('getCategoryRepositoryService')), ($container->privates['App\\Repository\\SubuserRepository'] ?? $container->load('getSubuserRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\MoviesController', $container));

        return $instance;
    }
}
