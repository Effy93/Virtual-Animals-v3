<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClasseRepository")
 */
class Classe
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $nom;

    /**
     * @ORM\Column(type="integer")
     */
    private $pv;

    /**
     * @ORM\Column(type="integer")
     */
    private $mp;

    /**
     * @ORM\Column(type="integer")
     */
    private $puissance;

    /**
     * @ORM\Column(type="integer")
     */
    private $defense;

    /**
     * @ORM\Column(type="integer")
     */
    private $vitesse;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Monstre", mappedBy="classe", orphanRemoval=true)
     */
    private $monstres;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Attaque", mappedBy="classe")
     */
    private $attaques;

    public function __construct()
    {
        $this->monstres = new ArrayCollection();
        $this->attaques = new ArrayCollection();
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

    public function getPv(): ?int
    {
        return $this->pv;
    }

    public function setPv(int $pv): self
    {
        $this->pv = $pv;

        return $this;
    }

    public function getMp(): ?int
    {
        return $this->mp;
    }

    public function setMp(int $mp): self
    {
        $this->mp = $mp;

        return $this;
    }

    public function getPuissance(): ?int
    {
        return $this->puissance;
    }

    public function setPuissance(int $puissance): self
    {
        $this->puissance = $puissance;

        return $this;
    }

    public function getDefense(): ?int
    {
        return $this->defense;
    }

    public function setDefense(int $defense): self
    {
        $this->defense = $defense;

        return $this;
    }

    public function getVitesse(): ?int
    {
        return $this->vitesse;
    }

    public function setVitesse(int $vitesse): self
    {
        $this->vitesse = $vitesse;

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
            $monstre->setClasse($this);
        }

        return $this;
    }

    public function removeMonstre(Monstre $monstre): self
    {
        if ($this->monstres->contains($monstre)) {
            $this->monstres->removeElement($monstre);
            // set the owning side to null (unless already changed)
            if ($monstre->getClasse() === $this) {
                $monstre->setClasse(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Attaque[]
     */
    public function getAttaques(): Collection
    {
        return $this->attaques;
    }

    public function addAttaque(Attaque $attaque): self
    {
        if (!$this->attaques->contains($attaque)) {
            $this->attaques[] = $attaque;
            $attaque->addClasse($this);
        }

        return $this;
    }

    public function removeAttaque(Attaque $attaque): self
    {
        if ($this->attaques->contains($attaque)) {
            $this->attaques->removeElement($attaque);
            $attaque->removeClasse($this);
        }

        return $this;
    }
}
