<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CocktailsRepository")
 */
class Cocktails
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $recette;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $décoration;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $histoire;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $spiritueux;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getRecette(): ?string
    {
        return $this->recette;
    }

    public function setRecette(string $recette): self
    {
        $this->recette = $recette;

        return $this;
    }

    public function getDécoration(): ?string
    {
        return $this->décoration;
    }

    public function setDécoration(string $décoration): self
    {
        $this->décoration = $décoration;

        return $this;
    }

    public function getHistoire(): ?string
    {
        return $this->histoire;
    }

    public function setHistoire(string $histoire): self
    {
        $this->histoire = $histoire;

        return $this;
    }

    public function getSpiritueux(): ?string
    {
        return $this->spiritueux;
    }

    public function setSpiritueux(string $spiritueux): self
    {
        $this->spiritueux = $spiritueux;

        return $this;
    }
}
