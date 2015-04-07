<?php
/**
 * Created by PhpStorm.
 * User: ZenSide
 * Date: 04/02/15
 * Time: 11:14
 */

namespace ZenSide\DemoBundle\Admin;

use ZenSide\CoreBundle\Entity\Room;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class RoomAdmin extends Admin
{
    /**
     * {@inheritdoc}
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name')
            ->add('width')->add('length')->add('height');

        if ($this->getSubject() && !is_null($this->getSubject()->getId())) {
            $formMapper->add('furnitures', 'sonata_type_collection', array(
                'by_reference' => false,
                'type_options' => array(
                    // Prevents the "Delete" option from being displayed
                    'delete' => false,
                    'delete_options' => array(
                        // You may otherwise choose to put the field but hide it
                        'type' => 'hidden',
                        // In that case, you need to fill in the options as well
                        'type_options' => array(
                            'mapped' => false,
                            'required' => false,
                        )
                    )
                )
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
                'sortable' => 'position',
            ));
        }
    }

    public function preUpdate($room)
    {
        foreach ($room->getFurnitures() as $f) {
            $f->setRoom($room);
        }
    }

}