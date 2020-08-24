<?php

namespace App\Entity;

use App\Repository\EvenementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EvenementRepository::class)
 */
class Evenement
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
     * @ORM\OneToMany(targetEntity=Anecdotes::class, mappedBy="relation")
     */
    private $anecdotes;

    public function __construct()
    {
        $this->anecdotes = new ArrayCollection();
    }


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

    public function __toString()
    {
        return $this->id;
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

    public function getImgUrl(): ?string
    {
        return $this->imgUrl;
    }

    public function setImgUrl(string $imgUrl): self
    {
        $this->imgUrl = $imgUrl;

        return $this;
    }

    /**
     * @return Collection|Anecdotes[]
     */
    public function getAnecdotes(): Collection
    {
        return $this->anecdotes;
    }

    public function addAnecdote(Anecdotes $anecdote): self
    {
        if (!$this->anecdotes->contains($anecdote)) {
            $this->anecdotes[] = $anecdote;
            $anecdote->setRelation($this);
        }

        return $this;
    }

    public function removeAnecdote(Anecdotes $anecdote): self
    {
        if ($this->anecdotes->contains($anecdote)) {
            $this->anecdotes->removeElement($anecdote);
            // set the owning side to null (unless already changed)
            if ($anecdote->getRelation() === $this) {
                $anecdote->setRelation(null);
            }
        }

        return $this;
    }
}
