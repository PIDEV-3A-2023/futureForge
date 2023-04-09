<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Category;
use App\Entity\Event;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=CategoryRepository::class)
 */
class Category
{
   /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25)
     * @Assert\NotBlank(message="Le nom de la catégorie ne peut pas être vide")
     * @Assert\Length(max=25, maxMessage="Le nom de la catégorie doit faire au maximum {{ limit }} caractères")
     */
    private $nom_categ;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="blob")
     */
    private $photo;
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Event", mappedBy="categorie")
     */
    private $events;

    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }
    public function getNomCateg(): ?string
    {
        return $this->nom_categ;
    }

    public function setNomCateg(string $nom_categ): self
    {
        $this->nom_categ = $nom_categ;
    
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function setPhoto($photo): self
    {
        $this->photo = $photo;

        return $this;
    }
    
}
