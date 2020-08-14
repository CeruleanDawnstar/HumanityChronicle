<?php

namespace App\Entity;

use App\Repository\PersonnaliteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PersonnaliteRepository::class)
 */
class Personnalite
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $dateNaissance;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $dateDeces;

    /**
     * @ORM\Column(type="text")
     */
    private $biographie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imgUrl;

    /**
     * @ORM\OneToOne(targetEntity=Invention::class, inversedBy="personnalite", cascade={"persist", "remove"})
     */
    private $invention;

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

    public function getDateNaissance(): ?string
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(string $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getDateDeces(): ?string
    {
        return $this->dateDeces;
    }

    public function setDateDeces(?string $dateDeces): self
    {
        $this->dateDeces = $dateDeces;

        return $this;
    }

    public function getBiographie(): ?string
    {
        return $this->biographie;
    }

    public function setBiographie(string $biographie): self
    {
        $this->biographie = $biographie;

        return $this;
    }

    public function getImgUrl(): ?string
    {
        return $this->imgUrl;
    }

    public function setImgUrl(string $imgUrl): self
    {
        $this->imgUrl = $imgUrl;

        return $this;
    }

    public function getInvention(): ?Invention
    {
        return $this->invention;
    }

    public function setInvention(?Invention $invention): self
    {
        $this->invention = $invention;

        return $this;
    }
}
