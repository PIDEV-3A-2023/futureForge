<?php

namespace ContainerS6mGDBa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Kc5_VdqService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Kc5.Vdq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Kc5.Vdq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'offre2' => ['privates', '.errored..service_locator.Kc5.Vdq.App\\Entity\\Offre2', NULL, 'Cannot autowire service ".service_locator.Kc5.Vdq": it references class "App\\Entity\\Offre2" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'offre2' => 'App\\Entity\\Offre2',
        ]);
    }
}
