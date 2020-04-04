<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlageHasEspece
 *
 * @ORM\Table(name="plage_has_espece", indexes={@ORM\Index(name="idPlage", columns={"idPlage", "idEspece"})})
 * @ORM\Entity
 */
class PlageHasEspece
{
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
     * @ORM\Column(name="idEspece", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idespece;

    /**
     * @var int
     *
     * @ORM\Column(name="nombreEspece", type="integer", nullable=false)
     */
    private $nombreespece;


}
