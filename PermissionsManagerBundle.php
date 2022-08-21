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
        $ormCompilerClass = 'Doctrine\Bundle\DoctrineBundle\DependencyInjection\Compiler\DoctrineOrmMappingsPass';
        if (class_exists($ormCompilerClass)) {
            $namespaces = array('DabrosDkos\PermissionsManagerBundle\Entity');
            $directories = array(realpath(__DIR__ . '/Entity'));
            $managerParameters = array();
            $enabledParameter = false;
            $aliasMap = array('PermissionsManagerBundle' => 'DabrosDkos\PermissionsManagerBundle\Entity');
            $container->addCompilerPass(
                DoctrineOrmMappingsPass::createAnnotationMappingDriver(
                    $namespaces,
                    $directories,
                    $managerParameters,
                    $enabledParameter,
                    $aliasMap
                )
            );
        }
    }
}
