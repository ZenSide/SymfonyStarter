<?php

namespace ZenSide\DemoBundle\Controller\Api;

use ZenSide\CoreBundle\Controller\Api\RestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;
use ZenSide\DemoBundle\Entity\Furniture;

class FurnituresController extends RestController
{
    /**
     * @Rest\View
     */
    public function getAction(Furniture $entity){
        return $entity;
    }

    /**
     * @Rest\View
     */
    public function cgetAction(){
        return $this->getRepository('ZenSideDemoBundle:Furniture')->findAll();
    }
}