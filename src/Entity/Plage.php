<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plage
 *
 * @ORM\Table(name="plage", indexes={@ORM\Index(name="fk_Plage_Lieu1_idx", columns={"idLieu"})})
 * @ORM\Entity
 */
class Plage
{
    /**
     * @var int
     *
     * @ORM\Column(name="idPlage", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    public $idplage;

    /**
     * @var string
     *
     * @ORM\Column(name="nomPlage", type="string", length=255, nullable=false)
     */
    public $nomplage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="superficietotalePlage", type="string", length=10, nullable=true)
     */
    private $superficietotaleplage;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nombredespecePlage", type="integer", nullable=true)
     */
    private $nombredespeceplage;

    /**
     * @var int|null
     *
     * @ORM\Column(name="populationtotaledespecePlage", type="integer", nullable=true)
     */
    private $populationtotaledespeceplage;

    /**
     * @var int|null
     *
     * @ORM\Column(name="densiteespecePlage", type="integer", nullable=true)
     */
    private $densiteespeceplage;

    /**
     * @var int
     *
     * @ORM\Column(name="idLieu", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idlieu;


}
