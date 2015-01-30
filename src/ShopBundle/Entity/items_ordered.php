<?php

namespace ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collection\ArrayCollection;

/**
 * items_ordered
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ShopBundle\Entity\items_orderedRepository")
 */
class items_ordered
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
     * @ORM\ManyToOne(targetEntity="PizzaOrder", inversedBy="items_ordered")
     * @ORM\JoinColumn(name="orderId", referencedColumnName="id")
     */

    private $orderId;

    /**
     * @var integer
     *
     * @ORM\Column(name="productId", type="integer")
     */
    private $productId;

    /**
     * @var string
     *
     * @ORM\Column(name="extra", type="string", length=255)
     */
    private $extra;
    

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
     * Set orderId
     *
     * @param integer $orderId
     * @return items_ordered
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Get orderId
     *
     * @return integer 
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set productId
     *
     * @param integer $productId
     * @return items_ordered
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return integer 
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set extra
     *
     * @param string $extra
     * @return items_ordered
     */
    public function setExtra($extra)
    {
        $this->extra = $extra;

        return $this;
    }

    /**
     * Get extra
     *
     * @return string 
     */
    public function getExtra()
    {
        return $this->extra;
    }
}
