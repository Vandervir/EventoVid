<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
//    public function load(ObjectManager $manager)
//    {
//        // $product = new Product();
//        // $manager->persist($product);
//
//        $manager->flush();
//    }
    /**
     * @inheritDoc
     */
    public function load(\Doctrine\Persistence\ObjectManager $manager)
    {
        // TODO: Implement load() method.
        $user  = new User('admin@gmail.ocm');
        $user->setPassword('password');

        $manager->persist($user);

        $manager->flush();
    }
}
