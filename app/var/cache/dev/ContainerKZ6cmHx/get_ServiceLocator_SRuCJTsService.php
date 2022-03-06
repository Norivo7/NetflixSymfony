<?php

namespace ContainerKZ6cmHx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SRuCJTsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.sRuCJTs' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.sRuCJTs'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'movie' => ['privates', '.errored..service_locator.sRuCJTs.App\\Entity\\Movie', NULL, 'Cannot autowire service ".service_locator.sRuCJTs": it references class "App\\Entity\\Movie" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'movie' => 'App\\Entity\\Movie',
        ]);
    }
}
