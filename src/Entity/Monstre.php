<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MonstreRepository")
 */
class Monstre
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
     * @ORM\Column(type="string", length=80)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $photo;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Race", inversedBy="monstres")
     * @ORM\JoinColumn(nullable=false)
     */
    private $race;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Classe", inversedBy="monstres")
     * @ORM\JoinColumn(nullable=false)
     */
    private $classe;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Attaque", inversedBy="monstres")
     */
    private $attaque1;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Element", inversedBy="monstres")
     */
    private $element;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Habitat", inversedBy="monstres")
     */
    private $habitat;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Tarif", inversedBy="monstres")
     */
    private $tarif;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\User", mappedBy="monstre")
     */
    private $users;

   

    public function __construct()
    {
        $this->attaque1 = new ArrayCollection();
        $this->element = new ArrayCollection();
        $this->habitat = new ArrayCollection();
        $this->users = new ArrayCollection();
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getRace(): ?Race
    {
        return $this->race;
    }

    public function setRace(?Race $race): self
    {
        $this->race = $race;

        return $this;
    }

    public function getClasse(): ?Classe
    {
        return $this->classe;
    }

    public function setClasse(?Classe $classe): self
    {
        $this->classe = $classe;

        return $this;
    }

    /**
     * @return Collection|Attaque[]
     */
    public function getAttaque1(): Collection
    {
        return $this->attaque1;
    }

    public function addAttaque1(Attaque $attaque1): self
    {
        if (!$this->attaque1->contains($attaque1)) {
            $this->attaque1[] = $attaque1;
        }

        return $this;
    }

    public function removeAttaque1(Attaque $attaque1): self
    {
        if ($this->attaque1->contains($attaque1)) {
            $this->attaque1->removeElement($attaque1);
        }

        return $this;
    }

    /**
     * @return Collection|Element[]
     */
    public function getElement(): Collection
    {
        return $this->element;
    }

    public function addElement(Element $element): self
    {
        if (!$this->element->contains($element)) {
            $this->element[] = $element;
        }

        return $this;
    }

    public function removeElement(Element $element): self
    {
        if ($this->element->contains($element)) {
            $this->element->removeElement($element);
        }

        return $this;
    }

    /**
     * @return Collection|Habitat[]
     */
    public function getHabitat(): Collection
    {
        return $this->habitat;
    }

    public function addHabitat(Habitat $habitat): self
    {
        if (!$this->habitat->contains($habitat)) {
            $this->habitat[] = $habitat;
        }

        return $this;
    }

    public function removeHabitat(Habitat $habitat): self
    {
        if ($this->habitat->contains($habitat)) {
            $this->habitat->removeElement($habitat);
        }

        return $this;
    }

    public function getTarif(): ?Tarif
    {
        return $this->tarif;
    }

    public function setTarif(?Tarif $tarif): self
    {
        $this->tarif = $tarif;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->addMonstre($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->contains($user)) {
            $this->users->removeElement($user);
            $user->removeMonstre($this);
        }

        return $this;
    }

}
