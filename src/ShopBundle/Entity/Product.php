<?php

namespace ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ShopBundle\Entity\ProductRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Product
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
     * @ORM\Column(name="productName", type="string", length=255)
     */
    private $productName;

    /**
     * @var string
     *
     * @ORM\Column(name="productPrice", type="decimal")
     */
    private $productPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="productPic", type="string", length=255)
     */
    private $productPic;

    /**
     * @var string
     *
     * @ORM\Column(name="productDescription", type="string", length=255)
     */
    private $productDescription;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;


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
     * Set productName
     *
     * @param string $productName
     * @return Product
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;

        return $this;
    }

    /**
     * Get productName
     *
     * @return string 
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Set productPrice
     *
     * @param string $productPrice
     * @return Product
     */
    public function setProductPrice($productPrice)
    {
        $this->productPrice = $productPrice;

        return $this;
    }

    /**
     * Get productPrice
     *
     * @return string 
     */
    public function getProductPrice()
    {
        return $this->productPrice;
    }

    /**
     * Set productPic
     *
     * @param string $productPic
     * @return Product
     */
    public function setProductPic($productPic)
    {
        $this->productPic = $productPic;

        return $this;
    }

    /**
     * Get productPic
     *
     * @return string 
     */
    public function getProductPic()
    {
        return $this->productPic;
    }

    /**
     * Set productDescription
     *
     * @param string $productDescription
     * @return Product
     */
    public function setProductDescription($productDescription)
    {
        $this->productDescription = $productDescription;

        return $this;
    }

    /**
     * Get productDescription
     *
     * @return string 
     */
    public function getProductDescription()
    {
        return $this->productDescription;
    }

     /**
     * Set created
     *
     * @ORM\PrePersist
     * @param \DateTime $created
     * @return Product 
     */
    public function setCreated()
    {
        if(!isset($this->created))
        $this->created = new \DateTime();

        return $this;
    }

        /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
       
        return $this->created;
    }


}
