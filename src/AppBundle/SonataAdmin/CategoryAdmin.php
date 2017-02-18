<?php
/**
 * Created by PhpStorm.
 * User: ahmed
 * Date: 2/18/17
 * Time: 6:58 PM
 */

namespace AppBundle\SonataAdmin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

/**
 * Class CategoryAdmin
 * @package AppBundle\SonataAdmin
 */
class CategoryAdmin extends AbstractAdmin
{
	protected function configureFormFields( FormMapper $form )
	{
		$form->add( 'name','text' );
	}

	protected function configureDatagridFilters( DatagridMapper $filter )
	{
		$filter
			->add('id')
			->add('name')
				;
	}

	protected function configureListFields( ListMapper $list )
	{
		$list
			->add('id')
			->add('name')
				;
	}
}