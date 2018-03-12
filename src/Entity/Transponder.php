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
    private $satellite_id;

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

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getSatelliteId()
    {
        return $this->satellite_id;
    }

    /**
     * @param mixed $satellite_id
     */
    public function setSatelliteId($satellite_id)
    {
        $this->satellite_id = $satellite_id;
    }

    /**
     * @return mixed
     */
    public function getTpSystem()
    {
        return $this->tp_system;
    }

    /**
     * @param mixed $tp_system
     */
    public function setTpSystem($tp_system)
    {
        $this->tp_system = $tp_system;
    }

    /**
     * @return mixed
     */
    public function getModulation()
    {
        return $this->modulation;
    }

    /**
     * @param mixed $modulation
     */
    public function setModulation($modulation)
    {
        $this->modulation = $modulation;
    }

    /**
     * @return mixed
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * @param mixed $frequency
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;
    }

    /**
     * @return mixed
     */
    public function getSymbrate()
    {
        return $this->symbrate;
    }

    /**
     * @param mixed $symbrate
     */
    public function setSymbrate($symbrate)
    {
        $this->symbrate = $symbrate;
    }

    /**
     * @return mixed
     */
    public function getPolarization()
    {
        return $this->polarization;
    }

    /**
     * @param mixed $polarization
     */
    public function setPolarization($polarization)
    {
        $this->polarization = $polarization;
    }

    /**
     * @return mixed
     */
    public function getFec()
    {
        return $this->fec;
    }

    /**
     * @param mixed $fec
     */
    public function setFec($fec)
    {
        $this->fec = $fec;
    }


}
