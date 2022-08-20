<?php

namespace DabrosDkos\PermissionsManagerBundle\Entity;

use App\Entity\User;
use DabrosDkos\PermissionsManagerBundle\Repository\PmGroupRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PmGroupRepository::class)]
class PmGroup
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\ManyToMany(targetEntity: User::class)]
    private Collection $users;

    #[ORM\ManyToMany(targetEntity: PmRoles::class)]
    private Collection $pmRoles;

    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->pmRoles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, user>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users->add($user);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        $this->users->removeElement($user);

        return $this;
    }

    /**
     * @return Collection<int, PmRoles>
     */
    public function getRoles(): Collection
    {
        return $this->pmRoles;
    }

    public function addPmRoles(PmRoles $pmRoles): self
    {
        if (!$this->pmRoles->contains($pmRoles)) {
            $this->pmRoles->add($pmRoles);
        }

        return $this;
    }

    public function removePmRoles(PmRoles $pmRoles): self
    {
        $this->pmRoles->removeElement($pmRoles);

        return $this;
    }
}
