<?php
/**
 * Created by PhpStorm.
 * User: ahmed
 * Date: 2/18/17
 * Time: 5:17 AM
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class ShippingAddress
 * @package AppBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="shipping_address")
 */
class ShippingAddress
{
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 * @var int
	 */
	private $id;

	/**
	 * @var integer
	 * @ORM\Column(type="integer")
	 */
	private $phone;

	/**
	 * @var integer
	 * @ORM\Column(type="integer")
	 */
	private $postalcode;

	/**
	 * @var string
	 * @ORM\Column(type="string")
	 */
	private $city;

	/**
	 * @var string
	 * @ORM\Column(type="text")
	 */
	private $area;

	/**
	 * @var string
	 * @ORM\Column(type="text")
	 */
	private $street;

	/**
	 * @var string
	 * @ORM\Column(type="text")
	 */
	private $landmark;

	/**
	 * @var string
	 * @ORM\Column(type="string")
	 */
	private $buildingNumber;

	/**
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="ShippingAddresses")
	 * @var User
	 */
	private $user;

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
     * Set phone
     *
     * @param integer $phone
     * @return ShippingAddress
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return integer 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set postalcode
     *
     * @param integer $postalcode
     * @return ShippingAddress
     */
    public function setPostalcode($postalcode)
    {
        $this->postalcode = $postalcode;

        return $this;
    }

    /**
     * Get postalcode
     *
     * @return integer 
     */
    public function getPostalcode()
    {
        return $this->postalcode;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return ShippingAddress
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set area
     *
     * @param string $area
     * @return ShippingAddress
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return string 
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set street
     *
     * @param string $street
     * @return ShippingAddress
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string 
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set landmark
     *
     * @param string $landmark
     * @return ShippingAddress
     */
    public function setLandmark($landmark)
    {
        $this->landmark = $landmark;

        return $this;
    }

    /**
     * Get landmark
     *
     * @return string 
     */
    public function getLandmark()
    {
        return $this->landmark;
    }

    /**
     * Set buildingNumber
     *
     * @param string $buildingNumber
     * @return ShippingAddress
     */
    public function setBuildingNumber($buildingNumber)
    {
        $this->buildingNumber = $buildingNumber;

        return $this;
    }

    /**
     * Get buildingNumber
     *
     * @return string 
     */
    public function getBuildingNumber()
    {
        return $this->buildingNumber;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     * @return ShippingAddress
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
}
