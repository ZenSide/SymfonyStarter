<?php

namespace ZenSide\DemoBundle\Controller\Api;

use ZenSide\CoreBundle\Controller\Api\RestController;
use ZenSide\CoreBundle\Entity\User;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;

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
        return $this->getRepository('CoreBundle:User')->findAll();
    }

    /**
    public function postAction(Request $request){

        $user = new User();
        $user->setFirstname($request->get('firstname'));
        $this->getManager()->persist($user);
        $this->getManager()->flush();

        return $user;
    }
     */
}