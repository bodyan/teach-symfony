<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TransponderRepository")
 */
class Transponder
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="smallint", length=4)
     */
    private $longitude;

    /**
     * @ORM\Column(type="smallint", length=1)
     */
    private $tp_system;

    /**
     * @ORM\Column(type="smallint", length=1)
     */
    private $modulation;

    /**
     * @ORM\Column(type="smallint", length=5)
     */
    private $frequency;

    /**
     * @ORM\Column(type="smallint", length=5)
     */
    private $symbrate;

    /**
     * @ORM\Column(type="smallint", length=1)
     */
    private $polarization;

    /**
     * @ORM\Column(type="smallint", length=2)
     */
    private $fec;

}
