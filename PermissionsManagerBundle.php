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
            $namespaces = array('DabrosDkos\PermissionsManagerBundle\Model');
            $directories = array(realpath(__DIR__ . '/Entity'));
            $managerParameters = array();

            $aliasMap = array('PermissionsManagerBundle' => 'DabrosDkos\PermissionsManagerBundle\Model');
            $container->addCompilerPass(
                DoctrineOrmMappingsPass::createAnnotationMappingDriver(
                    $namespaces,
                    $directories,
                    $managerParameters,
                    false,
                    $aliasMap
                )
            );
        }
    }
}
