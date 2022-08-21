<?php

namespace DabrosDkos\PermissionsManagerBundle;

use Doctrine\Bundle\DoctrineBundle\DependencyInjection\Compiler\DoctrineOrmMappingsPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * PermissionsManagerBundle
 */
class PermissionsManagerBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
    }

    protected function getModelNamespace(): string
    {
        return 'DabrosDkos\PermissionsManagerBundle\Model';
    }
}
