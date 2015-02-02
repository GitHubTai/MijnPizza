<?php

namespace ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * City
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ShopBundle\Entity\CityRepository")
 */
class City
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="zipcode", type="integer")
     */
    private $zipcode;

    /**
     * @var string
     *
     * @ORM\Column(name="cityname", type="string", length=255)
     */
    private $cityname;

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="integer")
     */
    private $userid;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set zipcode
     *
     * @param integer $zipcode
     * @return City
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * Get zipcode
     *
     * @return integer 
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set cityname
     *
     * @param string $cityname
     * @return City
     */
    public function setCityname($cityname)
    {
        $this->cityname = $cityname;

        return $this;
    }

    /**
     * Get cityname
     *
     * @return string 
     */
    public function getCityname()
    {
        return $this->cityname;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return City
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return integer 
     */
    public function getUserid()
    {
        return $this->userid;
    }
}
