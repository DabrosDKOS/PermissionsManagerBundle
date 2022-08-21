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

        if (class_exists(DoctrineOrmMappingsPass::class)) {
            $namespaces = ['DabrosDkos\PermissionsManagerBundle\Model'];
            $directories = [realpath(__DIR__ . '/src/Model')];

            $aliasMap = ['PermissionsManagerBundle' => 'DabrosDkos\PermissionsManagerBundle\Model'];
            $container->addCompilerPass(
                DoctrineOrmMappingsPass::createAnnotationMappingDriver(
                    $namespaces,
                    $directories,
                    [],
                    false,
                    $aliasMap
                )
            );
        }
    }
}
