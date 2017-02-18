<?php
/**
 * Created by PhpStorm.
 * User: ahmed
 * Date: 2/18/17
 * Time: 4:54 AM
 */

namespace AppBundle\Entity;
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
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param mixed $id
	 */
	public function setId( $id )
	{
		$this->id = $id;
	}
}