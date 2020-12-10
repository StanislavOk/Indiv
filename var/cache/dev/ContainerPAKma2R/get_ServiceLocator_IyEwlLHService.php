<?php

namespace ContainerPAKma2R;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IyEwlLHService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.iyEwlLH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.iyEwlLH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'product' => ['privates', '.errored..service_locator.iyEwlLH.App\\Entity\\Product', NULL, 'Cannot autowire service ".service_locator.iyEwlLH": it references class "App\\Entity\\Product" but no such service exists.'],
        ], [
            'product' => 'App\\Entity\\Product',
        ]);
    }
}
