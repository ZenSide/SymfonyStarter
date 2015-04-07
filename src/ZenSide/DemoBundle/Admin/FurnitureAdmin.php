<?php
/**
 * Created by PhpStorm.
 * User: ZenSide
 * Date: 04/02/15
 * Time: 11:14
 */

namespace ZenSide\DemoBundle\Admin;


use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class FurnitureAdmin extends Admin
{
    /**
     * {@inheritdoc}
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name')->add('color')->add('material');
    }

}