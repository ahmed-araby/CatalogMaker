<?php
/**
 * Created by PhpStorm.
 * User: ahmed
 * Date: 2/18/17
 * Time: 5:02 AM
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Class PurchasedProduct
 * @package AppBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="purchased_product")
 */
class PurchasedProduct
{
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 * @var int
	 */
	private $id;

	/**
	 * @var float
	 * @ORM\Column(type="float")
	 */
	private $purchasePrice;

	/**
	 * @var Product
	 * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Product")
	 */
	private $product;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->product = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set purchasePrice
     *
     * @param float $purchasePrice
     * @return PurchasedProduct
     */
    public function setPurchasePrice($purchasePrice)
    {
        $this->purchasePrice = $purchasePrice;

        return $this;
    }

    /**
     * Get purchasePrice
     *
     * @return float 
     */
    public function getPurchasePrice()
    {
        return $this->purchasePrice;
    }

    /**
     * Add product
     *
     * @param \AppBundle\Entity\Product $product
     * @return PurchasedProduct
     */
    public function addProduct(\AppBundle\Entity\Product $product)
    {
        $this->product[] = $product;

        return $this;
    }

    /**
     * Remove product
     *
     * @param \AppBundle\Entity\Product $product
     */
    public function removeProduct(\AppBundle\Entity\Product $product)
    {
        $this->product->removeElement($product);
    }

    /**
     * Get product
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProduct()
    {
        return $this->product;
    }
}
