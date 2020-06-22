<?php

namespace App\DataFixtures;

use App\Entity\Property;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {             
        $faker = Factory::create('fr_FR');

            for($i = 0; $i <= 25; $i++){
        
                $property = new property();

                $property
                    ->setName($faker->name())
                    ->setDescription($faker->text(200))
                    ->setSurface($faker->numberBetween(80, 300))
                    ->setRoom($faker->numberBetween(1, 5))
                    ->setFloor($faker->numberBetween(80000, 95000))
                    ->setAddress($faker->streetAddress())
                    ->setCity($faker->city())
                    ->setPostalCode($faker->postcode());

                $manager->persist($property);
            }
            $manager->flush();
    }
}
