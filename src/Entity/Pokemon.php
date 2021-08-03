<?php

namespace App\Entity;

use App\Repository\PokemonRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use JetBrains\PhpStorm\Pure;

/**
 * Pokemon
 *
 * @ORM\Table(name="pokemon", uniqueConstraints={@ORM\UniqueConstraint(name="numero_2", columns={"numero"})}, indexes={@ORM\Index(name="numero", columns={"numero"})})
 * @ORM\Entity(repositoryClass=PokemonRepository::class)
 */
class Pokemon
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="pv", type="integer", nullable=false)
     */
    private $pv;

    /**
     * @var int
     *
     * @ORM\Column(name="attaque", type="integer", nullable=false)
     */
    private $attaque;

    /**
     * @var int
     *
     * @ORM\Column(name="defense", type="integer", nullable=false)
     */
    private $defense;

    /**
     * @var int
     *
     * @ORM\Column(name="attaque_spe", type="integer", nullable=false)
     */
    private $attaqueSpe;

    /**
     * @var int
     *
     * @ORM\Column(name="defense_spe", type="integer", nullable=false)
     */
    private $defenseSpe;

    /**
     * @var int
     *
     * @ORM\Column(name="vitesse", type="integer", nullable=false)
     */
    private $vitesse;

    /**
     * @var int
     *
     * @ORM\Column(name="numero", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $numero;

    /**
     * @ORM\ManyToMany(targetEntity=Type::class, inversedBy="pokemon")
     */
    private $type;


    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $taille;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $poids;


    #[Pure] public function __construct()
    {
        $this->type = new ArrayCollection();
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

    public function getAttaque(): ?int
    {
        return $this->attaque;
    }

    public function setAttaque(int $attaque): self
    {
        $this->attaque = $attaque;

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

    public function getAttaqueSpe(): ?int
    {
        return $this->attaqueSpe;
    }

    public function setAttaqueSpe(int $attaqueSpe): self
    {
        $this->attaqueSpe = $attaqueSpe;

        return $this;
    }

    public function getDefenseSpe(): ?int
    {
        return $this->defenseSpe;
    }

    public function setDefenseSpe(int $defenseSpe): self
    {
        $this->defenseSpe = $defenseSpe;

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

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }


    /**
     * @return Collection
     */
    public function getType(): Collection
    {
        return $this->type;
    }

    public function addType(Type $type): self
    {
        if (!$this->type->contains($type)) {
            $this->type[] = $type;
        }

        return $this;
    }

    public function removeType(Type $type): self
    {
        $this->type->removeElement($type);

        return $this;
    }


    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getTaille(): ?string
    {
        return $this->taille;
    }

    public function setTaille(?string $taille): self
    {
        $this->taille = $taille;

        return $this;
    }

    public function getPoids(): ?string
    {
        return $this->poids;
    }

    public function setPoids(?string $poids): self
    {
        $this->poids = $poids;

        return $this;
    }






}
