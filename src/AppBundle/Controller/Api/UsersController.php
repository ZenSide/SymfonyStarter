<?php

namespace AppBundle\Controller\Api;

use AppBundle\Entity\User;
use FOS\RestBundle\Controller\Annotations as Rest;

class UsersController extends RestController
{
    /**
     * @Rest\View
     */
    public function getAction(User $user){
        return $user;
    }

    /**
     * @Rest\View
     */
    public function cgetAction(){
        return $this->getRepository('AppBundle:User')->findAll();
    }
}