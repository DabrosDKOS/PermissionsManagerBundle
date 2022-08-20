<?php

namespace DabrosDkos\PermissionsManager;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * PermissionsManagerBundle
 */
class PermissionsManagerBundle extends Bundle
{
    public function build(ContainerBuilder $container): void
    {
        parent::build($container);
    }
}
