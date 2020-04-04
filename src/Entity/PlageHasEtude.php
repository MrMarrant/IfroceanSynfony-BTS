<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlageHasEtude
 *
 * @ORM\Table(name="plage_has_etude", indexes={@ORM\Index(name="idPlage", columns={"idPlage", "idEtude"}), @ORM\Index(name="idZone", columns={"idZone"})})
 * @ORM\Entity
 */
class PlageHasEtude
{
    /**
     * @var int
     *
     * @ORM\Column(name="idPlage", type="integer", nullable=false)
     */
    public $idplage;

    /**
     * @var int
     *
     * @ORM\Column(name="idEtude", type="integer", nullable=false)
     */
    public $idetude;

    /**
     * @var int
     *
     * @ORM\Column(name="idZone", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idzone;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Angle1", type="integer", nullable=true)
     */
    private $angle1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Angle2", type="integer", nullable=true)
     */
    private $angle2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Angle3", type="integer", nullable=true)
     */
    private $angle3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Angle4", type="integer", nullable=true)
     */
    private $angle4;


}
