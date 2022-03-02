<?php

namespace ContainerXR1PU1r;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EVwVc65Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.EVwVc65' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.EVwVc65'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'subuser' => ['privates', '.errored..service_locator.EVwVc65.App\\Entity\\Subuser', NULL, 'Cannot autowire service ".service_locator.EVwVc65": it references class "App\\Entity\\Subuser" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'subuser' => 'App\\Entity\\Subuser',
        ]);
    }
}
