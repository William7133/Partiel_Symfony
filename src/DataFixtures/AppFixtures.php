<?php

namespace App\DataFixtures;
use App\Entity\Advert;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;

class AppFixtures extends Fixture
{


    public function load(ObjectManager $manager)
    {

      $faker = Faker\Factory::create('fr_FR');

      for ($i = 0; $i < 2; $i++) {
        $Advert = new Advert();
        $Advert->setTitle($faker->title);
        $Advert->setDescription($faker->text);
        $Advert->setCity($faker->city);
        $Advert->setCarYear($faker->numberBetween($min = 2010, $max=2020));
        $Advert->setNbKm($faker->numberBetween($min =100, $max = 300000 ));
        $Advert->setNbDays($faker->numberBetween($min = 1, $max = 365));
        $Advert->setPrice($faker->numberBetween($min = 20, $max = 100000 ));

        // $product = new Product();
        // $manager->persist($product);

      }

      for ($i = 0; $i < 4; $i++) {

          $User = new User();
          $User->setEmail($faker->email);
          $User->setLogin($faker->UserName);
          $User->setPassword($faker->password);

      }


        $manager->flush();
    }
}

