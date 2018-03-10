<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ChannelRepository")
 */
class Channel
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     *  @ORM\Column(type="smallint", length=1)
     */
    private $approved;

    /**
     * @ORM\Column(type="smallint", length=4)
     */
    private $longitude;

    /**
     * @ORM\Column(type="smallint", length=6)
     */
    private $id_transponder;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     *  @ORM\Column(type="smallint", length=4)
     */
    private $sid;

    /**
     *  @ORM\Column(type="smallint", length=4)
     */
    private $vpid;

    /**
     *  @ORM\Column(type="smallint", length=4)
     */
    private $pmtpid;

    /**
     *  @ORM\Column(type="smallint", length=4)
     */
    private $pcrpid;

    /**
     *  @ORM\Column(type="smallint", length=4)
     */
    private $apid;

    /**
     *  @ORM\Column(type="string", length=100)
     */
    private $provider;

    /**
     *  @ORM\Column(type="smallint", length=1)
     */
    private $video_type;

    /**
     *  @ORM\Column(type="smallint", length=1)
     */
    private $hdsd;
}
