<?php
// src/Blogger/BlogBundle/DataFixtures/ORM/CommentFixtures.php

namespace Aitam\IndexBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Aitam\IndexBundle\Entity\Commenti;
use Aitam\IndexBundle\Entity\Dinuovo;

class CommentiFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $commenti = new Commenti();
        $commenti->setUtente('symfony');
        $commenti->setCommenti('To make a long story short. You can\'t go wrong by choosing Symfony! And no one has ever been fired for using Symfony.');
        $commenti->setArticolo($manager->merge($this->getReference('dinuovo-1')));
        $manager->persist($commenti);

        $commenti = new Commenti();
        $commenti->setUtente('David');
        $commenti->setCommenti('To make a long story short. Choosing a framework must not be taken lightly; it is a long-term commitment. Make sure that you make the right selection!');
        $commenti->setArticolo($manager->merge($this->getReference('dinuovo-1')));
        $manager->persist($commenti);

        $commenti = new Commenti();
        $commenti->setUtente('Dade');
        $commenti->setCommenti('Anything else, mom? You want me to mow the lawn? Oops! I forgot, New York, No grass.');
        $commenti->setArticolo($manager->merge($this->getReference('dinuovo-2')));
        $manager->persist($commenti);



        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}
