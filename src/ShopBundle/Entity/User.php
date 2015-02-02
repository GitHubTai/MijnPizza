<?php

namespace ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ShopBundle\Entity\UserRepository")
 */
class User
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
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="joined", type="datetime")
     */
    private $joined;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastnam", type="string", length=255)
     */
    private $lastnam;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="housenr", type="string", length=20)
     */
    private $housenr;

    /**
     * @var string
     *
     * @ORM\Column(name="houseadd", type="string", length=20)
     */
    private $houseadd;

    /**
     * @var string
     *
     * @ORM\Column(name="phonenumber", type="string", length=20)
     */
    private $phonenumber;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="countorders", type="integer")
     */
    private $countorders;


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
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
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
     * Set joined
     *
     * @param \DateTime joined
     * @return User
     */
    public function joined($joined)
    {
        $this->joined = $joined;

        return $this;
    }

    /**
     * Get [3~[3~[3~[3~joined
     *
     * @return \DateTime 
     */
    public function getjoined()
    {
        return $this->joined;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastnam
     *
     * @param string $lastnam
     * @return User
     */
    public function setLastnam($lastnam)
    {
        $this->lastnam = $lastnam;

        return $this;
    }

    /**
     * Get lastnam
     *
     * @return string 
     */
    public function getLastnam()
    {
        return $this->lastnam;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return User
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set housenr
     *
     * @param string $housenr
     * @return User
     */
    public function setHousenr($housenr)
    {
        $this->housenr = $housenr;

        return $this;
    }

    /**
     * Get housenr
     *
     * @return string 
     */
    public function getHousenr()
    {
        return $this->housenr;
    }

    /**
     * Set houseadd
     *
     * @param string $houseadd
     * @return User
     */
    public function setHouseadd($houseadd)
    {
        $this->houseadd = $houseadd;

        return $this;
    }

    /**
     * Get houseadd
     *
     * @return string 
     */
    public function getHouseadd()
    {
        return $this->houseadd;
    }

    /**
     * Set phonenumber
     *
     * @param string $phonenumber
     * @return User
     */
    public function setPhonenumber($phonenumber)
    {
        $this->phonenumber = $phonenumber;

        return $this;
    }

    /**
     * Get phonenumber
     *
     * @return string 
     */
    public function getPhonenumber()
    {
        return $this->phonenumber;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
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
     * Set countorders
     *
     * @param integer $countorders
     * @return User
     */
    public function setCountorders($countorders)
    {
        $this->countorders = $countorders;

        return $this;
    }

    /**
     * Get countorders
     *
     * @return integer 
     */
    public function getCountorders()
    {
        return $this->countorders;
    }
}
