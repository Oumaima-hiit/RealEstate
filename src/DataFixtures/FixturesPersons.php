<?php


namespace App\DataFixtures;


use App\Controller;

use App\Entity\City;
;
use App\Entity\Person;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Faker as fakerAlias;

class FixturesPersons extends Fixture
{
    public function load(ObjectManager $manager )
    {
        $faker = fakerAlias\Factory::create('fr_FR');
        for ($i = 0; $i < 10; $i++) {

            $personne = new Person();
            $personne->setFirstName($faker->firstName());

            $personne->setLastName($faker->lastName);
            $personne->setTelephone($faker->phoneNumber);
            $personne->setEmail($faker->email);
            $adress = new City();
            $adress = action('22');


            $personne->setAdress($adress);





            $manager->persist($personne);
        }

        $manager->flush();
    }
}
