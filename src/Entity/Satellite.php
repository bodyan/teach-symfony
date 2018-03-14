<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SatelliteRepository")
 */

/**
 * @ORM\Entity
 * @ORM\Table(name="satellite")
 */
class Satellite
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $name;

    /**
     * @ORM\Column(type="smallint", length=4)
     */
    protected $longitude;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Transponder", mappedBy="satellite")
     */
    private $transponders;

    public function __construct()
    {
        $this->transponders = new ArrayCollection();
    }

    /**
     * @return Collection|Transponders[]
     */
    public function getTransponders()
    {
        return $this->transponders;
    }
}