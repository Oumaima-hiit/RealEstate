<?php

namespace App\DataFixtures;


use App\Entity\City;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Faker as fakerAlias;
class FixturesCity extends Fixture
{
    public function load(ObjectManager $manager){
        $faker = fakerAlias\Factory::create('fr_FR');
        for ($i = 0; $i < 10; $i++) {

            $personne = new City();
            $personne->setTitlr($faker->city);




            $manager->persist($personne);
        }

        $manager->flush();
    }
}
