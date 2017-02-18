<?php
/**
 * Created by PhpStorm.
 * User: ahmed
 * Date: 2/18/17
 * Time: 4:54 AM
 */

namespace AppBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;


/**
 * Class User
 * @package AppBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User
{
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @var ShippingAddress[]
	 * @ORM\OneToMany(targetEntity="AppBundle\Entity\ShippingAddress",mappedBy="user")
	 */
	private $shippingAddresses;

	/**
	 * @var PurchasedOrder[] | ArrayCollection
	 * @ORM\OneToMany(targetEntity="AppBundle\Entity\PurchasedOrder",mappedBy="user")
	 */
	private $purchasedOrders;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->shippingAddresses = new \Doctrine\Common\Collections\ArrayCollection();
        $this->purchasedOrders = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add shippingAddresses
     *
     * @param \AppBundle\Entity\ShippingAddress $shippingAddresses
     * @return User
     */
    public function addShippingAddress(\AppBundle\Entity\ShippingAddress $shippingAddresses)
    {
        $this->shippingAddresses[] = $shippingAddresses;

        return $this;
    }

    /**
     * Remove shippingAddresses
     *
     * @param \AppBundle\Entity\ShippingAddress $shippingAddresses
     */
    public function removeShippingAddress(\AppBundle\Entity\ShippingAddress $shippingAddresses)
    {
        $this->shippingAddresses->removeElement($shippingAddresses);
    }

    /**
     * Get shippingAddresses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getShippingAddresses()
    {
        return $this->shippingAddresses;
    }

    /**
     * Add purchasedOrders
     *
     * @param \AppBundle\Entity\PurchasedOrder $purchasedOrders
     * @return User
     */
    public function addPurchasedOrder(\AppBundle\Entity\PurchasedOrder $purchasedOrders)
    {
        $this->purchasedOrders[] = $purchasedOrders;

        return $this;
    }

    /**
     * Remove purchasedOrders
     *
     * @param \AppBundle\Entity\PurchasedOrder $purchasedOrders
     */
    public function removePurchasedOrder(\AppBundle\Entity\PurchasedOrder $purchasedOrders)
    {
        $this->purchasedOrders->removeElement($purchasedOrders);
    }

    /**
     * Get purchasedOrders
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPurchasedOrders()
    {
        return $this->purchasedOrders;
    }
}
