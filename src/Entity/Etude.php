<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etude
 *
 * @ORM\Table(name="etude")
 * @ORM\Entity
 */
class Etude
{
    /**
     * @var int
     *
     * @ORM\Column(name="idEtude", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    public $idetude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="titreEtude", type="string", length=255, nullable=true)
     */
    public $titreetude;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateEtude", type="date", nullable=true)
     */
    private $dateetude;

    /**
     * @var string
     *
     * @ORM\Column(name="totalpersonneEtude", type="string", length=10, nullable=false)
     */
    private $totalpersonneetude;

    /**
     * @var int
     *
     * @ORM\Column(name="idPlage", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idplage;

    /**
     * @var int
     *
     * @ORM\Column(name="Plage_Lieu_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $plageLieuId;


}
