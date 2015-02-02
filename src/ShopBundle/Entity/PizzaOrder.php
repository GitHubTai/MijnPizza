<?php

namespace ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

// voor relationship: PizzaOrder->Customer
use Doctrine\Common\Collection\ArrayCollection;

/**
 * PizzaOrder
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ShopBundle\Entity\PizzaOrderRepository")
 */
class PizzaOrder
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
     * @var \DateTime
     *
     * @ORM\Column(name="orderDate", type="datetime")
     */
    private $orderDate;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="pizzaOrder")
     * @ORM\JoinColumn(name="id", referencedColumnName="id")
     */
    private $customer;

    /**
     * @var float
     *
     * @ORM\Column(name="reductionAmount", type="float")
     */
    private $reductionAmount;

    /**
     * @var float
     *
     * @ORM\Column(name="totalPrice", type="float")
     */
    private $totalPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="orderInfo", type="string", length=255)
     */
    private $orderInfo;



     /**
     * @ORM\OneToMany(targetEntity="items_ordered", mappedBy="PizzaOrder")
     */
    private $itemsOrdered;

    public function __construct()
    {
        $this->itemsOrdered = new ArrayCollection();
    }


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
     * Set orderDate
     *
     * @param \DateTime $orderDate
     * @return PizzaOrder
     */
    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;

        return $this;
    }

    /**
     * Get orderDate
     *
     * @return \DateTime 
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * Set customer
     *
     * @param integer $customer
     * @return PizzaOrder
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return integer 
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set reductionAmount
     *
     * @param float $reductionAmount
     * @return PizzaOrder
     */
    public function setReductionAmount($reductionAmount)
    {
        $this->reductionAmount = $reductionAmount;

        return $this;
    }

    /**
     * Get reductionAmount
     *
     * @return float 
     */
    public function getReductionAmount()
    {
        return $this->reductionAmount;
    }

    /**
     * Set totalPrice
     *
     * @param float $totalPrice
     * @return PizzaOrder
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * Get totalPrice
     *
     * @return float 
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * Set orderInfo
     *
     * @param string $orderInfo
     * @return PizzaOrder
     */
    public function setOrderInfo($orderInfo)
    {
        $this->orderInfo = $orderInfo;

        return $this;
    }

    /**
     * Get orderInfo
     *
     * @return string 
     */
    public function getOrderInfo()
    {
        return $this->orderInfo;
    }
}
