<?php

namespace App\Entity;

use App\Repository\ReclamationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

#[ORM\Column(length: 255)]
#[Assert\NotBlank(message: "Le type de réclamation est obligatoire.")]
#[Assert\Length(max: 255, maxMessage: "Le type de réclamation ne doit pas dépasser {{ limit }} caractères.")]
private ?string $TypeR = null;

#[ORM\Column(length: 255)]
#[Assert\NotBlank(message: "La description de la réclamation est obligatoire.")]
#[Assert\Length(max: 255, maxMessage: "La description de la réclamation ne doit pas dépasser {{ limit }} caractères.")]
private ?string $DescriptionR = null;

#[ORM\Column(length: 255)]
#[Assert\NotBlank(message: "L'objet de la réclamation est obligatoire.")]
#[Assert\Length(max: 255, maxMessage: "L'objet de la réclamation ne doit pas dépasser {{ limit }} caractères.")]
private ?string $Objet = null;

#[ORM\Column(type: Types::DATE_MUTABLE)]
#[Assert\NotNull(message: "La date de la réclamation est obligatoire.")]
private ?\DateTimeInterface $DateR = null;

#[ORM\Column(length: 255)]
#[Assert\NotBlank(message: "L'état de la réclamation est obligatoire.")]
#[Assert\Choice(choices: ["en attente", "en cours", "résolue"], message: "L'état de la réclamation doit être 'en attente', 'en cours' ou 'résolue'.")]
private ?string $etat = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeR(): ?string
    {
        return $this->TypeR;
    }

    public function setTypeR(string $TypeR): self
    {
        $this->TypeR = $TypeR;

        return $this;
    }

    public function getDescriptionR(): ?string
    {
        return $this->DescriptionR;
    }

    public function setDescriptionR(string $DescriptionR): self
    {
        $this->DescriptionR = $DescriptionR;

        return $this;
    }

    public function getObjet(): ?string
    {
        return $this->Objet;
    }

    public function setObjet(string $Objet): self
    {
        $this->Objet = $Objet;

        return $this;
    }

    public function getDateR(): ?\DateTimeInterface
    {
        return $this->DateR;
    }

    public function setDateR(\DateTimeInterface $DateR): self
    {
        $this->DateR = $DateR;

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
}
