<?php

namespace App\Entity;

use App\Repository\InventionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InventionRepository::class)
 */
class Invention
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
    private $titre;

    /**
     * @ORM\Column(type="text")
     */
    private $extrait;

    /**
     * @ORM\Column(type="text")
     */
    private $detail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imgUrl;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $epoque;

    /**
     * @ORM\OneToOne(targetEntity=Personnalite::class, mappedBy="invention", cascade={"persist", "remove"})
     */
    private $personnalite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getExtrait(): ?string
    {
        return $this->extrait;
    }

    public function setExtrait(string $extrait): self
    {
        $this->extrait = $extrait;

        return $this;
    }

    public function getDetail(): ?string
    {
        return $this->detail;
    }

    public function setDetail(string $detail): self
    {
        $this->detail = $detail;

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

    public function getEpoque(): ?string
    {
        return $this->epoque;
    }

    public function setEpoque(string $epoque): self
    {
        $this->epoque = $epoque;

        return $this;
    }

    public function getPersonnalite(): ?Personnalite
    {
        return $this->personnalite;
    }

    public function setPersonnalite(?Personnalite $personnalite): self
    {
        $this->personnalite = $personnalite;

        // set (or unset) the owning side of the relation if necessary
        $newInvention = null === $personnalite ? null : $this;
        if ($personnalite->getInvention() !== $newInvention) {
            $personnalite->setInvention($newInvention);
        }

        return $this;
    }
}
