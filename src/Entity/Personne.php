<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personne
 *
 * @ORM\Table(name="personne")
 * @ORM\Entity
 */
class Personne
{
    /**
     * @var int
     *
     * @ORM\Column(name="idPersonne", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpersonne;

    /**
     * @var string
     *
     * @ORM\Column(name="nomPersonne", type="string", length=255, nullable=false)
     */
    private $nompersonne;

    /**
     * @var string
     *
     * @ORM\Column(name="motdePasse", type="string", length=255, nullable=false)
     */
    private $motdepasse;


}
