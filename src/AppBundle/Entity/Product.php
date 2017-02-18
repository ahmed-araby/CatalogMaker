<?php
/**
 * Created by PhpStorm.
 * User: ahmed
 * Date: 2/18/17
 * Time: 4:58 AM
 */

namespace AppBundle\Entity;

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
	 * @ORM\Column(name="display_price")
	 * @var float
	 */
	private $displayPrice;

	/**
	 * @ORM\Column(name="discount_display_price")
	 * @var float
	 */
	private $discountDisplayPrice;

	/**
	 * @ORM\Column(name="cost")
	 * @var float
	 */
	private $cost;

	/**
	 * @ORM\Column(name="is_published")
	 * @var bool
	 */
	private $isPublished;

	/**
	 * @ORM\ManyToMany(targetEntity="Category", inversedBy="products")
	 * @var Category[]|ArrayCollection
	 */
	private $categories;

	/**
	 * @ORM\ManyToMany(targetEntity="PurchasedProduct", inversedBy="vanillaProducts")
	 * @var PurchasedProduct[]|ArrayCollection
	 */
	private $purchasedProducts;

	/**
	 * Product constructor.
	 */
	public function __construct()
	{
		$this->categories = new ArrayCollection();
		$this->purchasedProducts = new ArrayCollection();
	}


	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 */
	public function setId( $id )
	{
		$this->id = $id;
	}

	/**
	 * @return string
	 */
	public function getSku()
	{
		return $this->sku;
	}

	/**
	 * @param string $sku
	 */
	public function setSku( $sku )
	{
		$this->sku = $sku;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName( $name )
	{
		$this->name = $name;
	}

	/**
	 * @return float
	 */
	public function getDisplayPrice()
	{
		return $this->displayPrice;
	}

	/**
	 * @param float $displayPrice
	 */
	public function setDisplayPrice( $displayPrice )
	{
		$this->displayPrice = $displayPrice;
	}

	/**
	 * @return float
	 */
	public function getDiscountDisplayPrice()
	{
		return $this->discountDisplayPrice;
	}

	/**
	 * @param float $discountDisplayPrice
	 */
	public function setDiscountDisplayPrice( $discountDisplayPrice )
	{
		$this->discountDisplayPrice = $discountDisplayPrice;
	}

	/**
	 * @return float
	 */
	public function getCost()
	{
		return $this->cost;
	}

	/**
	 * @param float $cost
	 */
	public function setCost( $cost )
	{
		$this->cost = $cost;
	}

	/**
	 * @return Category[]|ArrayCollection
	 */
	public function getCategories()
	{
		return $this->categories;
	}

	/**
	 * @param Category[]|ArrayCollection $categories
	 */
	public function setCategories( $categories )
	{
		$this->categories = $categories;
	}

	/**
	 * @return PurchasedProduct[]|ArrayCollection
	 */
	public function getPurchasedProducts()
	{
		return $this->purchasedProducts;
	}

	/**
	 * @param PurchasedProduct[]|ArrayCollection $purchasedProducts
	 */
	public function setPurchasedProducts( $purchasedProducts )
	{
		$this->purchasedProducts = $purchasedProducts;
	}
}