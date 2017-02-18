<?php
/**
 * Created by PhpStorm.
 * User: ahmed
 * Date: 2/18/17
 * Time: 4:58 AM
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class Product
 * @package AppBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="product")
 */
class Product
{
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 * @var int
	 */
	private $id;

	/**
	 * @ORM\Column(name="sku", type="string")
	 * @var string
	 */
	private $sku;

	/**
	 * @ORM\Column(name="name", type="string")
	 * @var string
	 */
	private $name;

	/**
	 * @ORM\Column(name="display_price", type="float")
	 * @var float
	 */
	private $displayPrice;

	/**
	 * @ORM\Column(name="discount_display_price", type="float")
	 * @var float
	 */
	private $discountDisplayPrice;

	/**
	 * @ORM\Column(name="cost", type="float")
	 * @var float
	 */
	private $cost;

	/**
	 * @ORM\Column(name="is_published", type="boolean")
	 * @var bool
	 */
	private $isPublished;

	/**
	 * @ORM\ManyToMany(targetEntity="Category", inversedBy="products")
	 * @var Category[]|ArrayCollection
	 */
	private $categories;

	/**
	 * @var PurchasedProduct[]
	 * @ORM\OneToMany(targetEntity="AppBundle\Entity\PurchasedProduct",mappedBy="product")
	 */
	private $purchasedProducts;

	/**
	 * @var string
	 * @ORM\Column(type="string")
	 */
	private $status;

	/**
	 * @var string
	 * @ORM\Column(type="string")
	 */
	private $trackingnumber;

	/**
	 * @var string
	 * @ORM\Column(type="string")
	 */
	private $courier;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
        $this->purchasedProducts = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set sku
     *
     * @param string $sku
     * @return Product
     */
    public function setSku($sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * Get sku
     *
     * @return string 
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Product
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
     * Set displayPrice
     *
     * @param float $displayPrice
     * @return Product
     */
    public function setDisplayPrice($displayPrice)
    {
        $this->displayPrice = $displayPrice;

        return $this;
    }

    /**
     * Get displayPrice
     *
     * @return float 
     */
    public function getDisplayPrice()
    {
        return $this->displayPrice;
    }

    /**
     * Set discountDisplayPrice
     *
     * @param float $discountDisplayPrice
     * @return Product
     */
    public function setDiscountDisplayPrice($discountDisplayPrice)
    {
        $this->discountDisplayPrice = $discountDisplayPrice;

        return $this;
    }

    /**
     * Get discountDisplayPrice
     *
     * @return float 
     */
    public function getDiscountDisplayPrice()
    {
        return $this->discountDisplayPrice;
    }

    /**
     * Set cost
     *
     * @param float $cost
     * @return Product
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return float 
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set isPublished
     *
     * @param boolean $isPublished
     * @return Product
     */
    public function setIsPublished($isPublished)
    {
        $this->isPublished = $isPublished;

        return $this;
    }

    /**
     * Get isPublished
     *
     * @return boolean 
     */
    public function getIsPublished()
    {
        return $this->isPublished;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Product
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set trackingnumber
     *
     * @param string $trackingnumber
     * @return Product
     */
    public function setTrackingnumber($trackingnumber)
    {
        $this->trackingnumber = $trackingnumber;

        return $this;
    }

    /**
     * Get trackingnumber
     *
     * @return string 
     */
    public function getTrackingnumber()
    {
        return $this->trackingnumber;
    }

    /**
     * Set courier
     *
     * @param string $courier
     * @return Product
     */
    public function setCourier($courier)
    {
        $this->courier = $courier;

        return $this;
    }

    /**
     * Get courier
     *
     * @return string 
     */
    public function getCourier()
    {
        return $this->courier;
    }

    /**
     * Add categories
     *
     * @param \AppBundle\Entity\Category $categories
     * @return Product
     */
    public function addCategory(\AppBundle\Entity\Category $categories)
    {
        $this->categories[] = $categories;

        return $this;
    }

    /**
     * Remove categories
     *
     * @param \AppBundle\Entity\Category $categories
     */
    public function removeCategory(\AppBundle\Entity\Category $categories)
    {
        $this->categories->removeElement($categories);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Add purchasedProducts
     *
     * @param \AppBundle\Entity\PurchasedProduct $purchasedProducts
     * @return Product
     */
    public function addPurchasedProduct(\AppBundle\Entity\PurchasedProduct $purchasedProducts)
    {
        $this->purchasedProducts[] = $purchasedProducts;

        return $this;
    }

    /**
     * Remove purchasedProducts
     *
     * @param \AppBundle\Entity\PurchasedProduct $purchasedProducts
     */
    public function removePurchasedProduct(\AppBundle\Entity\PurchasedProduct $purchasedProducts)
    {
        $this->purchasedProducts->removeElement($purchasedProducts);
    }

    /**
     * Get purchasedProducts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPurchasedProducts()
    {
        return $this->purchasedProducts;
    }
}
