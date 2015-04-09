<?php

namespace ZenSide\DemoBundle\Controller\Api;

use ZenSide\CoreBundle\Controller\Api\RestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;
use ZenSide\DemoBundle\Entity\Room;

class RoomsController extends RestController
{
    /**
     * @Rest\View
     */
    public function getAction(Room $entity){
        return $entity;
    }

    /**
     * @Rest\View
     */
    public function cgetAction(){
        return $this->getRepository('ZenSideDemoBundle:Room')->findAll();
    }

    /**
     * @Rest\View
     */
    public function getFurnituresAction(Room $entity){
        return $entity->getFurnitures();
    }
}