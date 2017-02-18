<?php
/**
 * Created by PhpStorm.
 * User: ahmed
 * Date: 2/18/17
 * Time: 5:14 AM
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Payment
 * @package AppBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="payment")
 */
class Payment
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
	private $amount;

	/**
	 * @var string
	 * @ORM\Column(type="string")
	 */
	private $status;

	/**
	 * @var string
	 * @ORM\Column(type="string")
	 */
	private $paymentMethod;

	/**
	 * @var PurchasedOrder
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\PurchasedOrder")
	 */
	private $purchaseOrder;

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
     * Set amount
     *
     * @param float $amount
     * @return Payment
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Payment
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
     * Set paymentMethod
     *
     * @param string $paymentMethod
     * @return Payment
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * Get paymentMethod
     *
     * @return string 
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Set purchaseOrder
     *
     * @param \AppBundle\Entity\PurchasedOrder $purchaseOrder
     * @return Payment
     */
    public function setPurchaseOrder(\AppBundle\Entity\PurchasedOrder $purchaseOrder = null)
    {
        $this->purchaseOrder = $purchaseOrder;

        return $this;
    }

    /**
     * Get purchaseOrder
     *
     * @return \AppBundle\Entity\PurchasedOrder 
     */
    public function getPurchaseOrder()
    {
        return $this->purchaseOrder;
    }
}
