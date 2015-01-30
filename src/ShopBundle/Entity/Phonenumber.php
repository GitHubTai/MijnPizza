<?php

namespace ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collection\ArrayCollection;

/**
 * Phonenumber
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ShopBundle\Entity\PhonenumberRepository")
 */
class Phonenumber
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
     * @ORM\Column(name="Phonenumber", type="string", length=20)
     */
    private $phonenumber;

   /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Customer", inversedBy="Phonenumber")
     * @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     */
    private $customer;


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
     * Set phonenumber
     *
     * @param string $phonenumber
     * @return Phonenumber
     */
    public function setPhonenumber()
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
     * Set customerId
     *
     * @param integer $customerId
     * @return Phonenumber
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customerId
     *
     * @return integer 
     */
    public function getCustomer()
    {
        return $this->customer;
    }
}
