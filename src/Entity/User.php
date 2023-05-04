<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Scheb\TwoFactorBundle\Model\Email\TwoFactorInterface;

/**
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="Password ne devrait pas être vide!!!")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Nom ne devrait pas être vide!!!")
     * @Assert\Regex(
     *     pattern="/^[a-zA-Z]*$/",
     *     message="Nom ne devrait contenir que des lettres"
     * )
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Prenom ne devrait pas être vide!!!")
     * @Assert\Regex(
     *     pattern="/^[a-zA-Z]*$/",
     *     message="Prenom ne devrait contenir que des lettres"
     * )
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Username ne devrait pas être vide!!!")
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $matricule;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pfp_u;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $bio;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $active;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $block_date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $verif_code;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $email_verif;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $tel_verif;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $appeal;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(?string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getPfpU(): ?string
    {
        return $this->pfp_u;
    }

    public function setPfpU(?string $pfp_u): self
    {
        $this->pfp_u = $pfp_u;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(?string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getBio(): ?string
    {
        return $this->bio;
    }

    public function setBio(?string $bio): self
    {
        $this->bio = $bio;

        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getBlockDate(): ?\DateTimeInterface
    {
        return $this->block_date;
    }

    public function setBlockDate(?\DateTimeInterface $block_date): self
    {
        $this->block_date = $block_date;

        return $this;
    }

    public function getVerifCode(): ?string
    {
        return $this->verif_code;
    }

    public function setVerifCode(?string $verif_code): self
    {
        $this->verif_code = $verif_code;

        return $this;
    }

    public function isEmailVerif(): ?bool
    {
        return $this->email_verif;
    }

    public function setEmailVerif(?bool $email_verif): self
    {
        $this->email_verif = $email_verif;

        return $this;
    }

    public function isTelVerif(): ?bool
    {
        return $this->tel_verif;
    }

    public function setTelVerif(?bool $tel_verif): self
    {
        $this->tel_verif = $tel_verif;

        return $this;
    }

    public function getAppeal(): ?string
    {
        return $this->appeal;
    }

    public function setAppeal(?string $appeal): self
    {
        $this->appeal = $appeal;

        return $this;
    }
    public function getSalt(): ?string
{
    // Return null to use the default bcrypt algorithm for password hashing
    return null;
}
public function __toString() {
    return $this->getUsername();
}
}
