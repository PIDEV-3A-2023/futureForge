<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\AvisRepository;

#[ORM\Entity(repositoryClass: AvisRepository::class)]
class Avis
{
    #[ORM\Id]
   #[ORM\GeneratedValue]
   #[ORM\Column]
    private ?int $id=null;


    
   /* #[ORM\Column(length:50)]
    private ?string $idEtudiant=null;
    #[ORM\ManyToOne(inversedBy:'etudiants')]
    private ?Avis $avis=null;*/


   
    #[ORM\Column(length:50)]
    private ?int $rate=null;
    

    
    #[ORM\Column(length:50)]
    private ?string $descriptionAvis=null;

    
   
    #[ORM\ManyToOne(inversedBy:'avis')]
    private ?Offre $offre=null;
   
    public function getIdAvis(): ?int
    {
        return $this->idAvis;
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
    public function getRate(): ?int
    {
        return $this->rate;
    }

    public function setRate(int $rate): self
    {
        $this->rate = $rate;

        return $this;
    }

    public function getDescriptionAvis(): ?string
    {
        return $this->descriptionAvis;
    }

    public function setDescriptionAvis(string $descriptionAvis): self
    {
        $this->descriptionAvis = $descriptionAvis;

        return $this;
    }

    public function getIdOffre(): ?Offre
    {
        return $this->idOffre;
    }

    public function setIdOffre(?Offre $idOffre): self
    {
        $this->idOffre = $idOffre;

        return $this;
    }


}
