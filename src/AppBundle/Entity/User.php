<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Statistic", cascade={"persist"})
     */
    private $statistic;


    /**
     * @ORM\Column(type="string")
     */
    protected $gender;


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return User
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }


    /**
     * Set statistic
     *
     * @param \AppBundle\Entity\Statistic $statistic
     *
     * @return User
     */
    public function setStatistic(\AppBundle\Entity\Statistic $statistic = null)
    {
        $this->statistic = $statistic;

        return $this;
    }

    /**
     * Get statistic
     *
     * @return \AppBundle\Entity\Statistic
     */
    public function getStatistic()
    {
        return $this->statistic;
    }
}
