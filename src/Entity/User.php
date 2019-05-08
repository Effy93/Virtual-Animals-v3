<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(fields={"email"}, message="Cette adresse email existe déjà")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     * @Assert\Length(min=6, max=180
     * ,minMessage="Votre email doit contenir au moins 6 caractères"
     * ,maxMessage="Votre email ne peut pas contenir plus de 180 caractères")
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Monstre", inversedBy="users")
     */
    private $monstre;

    /**
     * @ORM\Column(type="integer")
     */
    private $argent;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Jeux", inversedBy="users")
     */
    private $jeux;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Accessoire", inversedBy="users")
     */
    private $Accessoire;

    /**
     * @ORM\Column(type="string", length=45)
     * @Assert\Length(min=3, max=45 
     * ,minMessage="Votre nom doit contenir au moins 3 caractères"
     * ,maxMessage="Votre nom ne peut pas contenir plus de 45 caractères")
     */
    private $nom;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Article", mappedBy="author")
     */
    private $articles;

    public function __construct()
    {
        $this->monstre = new ArrayCollection();
        $this->jeux = new ArrayCollection();
        $this->Accessoire = new ArrayCollection();
        // Ajoute de l'argent de base a la création d'un utilisateur
        $this->argent = 10;
        $this->date = new \DateTime();
        $this->articles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    /**
     * @return Collection|Monstre[]
     */
    public function getMonstre(): Collection
    {
        return $this->monstre;
    }

    public function addMonstre(Monstre $monstre): self
    {
        if (!$this->monstre->contains($monstre)) {
            $this->monstre[] = $monstre;
        }

        return $this;
    }

    public function removeMonstre(Monstre $monstre): self
    {
        if ($this->monstre->contains($monstre)) {
            $this->monstre->removeElement($monstre);
        }

        return $this;
    }

    public function getArgent(): ?int
    {
        return $this->argent;
    }

    public function setArgent(int $argent): self
    {
        $this->argent = $argent;

        return $this;
    }

    /**
     * @return Collection|Jeux[]
     */
    public function getJeux(): Collection
    {
        return $this->jeux;
    }

    public function addJeux(Jeux $jeux): self
    {
        if (!$this->jeux->contains($jeux)) {
            $this->jeux[] = $jeux;
        }

        return $this;
    }

    public function removeJeux(Jeux $jeux): self
    {
        if ($this->jeux->contains($jeux)) {
            $this->jeux->removeElement($jeux);
        }

        return $this;
    }

    /**
     * @return Collection|Accessoire[]
     */
    public function getAccessoire(): Collection
    {
        return $this->Accessoire;
    }

    public function addAccessoire(Accessoire $accessoire): self
    {
        if (!$this->Accessoire->contains($accessoire)) {
            $this->Accessoire[] = $accessoire;
        }

        return $this;
    }

    public function removeAccessoire(Accessoire $accessoire): self
    {
        if ($this->Accessoire->contains($accessoire)) {
            $this->Accessoire->removeElement($accessoire);
        }

        return $this;
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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return Collection|Article[]
     */
    public function getArticles(): Collection
    {
        return $this->articles;
    }

    public function addArticle(Article $article): self
    {
        if (!$this->articles->contains($article)) {
            $this->articles[] = $article;
            $article->setAuthor($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): self
    {
        if ($this->articles->contains($article)) {
            $this->articles->removeElement($article);
            // set the owning side to null (unless already changed)
            if ($article->getAuthor() === $this) {
                $article->setAuthor(null);
            }
        }

        return $this;
    }
}
