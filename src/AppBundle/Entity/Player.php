<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Player
 *
 * @ORM\Table(name="player")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PlayerRepository")
 */
class Player
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=25)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudo", type="string", length=50, unique=true)
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, unique=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, unique=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="sex", type="string", length=255)
     */
    private $sex;

    /**
     * @var int
     *
     * @ORM\Column(name="victory", type="integer", nullable=true)
     */
    private $victory;

    /**
     * @var int
     *
     * @ORM\Column(name="defeat", type="integer", nullable=true)
     */
    private $defeat;

    /**
     * @var int
     *
     * @ORM\Column(name="draw", type="integer", nullable=true)
     */
    private $draw;

    /**
     * @var int
     *
     * @ORM\Column(name="city_average", type="integer")
     */
    private $cityAverage;

    /**
     * @var int
     *
     * @ORM\Column(name="road_average", type="integer", nullable=true)
     */
    private $roadAverage;

    /**
     * @var int
     *
     * @ORM\Column(name="shield_average", type="integer", nullable=true)
     */
    private $shieldAverage;

    /**
     * @var int
     *
     * @ORM\Column(name="abbey_average", type="integer", nullable=true)
     */
    private $abbeyAverage;

    /**
     * @var int
     *
     * @ORM\Column(name="farmer_average", type="integer", nullable=true)
     */
    private $farmerAverage;

    /**
     * @var int
     *
     * @ORM\Column(name="city_size_average", type="integer", nullable=true)
     */
    private $citySizeAverage;

    /**
     * @var int
     *
     * @ORM\Column(name="road_size_average", type="integer", nullable=true)
     */
    private $roadSizeAverage;

    /**
     * @var int
     *
     * @ORM\Column(name="part", type="integer", nullable=true)
     */
    private $part;

    /**
     * @var int
     *
     * @ORM\Column(name="score", type="integer", nullable=true)
     */
    private $score;

    /**
     * @var int
     *
     * @ORM\Column(name="score_average", type="integer", nullable=true)
     */
    private $scoreAverage;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Player
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set pseudo
     *
     * @param string $pseudo
     *
     * @return Player
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Player
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Player
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set sex
     *
     * @param string $sex
     *
     * @return Player
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return string
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set victory
     *
     * @param integer $victory
     *
     * @return Player
     */
    public function setVictory($victory)
    {
        $this->victory = $victory;

        return $this;
    }

    /**
     * Get victory
     *
     * @return int
     */
    public function getVictory()
    {
        return $this->victory;
    }

    /**
     * Set defeat
     *
     * @param integer $defeat
     *
     * @return Player
     */
    public function setDefeat($defeat)
    {
        $this->defeat = $defeat;

        return $this;
    }

    /**
     * Get defeat
     *
     * @return int
     */
    public function getDefeat()
    {
        return $this->defeat;
    }

    /**
     * Set draw
     *
     * @param integer $draw
     *
     * @return Player
     */
    public function setDraw($draw)
    {
        $this->draw = $draw;

        return $this;
    }

    /**
     * Get draw
     *
     * @return int
     */
    public function getDraw()
    {
        return $this->draw;
    }

    /**
     * Set cityAverage
     *
     * @param integer $cityAverage
     *
     * @return Player
     */
    public function setCityAverage($cityAverage)
    {
        $this->cityAverage = $cityAverage;

        return $this;
    }

    /**
     * Get cityAverage
     *
     * @return int
     */
    public function getCityAverage()
    {
        return $this->cityAverage;
    }

    /**
     * Set roadAverage
     *
     * @param integer $roadAverage
     *
     * @return Player
     */
    public function setRoadAverage($roadAverage)
    {
        $this->roadAverage = $roadAverage;

        return $this;
    }

    /**
     * Get roadAverage
     *
     * @return int
     */
    public function getRoadAverage()
    {
        return $this->roadAverage;
    }

    /**
     * Set shieldAverage
     *
     * @param integer $shieldAverage
     *
     * @return Player
     */
    public function setShieldAverage($shieldAverage)
    {
        $this->shieldAverage = $shieldAverage;

        return $this;
    }

    /**
     * Get shieldAverage
     *
     * @return int
     */
    public function getShieldAverage()
    {
        return $this->shieldAverage;
    }

    /**
     * Set abbeyAverage
     *
     * @param integer $abbeyAverage
     *
     * @return Player
     */
    public function setAbbeyAverage($abbeyAverage)
    {
        $this->abbeyAverage = $abbeyAverage;

        return $this;
    }

    /**
     * Get abbeyAverage
     *
     * @return int
     */
    public function getAbbeyAverage()
    {
        return $this->abbeyAverage;
    }

    /**
     * Set farmerAverage
     *
     * @param integer $farmerAverage
     *
     * @return Player
     */
    public function setFarmerAverage($farmerAverage)
    {
        $this->farmerAverage = $farmerAverage;

        return $this;
    }

    /**
     * Get farmerAverage
     *
     * @return int
     */
    public function getFarmerAverage()
    {
        return $this->farmerAverage;
    }

    /**
     * Set citySizeAverage
     *
     * @param integer $citySizeAverage
     *
     * @return Player
     */
    public function setCitySizeAverage($citySizeAverage)
    {
        $this->citySizeAverage = $citySizeAverage;

        return $this;
    }

    /**
     * Get citySizeAverage
     *
     * @return int
     */
    public function getCitySizeAverage()
    {
        return $this->citySizeAverage;
    }

    /**
     * Set roadSizeAverage
     *
     * @param integer $roadSizeAverage
     *
     * @return Player
     */
    public function setRoadSizeAverage($roadSizeAverage)
    {
        $this->roadSizeAverage = $roadSizeAverage;

        return $this;
    }

    /**
     * Get roadSizeAverage
     *
     * @return int
     */
    public function getRoadSizeAverage()
    {
        return $this->roadSizeAverage;
    }

    /**
     * Set part
     *
     * @param integer $part
     *
     * @return Player
     */
    public function setPart($part)
    {
        $this->part = $part;

        return $this;
    }

    /**
     * Get part
     *
     * @return int
     */
    public function getPart()
    {
        return $this->part;
    }

    /**
     * Set score
     *
     * @param integer $score
     *
     * @return Player
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return int
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set scoreAverage
     *
     * @param integer $scoreAverage
     *
     * @return Player
     */
    public function setScoreAverage($scoreAverage)
    {
        $this->scoreAverage = $scoreAverage;

        return $this;
    }

    /**
     * Get scoreAverage
     *
     * @return int
     */
    public function getScoreAverage()
    {
        return $this->scoreAverage;
    }
}

