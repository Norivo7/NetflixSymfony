<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $catSerials = new Category();
        $catSerials->setName('Seriale');
        $catMovies = new Category();
        $catMovies->setName('Filmy');
        $catNew = new Category();
        $catNew->setName('Nowe');
        $catExclusive = new Category();
        $catExclusive->setName('Eksluzywne');

        $movie1 = new Movie();
        $movie1->setCategory($catSerials);
        $movie1->setIsSerial(true);
//        $movie1->addCategory($catNew);
//        $movie1->addCategory($catExclusive);
        $movie1->setTitle('Wiedźmin');
        $movie1->setDescription('lorem ipsum');
        $movie1->setYear(2021);
        $movie1->setImg('https://www.mansworldindia.com/wp-content/uploads/2019/08/witcher-fr.jpg');
        $movie1->setLikes(10);
        $movie1->setLink("https://www.youtube.com/embed/ndl1W4ltcmg");

        $movie2 = new Movie();
        $movie2->setCategory($catMovies);
        $movie2->setTitle('Rytuał');
        $movie2->setDescription('horror');
        $movie2->setYear(2020);
        $movie2->setImg('https://a.allegroimg.com/original/115135/980542cb415eb4f298c588fddda5/RYTUAL-Anthony-HOPKINS-DVD');
        $movie2->setLikes(6);
        $movie2->setLink("https://www.youtube.com/embed/U57cykY5mmk");

        $movie3 = new Movie();
        $movie3->setCategory($catExclusive); // bedzie potrzebna funkcja setExclusive
//        $movie3->addCategory($catSerials); // <=========   TO POWINNO DZIAŁAĆ
        $movie3->setTitle('Peaky Blinders'); // albo many to many w kategorii
        $movie3->setDescription('lorem ipsum');
        $movie3->setYear(2018);
        $movie3->setImg('https://upload.wikimedia.org/wikipedia/commons/1/13/Peaky_Blinders_Logo.png');
        $movie3->setLikes(20);
        $movie3->setLink("https://www.youtube.com/embed/oVzVdvGIC7U");

        $movie4 = new Movie();
        $movie4->setCategory($catNew);
        $movie4->setTitle('Sausage Party');
        $movie4->setDescription('lorem ipsum');
        $movie4->setYear(2016);
        $movie4->setImg('https://www.ponapisach.pl/wp-content/uploads/2016/08/sausage-party-7.jpg');
        $movie4->setLikes(1);
        $movie4->setLink("https://www.youtube.com/embed/RDm_jsvksQQ");

        $manager->persist($catExclusive);
        $manager->persist($catSerials);
        $manager->persist($catMovies);
        $manager->persist($catNew);
        $manager->flush();

        $manager->persist($movie1);
        $manager->persist($movie2);
        $manager->persist($movie3);
        $manager->persist($movie4);
        $manager->flush();

        $manager->flush();
    }
}
