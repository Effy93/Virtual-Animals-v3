<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ElementRepository")
 */
class Element
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
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Monstre", mappedBy="element")
     */
    private $monstres;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Attaque", mappedBy="element")
     */
    private $attaques;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Habitat", mappedBy="element")
     */
    private $habitats;

    public function __construct()
    {
        $this->monstres = new ArrayCollection();
        $this->attaques = new ArrayCollection();
        $this->habitats = new ArrayCollection();
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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

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
            $monstre->addElement($this);
        }

        return $this;
    }

    public function removeMonstre(Monstre $monstre): self
    {
        if ($this->monstres->contains($monstre)) {
            $this->monstres->removeElement($monstre);
            $monstre->removeElement($this);
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
            $attaque->setElement($this);
        }

        return $this;
    }

    public function removeAttaque(Attaque $attaque): self
    {
        if ($this->attaques->contains($attaque)) {
            $this->attaques->removeElement($attaque);
            // set the owning side to null (unless already changed)
            if ($attaque->getElement() === $this) {
                $attaque->setElement(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Habitat[]
     */
    public function getHabitats(): Collection
    {
        return $this->habitats;
    }

    public function addHabitat(Habitat $habitat): self
    {
        if (!$this->habitats->contains($habitat)) {
            $this->habitats[] = $habitat;
            $habitat->setElement($this);
        }

        return $this;
    }

    public function removeHabitat(Habitat $habitat): self
    {
        if ($this->habitats->contains($habitat)) {
            $this->habitats->removeElement($habitat);
            // set the owning side to null (unless already changed)
            if ($habitat->getElement() === $this) {
                $habitat->setElement(null);
            }
        }

        return $this;
    }
}
