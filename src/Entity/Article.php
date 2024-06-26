<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass : ArticleRepository::class)]
class Article
{
    
      #[ORM\Id()]
      #[ORM\GeneratedValue()]
      #[ORM\Column]
     
    private ?int $id = null;

    
     #[ORM\Column]
    private ?string $nom;

    
     #[ORM\Column]
    private ?float $prix;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): self
    {
        $this->prix = $prix;

        return $this;
    }
}
