<?php

namespace ContainerKZ6cmHx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_AccessMapService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.access_map' shared service.
     *
     * @return \Symfony\Component\Security\Http\AccessMap
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/AccessMapInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/AccessMap.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RequestMatcherInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RequestMatcher.php';

        $container->privates['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

        $a = new \Symfony\Component\HttpFoundation\RequestMatcher('^/login');

        $instance->add($a, [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/register'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/browse'), [0 => 'ROLE_USER'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/chooseUser'), [0 => 'ROLE_USER'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/newuser'), [0 => 'ROLE_USER'], NULL);
        $instance->add($a, [0 => 'ROLE_USER'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/*'), [0 => 'ROLE_USER'], NULL);

        return $instance;
    }
}
