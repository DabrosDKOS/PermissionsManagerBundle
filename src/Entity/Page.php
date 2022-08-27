<?php
declare(strict_types=1);

namespace DabrosDkos\PermissionsManagerBundle\Entity;

class Page
{
    /** @var int */
    protected $id;

    /** @var string|null */
    protected $code;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): void
    {
        $this->code = $code;
    }
}
