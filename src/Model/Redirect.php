<?php

declare(strict_types=1);

namespace DabrosDkos\PermissionsManagerBundle\Model;

class Redirect
{
    /** @var int */
    protected $id;

    /** @var string|null */
    protected $source;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(string $source): void
    {
        $this->source = $source;
    }
}
