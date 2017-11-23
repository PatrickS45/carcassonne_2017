<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Statistic
 *
 * @ORM\Table(name="statistic")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StatisticRepository")
 */
class Statistic
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
     * @ORM\Column(name="play", type="integer", nullable=true)
     */
    private $play;

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
     * @var int
     *
     * @ORM\Column(name="city", type="integer", nullable=true)
     */
    private $city;

    /**
     * @var int
     *
     * @ORM\Column(name="city_average", type="integer", nullable=true)
     */
    private $cityAverage;

    /**
     * @var int
     *
     * @ORM\Column(name="biggest_city", type="integer", nullable=true)
     */
    private $biggestCity;

    /**
     * @var int
     *
     * @ORM\Column(name="shield", type="integer", nullable=true)
     */
    private $shield;

    /**
     * @var int
     *
     * @ORM\Column(name="shield_average", type="integer", nullable=true)
     */
    private $shieldAverage;

    /**
     * @var int
     *
     * @ORM\Column(name="road", type="integer", nullable=true)
     */
    private $road;

    /**
     * @var int
     *
     * @ORM\Column(name="road_average", type="integer", nullable=true)
     */
    private $roadAverage;

    /**
     * @var int
     *
     * @ORM\Column(name="biggest_road", type="integer", nullable=true)
     */
    private $biggestRoad;

    /**
     * @var int
     *
     * @ORM\Column(name="abbey", type="integer", nullable=true)
     */
    private $abbey;

    /**
     * @var int
     *
     * @ORM\Column(name="abbey_average", type="integer", nullable=true)
     */
    private $abbeyAverage;


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
     * Set victory
     *
     * @param integer $victory
     *
     * @return Statistic
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
     * @return Statistic
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
     * @return Statistic
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
     * Set play
     *
     * @param integer $play
     *
     * @return Statistic
     */
    public function setPlay($play)
    {
        $this->play = $play;

        return $this;
    }

    /**
     * Get play
     *
     * @return int
     */
    public function getPlay()
    {
        return $this->play;
    }

    /**
     * Set score
     *
     * @param integer $score
     *
     * @return Statistic
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
     * @return Statistic
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

    /**
     * Set city
     *
     * @param integer $city
     *
     * @return Statistic
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return int
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set cityAverage
     *
     * @param integer $cityAverage
     *
     * @return Statistic
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
     * Set biggestCity
     *
     * @param integer $biggestCity
     *
     * @return Statistic
     */
    public function setBiggestCity($biggestCity)
    {
        $this->biggestCity = $biggestCity;

        return $this;
    }

    /**
     * Get biggestCity
     *
     * @return int
     */
    public function getBiggestCity()
    {
        return $this->biggestCity;
    }

    /**
     * Set shield
     *
     * @param integer $shield
     *
     * @return Statistic
     */
    public function setShield($shield)
    {
        $this->shield = $shield;

        return $this;
    }

    /**
     * Get shield
     *
     * @return int
     */
    public function getShield()
    {
        return $this->shield;
    }

    /**
     * Set shieldAverage
     *
     * @param integer $shieldAverage
     *
     * @return Statistic
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
     * Set road
     *
     * @param integer $road
     *
     * @return Statistic
     */
    public function setRoad($road)
    {
        $this->road = $road;

        return $this;
    }

    /**
     * Get road
     *
     * @return int
     */
    public function getRoad()
    {
        return $this->road;
    }

    /**
     * Set roadAverage
     *
     * @param integer $roadAverage
     *
     * @return Statistic
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
     * Set biggestRoad
     *
     * @param integer $biggestRoad
     *
     * @return Statistic
     */
    public function setBiggestRoad($biggestRoad)
    {
        $this->biggestRoad = $biggestRoad;

        return $this;
    }

    /**
     * Get biggestRoad
     *
     * @return int
     */
    public function getBiggestRoad()
    {
        return $this->biggestRoad;
    }

    /**
     * Set abbey
     *
     * @param integer $abbey
     *
     * @return Statistic
     */
    public function setAbbey($abbey)
    {
        $this->abbey = $abbey;

        return $this;
    }

    /**
     * Get abbey
     *
     * @return int
     */
    public function getAbbey()
    {
        return $this->abbey;
    }

    /**
     * Set abbeyAverage
     *
     * @param integer $abbeyAverage
     *
     * @return Statistic
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
}

