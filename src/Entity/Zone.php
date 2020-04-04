<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zone
 *
 * @ORM\Table(name="zone")
 * @ORM\Entity
 */
class Zone
{
    /**
     * @var int
     *
     * @ORM\Column(name="idZone", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idzone;

    /**
     * @var string
     *
     * @ORM\Column(name="NomZone", type="string", length=255, nullable=false)
     */
    private $nomzone;


}
