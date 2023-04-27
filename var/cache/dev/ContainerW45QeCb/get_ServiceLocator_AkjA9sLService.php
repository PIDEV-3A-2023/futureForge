<?php

namespace ContainerW45QeCb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AkjA9sLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.akjA9sL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.akjA9sL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repo' => ['privates', 'App\\Repository\\AbonnementRepository', 'getAbonnementRepositoryService', true],
        ], [
            'repo' => 'App\\Repository\\AbonnementRepository',
        ]);
    }
}
