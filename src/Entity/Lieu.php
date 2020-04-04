<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lieu
 *
 * @ORM\Table(name="lieu")
 * @ORM\Entity
 */
class Lieu
{
    /**
     * @var int
     *
     * @ORM\Column(name="idLieu", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlieu;

    /**
     * @var string
     *
     * @ORM\Column(name="nomDepartement", type="string", length=255, nullable=false)
     */
    private $nomdepartement;

    /**
     * @var int
     *
     * @ORM\Column(name="idCommune", type="integer", nullable=false)
     */
    private $idcommune;


}
