<?php

namespace ContainerHQCECjx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApp_MenuBuilderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'app.menu_builder' shared autowired service.
     *
     * @return \App\Menu\MenuBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['app.menu_builder'] = new \App\Menu\MenuBuilder(($container->services['knp_menu.factory'] ?? $container->load('getKnpMenu_FactoryService')));
    }
}
