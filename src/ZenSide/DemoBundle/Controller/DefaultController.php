<?php

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ZenSide\DemoBundle\Entity\Room;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    public function testForm(Request $request){

        $room = new Room();
        $form = $this->createForm('ZenSideDemoBundle:Room', $room);
        $form->submit($request);
        if ($form->isValid()){
            $page = $form->getData();
            $this->om->persist($page);
            $this->om->flush($page);
        }

        throw new InvalidFormException('Invalid submitted data', $form);
    }
}