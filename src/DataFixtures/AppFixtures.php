<?php

namespace App\DataFixtures;
use App\Entity\Marque;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $marque = new Marque();
        $marque->setLibelle('Renault');
        $manager->persist($marque);

        $marque2 = new Marque();
        $marque2->setLibelle('Triumph');
        $manager->persist($marque2);

        $marque3 = new Marque();
        $marque3->setLibelle('Harley Davidson');
        $manager->persist($marque3);


        $manager->flush();
    }
}
