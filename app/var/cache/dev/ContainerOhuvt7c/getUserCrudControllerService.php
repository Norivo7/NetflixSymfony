<?php

namespace ContainerOhuvt7c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserCrudControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\UserCrudController' shared autowired service.
     *
     * @return \App\Controller\UserCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/UserCrudController.php';

        $container->services['App\\Controller\\UserCrudController'] = $instance = new \App\Controller\UserCrudController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\UserCrudController', $container));

        return $instance;
    }
}
