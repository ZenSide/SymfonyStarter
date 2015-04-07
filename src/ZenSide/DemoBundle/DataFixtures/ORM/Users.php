<?php
use Doctrine\Common\Persistence\ObjectManager;
use ZenSide\CoreBundle\DataFixtures\ORM\AbstractDataFixture;

class Users extends AbstractDataFixture
{
    public function doLoad(ObjectManager $manager)
    {
        $userManager = $this->container->get('fos_user.user_manager');

        // Create a new user
        $user = $userManager->createUser();
        $user->setUsername('admin');
        $user->setEmail('admin@admin.admin');
        $user->setPlainPassword('admin');
        $user->setEnabled(true);
        $user->setRoles(array("ROLE_SUPER_ADMIN"));
        $userManager->updateUser($user);

        $manager->flush();
    }
    protected function getEnvironments(){
        return array('dev','prod');
    }
    public function getOrder(){
        return 2;
    }
}