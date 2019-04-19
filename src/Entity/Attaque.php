<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AttaqueRepository")
 */
class Attaque
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $nom;

    /**
     * @ORM\Column(type="integer")
     */
    private $degats;

    /**
     * @ORM\Column(type="integer")
     */
    private $txcritique;

    /**
     * @ORM\Column(type="integer")
     */
    private $txprecision;

    /**
     * @ORM\Column(type="integer")
     */
    private $coutMP;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Monstre", mappedBy="attaque1")
     */
    private $monstres;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Classe", inversedBy="attaques")
     */
    private $classe;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Element", inversedBy="attaques")
     */
    private $element;

    public function __construct()
    {
        $this->monstres = new ArrayCollection();
        $this->classe = new ArrayCollection();
    }

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

    public function getDegats(): ?int
    {
        return $this->degats;
    }

    public function setDegats(int $degats): self
    {
        $this->degats = $degats;

        return $this;
    }

    public function getTxcritique(): ?int
    {
        return $this->txcritique;
    }

    public function setTxcritique(int $txcritique): self
    {
        $this->txcritique = $txcritique;

        return $this;
    }

    public function getTxprecision(): ?int
    {
        return $this->txprecision;
    }

    public function setTxprecision(int $txprecision): self
    {
        $this->txprecision = $txprecision;

        return $this;
    }

    public function getCoutMP(): ?int
    {
        return $this->coutMP;
    }

    public function setCoutMP(int $coutMP): self
    {
        $this->coutMP = $coutMP;

        return $this;
    }

    /**
     * @return Collection|Monstre[]
     */
    public function getMonstres(): Collection
    {
        return $this->monstres;
    }

    public function addMonstre(Monstre $monstre): self
    {
        if (!$this->monstres->contains($monstre)) {
            $this->monstres[] = $monstre;
            $monstre->addAttaque1($this);
        }

        return $this;
    }

    public function removeMonstre(Monstre $monstre): self
    {
        if ($this->monstres->contains($monstre)) {
            $this->monstres->removeElement($monstre);
            $monstre->removeAttaque1($this);
        }

        return $this;
    }

    /**
     * @return Collection|Classe[]
     */
    public function getClasse(): Collection
    {
        return $this->classe;
    }

    public function addClasse(Classe $classe): self
    {
        if (!$this->classe->contains($classe)) {
            $this->classe[] = $classe;
        }

        return $this;
    }

    public function removeClasse(Classe $classe): self
    {
        if ($this->classe->contains($classe)) {
            $this->classe->removeElement($classe);
        }

        return $this;
    }

    public function getElement(): ?Element
    {
        return $this->element;
    }

    public function setElement(?Element $element): self
    {
        $this->element = $element;

        return $this;
    }
}
