<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\OffreRepository;

#[ORM\Entity(repositoryClass: OffreRepository::class)]
class Offre
{
   
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
     private ?int $id=null;

    
    /*#[ORM\Column(length:50)]
    private ?int $idEtudiant=null;
    #[ORM\ManyToOne(inversedBy:'etudiants')]
    private ?Offre $offre=null;*/
   
    #[ORM\Column(length:50)]
    private ?string $imageVehicule=null;
  

    
    #[ORM\Column(length:50)]
    private ?string $prenomChauff=null;
    

    
    #[ORM\Column(length:50)]
    private ?string $numChauff=null;

   
    #[ORM\Column(length:50)]
    private ? DateTime $dateOffre=null;

   
    #[ORM\Column(length:50)]
    private ?string $heure=null;

    
    #[ORM\Column(length:50)]
    private ?int $prixOffre=null;
    

   
    #[ORM\Column(length:50)]
    private ?string $depart=null;
   

    
    #[ORM\Column(length:50)]
    private ?string $destination=null;

    
    #[ORM\Column(length:50)]
    private ?string $placesDispo=null;

    #[ORM\OneToMany(mappedBy: 'offre', targetEntity: Avis::class)]
    private Collection $avis;
    

    public function getIdOffre(): ?int
    {
        return $this->idOffre;
    }

   /* public function getIdEtudiant(): ?int
    {
        return $this->idEtudiant;
    }

    public function setIdEtudiant(int $idEtudiant): self
    {
        $this->idEtudiant = $idEtudiant;

        return $this;
    }
*/
    public function getImageVehicule(): ?string
    {
        return $this->imageVehicule;
    }

    public function setImageVehicule(string $imageVehicule): self
    {
        $this->imageVehicule = $imageVehicule;

        return $this;
    }

    public function getPrenomChauff(): ?string
    {
        return $this->prenomChauff;
    }

    public function setPrenomChauff(string $prenomChauff): self
    {
        $this->prenomChauff = $prenomChauff;

        return $this;
    }

    public function getNumChauff(): ?string
    {
        return $this->numChauff;
    }

    public function setNumChauff(string $numChauff): self
    {
        $this->numChauff = $numChauff;

        return $this;
    }

    public function getDateOffre(): ?\DateTimeInterface
    {
        return $this->dateOffre;
    }

    public function setDateOffre(\DateTimeInterface $dateOffre): self
    {
        $this->dateOffre = $dateOffre;

        return $this;
    }

    public function getHeure(): ?\DateTimeInterface
    {
        return $this->heure;
    }

    public function setHeure(\DateTimeInterface $heure): self
    {
        $this->heure = $heure;

        return $this;
    }

    public function getPrixOffre(): ?int
    {
        return $this->prixOffre;
    }

    public function setPrixOffre(int $prixOffre): self
    {
        $this->prixOffre = $prixOffre;

        return $this;
    }

    public function getDepart(): ?string
    {
        return $this->depart;
    }

    public function setDepart(string $depart): self
    {
        $this->depart = $depart;

        return $this;
    }

    public function getDestination(): ?string
    {
        return $this->destination;
    }

    public function setDestination(string $destination): self
    {
        $this->destination = $destination;

        return $this;
    }

    public function getPlacesDispo(): ?int
    {
        return $this->placesDispo;
    }

    public function setPlacesDispo(int $placesDispo): self
    {
        $this->placesDispo = $placesDispo;

        return $this;
    }


}
