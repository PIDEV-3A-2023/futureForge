<?php

namespace App\Entity;

use App\Repository\MessageRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: MessageRepository::class)]
class Message
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: 'The date cannot be blank.')]
    #[Assert\NotNull(message: 'The date cannot be null.')]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'The etat cannot be blank.')]
    #[Assert\NotNull(message: 'The etat cannot be null.')]
    private ?string $etat = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'The type_m cannot be blank.')]
    #[Assert\NotNull(message: 'The type_m cannot be null.')]
    private ?string $type_m = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'The contenu cannot be blank.')]
    #[Assert\NotNull(message: 'The contenu cannot be null.')]
    private ?string $contenu = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getTypeM(): ?string
    {
        return $this->type_m;
    }

    public function setTypeM(string $type_m): self
    {
        $this->type_m = $type_m;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }
}
