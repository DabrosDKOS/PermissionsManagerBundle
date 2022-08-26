<?php

namespace DabrosDkos\PermissionsManagerBundle;

use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

/**
 * PermissionsManagerBundle
 */
class PermissionsManagerBundle extends AbstractBundle
{
    /**
     * @inheritdoc
     */
    protected function getModelNamespace(): string
    {
        return 'DabrosDkos\PermissionsManagerBundle\Model';
    }
}
