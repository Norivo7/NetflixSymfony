<?php

namespace ContainerXR1PU1r;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_R23Z6vzService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.R23Z6vz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.R23Z6vz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\MoviesController::index' => ['privates', '.service_locator.SWF0qEr', 'get_ServiceLocator_SWF0qErService', true],
            'App\\Controller\\MoviesController::search' => ['privates', '.service_locator.eWsEuD9', 'get_ServiceLocator_EWsEuD9Service', true],
            'App\\Controller\\MoviesController::show' => ['privates', '.service_locator.V5oNiHc', 'get_ServiceLocator_V5oNiHcService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\SubuserCrudController::delete' => ['privates', '.service_locator.EVwVc65', 'get_ServiceLocator_EVwVc65Service', true],
            'App\\Controller\\SubuserCrudController::edit' => ['privates', '.service_locator.EVwVc65', 'get_ServiceLocator_EVwVc65Service', true],
            'App\\Controller\\SubuserCrudController::index' => ['privates', '.service_locator.pPsXs3m', 'get_ServiceLocator_PPsXs3mService', true],
            'App\\Controller\\SubuserCrudController::new' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\SubuserCrudController::show' => ['privates', '.service_locator.SWF0qEr', 'get_ServiceLocator_SWF0qErService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\MoviesController:index' => ['privates', '.service_locator.SWF0qEr', 'get_ServiceLocator_SWF0qErService', true],
            'App\\Controller\\MoviesController:search' => ['privates', '.service_locator.eWsEuD9', 'get_ServiceLocator_EWsEuD9Service', true],
            'App\\Controller\\MoviesController:show' => ['privates', '.service_locator.V5oNiHc', 'get_ServiceLocator_V5oNiHcService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\SubuserCrudController:delete' => ['privates', '.service_locator.EVwVc65', 'get_ServiceLocator_EVwVc65Service', true],
            'App\\Controller\\SubuserCrudController:edit' => ['privates', '.service_locator.EVwVc65', 'get_ServiceLocator_EVwVc65Service', true],
            'App\\Controller\\SubuserCrudController:index' => ['privates', '.service_locator.pPsXs3m', 'get_ServiceLocator_PPsXs3mService', true],
            'App\\Controller\\SubuserCrudController:new' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\SubuserCrudController:show' => ['privates', '.service_locator.SWF0qEr', 'get_ServiceLocator_SWF0qErService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\MoviesController::index' => '?',
            'App\\Controller\\MoviesController::search' => '?',
            'App\\Controller\\MoviesController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\SubuserCrudController::delete' => '?',
            'App\\Controller\\SubuserCrudController::edit' => '?',
            'App\\Controller\\SubuserCrudController::index' => '?',
            'App\\Controller\\SubuserCrudController::new' => '?',
            'App\\Controller\\SubuserCrudController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\MoviesController:index' => '?',
            'App\\Controller\\MoviesController:search' => '?',
            'App\\Controller\\MoviesController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\SubuserCrudController:delete' => '?',
            'App\\Controller\\SubuserCrudController:edit' => '?',
            'App\\Controller\\SubuserCrudController:index' => '?',
            'App\\Controller\\SubuserCrudController:new' => '?',
            'App\\Controller\\SubuserCrudController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
