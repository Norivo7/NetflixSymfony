<?php

namespace ContainerXKSDIax;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSubuserControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\SubuserController' shared autowired service.
     *
     * @return \App\Controller\SubuserController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/SubuserController.php';

        $container->services['App\\Controller\\SubuserController'] = $instance = new \App\Controller\SubuserController(($container->privates['App\\Repository\\SubuserRepository'] ?? $container->load('getSubuserRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\SubuserController', $container));

        return $instance;
    }
}
