<?php
/**
 * Created by PhpStorm.
 * User: ahmed
 * Date: 2/18/17
 * Time: 4:59 AM
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class PurchasedOrder
 * @package AppBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="purchased_order")
 */
class PurchasedOrder
{
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 * @var int
	 */
	private $id;

	/**
	 * @var Product
	 * @ORM\OneToOne(targetEntity="AppBundle\Entity\PurchasedProduct")
	 */
	private $purchasedProduct;

	/**
	 * @var User
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
	 */
	private $user;

	/**
	 * @var ShippingAddress
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ShippingAddress")
	 */
	private $shippingAddress;

	/**
	 * @var Payment[]
	 * @ORM\OneToMany(targetEntity="AppBundle\Entity\Payment", mappedBy="purchaseOrder")
	 */
	private $payments;

	/**
	 * @var string
	 * @ORM\Column(type="string")
	 */
	private $status;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->payments = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set status
     *
     * @param string $status
     * @return PurchasedOrder
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
     * Set purchasedProduct
     *
     * @param \AppBundle\Entity\PurchasedProduct $purchasedProduct
     * @return PurchasedOrder
     */
    public function setPurchasedProduct(\AppBundle\Entity\PurchasedProduct $purchasedProduct = null)
    {
        $this->purchasedProduct = $purchasedProduct;

        return $this;
    }

    /**
     * Get purchasedProduct
     *
     * @return \AppBundle\Entity\PurchasedProduct 
     */
    public function getPurchasedProduct()
    {
        return $this->purchasedProduct;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     * @return PurchasedOrder
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set shippingAddress
     *
     * @param \AppBundle\Entity\ShippingAddress $shippingAddress
     * @return PurchasedOrder
     */
    public function setShippingAddress(\AppBundle\Entity\ShippingAddress $shippingAddress = null)
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }

    /**
     * Get shippingAddress
     *
     * @return \AppBundle\Entity\ShippingAddress 
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * Add payments
     *
     * @param \AppBundle\Entity\Payment $payments
     * @return PurchasedOrder
     */
    public function addPayment(\AppBundle\Entity\Payment $payments)
    {
        $this->payments[] = $payments;

        return $this;
    }

    /**
     * Remove payments
     *
     * @param \AppBundle\Entity\Payment $payments
     */
    public function removePayment(\AppBundle\Entity\Payment $payments)
    {
        $this->payments->removeElement($payments);
    }

    /**
     * Get payments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPayments()
    {
        return $this->payments;
    }
}
