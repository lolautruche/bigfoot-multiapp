<?php

namespace ContainerP0aiD2v;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUpdateSightingScoresCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Command\UpdateSightingScoresCommand' shared autowired service.
     *
     * @return \App\Command\UpdateSightingScoresCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Command/UpdateSightingScoresCommand.php';

        $container->privates['App\\Command\\UpdateSightingScoresCommand'] = $instance = new \App\Command\UpdateSightingScoresCommand(($container->privates['App\\Repository\\BigFootSightingRepository'] ?? $container->load('getBigFootSightingRepositoryService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setName('app:update-sighting-scores');

        return $instance;
    }
}
