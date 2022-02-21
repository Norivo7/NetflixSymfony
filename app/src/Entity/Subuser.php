<?php

namespace App\Entity;

use App\Repository\SubuserRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SubuserRepository::class)
 */
class Subuser
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="subusers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $subaccountOf;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $avatar;

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

    public function getSubaccountOf(): ?User
    {
        return $this->subaccountOf;
    }

    public function setSubaccountOf(?User $subaccountOf): self
    {
        $this->subaccountOf = $subaccountOf;

        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar(string $avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }
}
