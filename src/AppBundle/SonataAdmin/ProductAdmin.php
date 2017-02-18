<?php
/**
 * Created by PhpStorm.
 * User: ahmed
 * Date: 2/18/17
 * Time: 7:26 PM
 */

namespace AppBundle\SonataAdmin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Form\FormMapper;

/**
 * Class ProductAdmin
 * @package AppBundle\SonataAdmin
 */
class ProductAdmin extends AbstractAdmin
{
	protected function configureFormFields( FormMapper $form )
	{
		$form
			->add('name')
			->add('sku')
			->add('cost')
			->add('displayPrice')
			->add('discountDisplayPrice')
			->add('isPublished')
			->add('categories')
			;
	}
}