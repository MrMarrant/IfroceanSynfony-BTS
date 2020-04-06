<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PersonneRepository")
 */
class Personne
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
    private $nomPersonne;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min="8", minMessage ="Votre mot de passe doit faire 8 caractères")
     */
    
    private $motdepasse;

    /**
     * @ORM\Column(type="integer")
     */
    private $idMetier;



    /**
     * @Assert\EqualTo(propertyPath="motdepasse", message="Les Mots de passe ne correspondent pas")
     */
    public $confirm_password;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomPersonne(): ?string
    {
        return $this->nomPersonne;
    }

    public function setNomPersonne(string $nomPersonne): self
    {
        $this->nomPersonne = $nomPersonne;

        return $this;
    }

    public function getMotdepasse(): ?string
    {
        return $this->motdepasse;
    }

    public function setMotdepasse(string $motdepasse): self
    {
        $this->motdepasse = $motdepasse;

        return $this;
    }

    public function getIdMetier(): ?int
    {
        return $this->idMetier;
    }

    public function setIdMetier(int $idMetier): self
    {
        $this->idMetier = $idMetier;

        return $this;
    }
}
