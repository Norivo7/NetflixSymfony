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
        $movie1->addCategory($catSerials);
        $movie1->addCategory($catExclusive);
//        $movie1->setIsSerial(true);                 //////// zle podejscie !!!!!! isPies nie na mojej warcie
//        $movie1->addCategory($catNew);
//        $movie1->addCategory($catExclusive);             // TODO addCategory($categoryName);
        $movie1->setTitle('Wiedźmin');
        $movie1->setDescription('lorem ipsum');
        $movie1->setYear(2021);
        $movie1->setImg('https://occ-0-2507-1433.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABQoAToTA6f9ubdOWjtbqo5hD0KqxCqiqbX2ZpwCoyy7z7W_BhQJlJHBoJ0geQN-UK12Opdmmu1qFyS9z8np5gFxKoz1Foj_nfNu2v4kJAh8X9pFHmD1qyXi_59yv.jpg?r=cc1');
        $movie1->setLikes(10);
        $movie1->setLink("https://www.youtube.com/embed/ndl1W4ltcmg");

        $movie2 = new Movie();
        $movie2->addCategory($catMovies);
        $movie2->addCategory($catExclusive);
        $movie2->setTitle('Rytuał');
        $movie2->setDescription('horror');
        $movie2->setYear(2020);
        $movie2->setImg('https://img.wallpapersafari.com/desktop/1600/900/55/71/M7hKkS.jpg');
        $movie2->setLikes(6);
        $movie2->setLink("https://www.youtube.com/embed/U57cykY5mmk");

        $movie3 = new Movie();
        $movie3->addCategory($catSerials);
        $movie3->addCategory($catExclusive);
        $movie3->setTitle('Peaky Blinders'); // albo many to many w kategorii  edit2: good good, dzialczy
        $movie3->setDescription('lorem ipsum');
        $movie3->setYear(2018);
        $movie3->setImg('https://occ-0-2507-1433.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABe5HswoEnt177Tub7t7PayOliSGYL0dX1EdgRNNjmIhKPgp8j1vvLpRH7SMK5b-Ts30ZUQyOxue517b35q9nTqW-Cf9SCFuu0GJpkrzS61tEXsNkCgs7ZjgCghrI.jpg?r=aa0');
        $movie3->setLikes(20);
        $movie3->setLink("https://www.youtube.com/embed/oVzVdvGIC7U");

        $movie4 = new Movie();
        $movie4->addCategory($catMovies);
        $movie4->setTitle('Sausage Party');
        $movie4->setDescription('lorem ipsum');
        $movie4->setYear(2016);
        $movie4->setImg('https://occ-0-2507-1433.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABcBVNjOx-bAq34tGLpGCiOkJcY3kdmi2ko_wKidXLeqoN7NuouDu1YakOupwHPl3RZt0BqsMekBMfBfAMwZTuWsqs_8.webp?r=09d');
        $movie4->setLikes(1);
        $movie4->setLink("https://www.youtube.com/embed/RDm_jsvksQQ");

        $movie5 = new Movie();
        $movie5->addCategory($catSerials);
        $movie5->setTitle('Game of Thrones');
        $movie5->setDescription('lorem ipsum');
        $movie5->setYear(2011);
        $movie5->setImg('https://uhdwallpapers.org/uploads/converted/19/03/09/game-of-thrones-8-1600x900_949765-mm-90.jpg');
        $movie5->setLikes(15);
        $movie5->setLink("https://www.youtube.com/embed/KPLWWIOCOOQ");

        $movie6 = new Movie();
        $movie6->addCategory($catSerials);
        $movie6->setTitle('Euforia');
        $movie6->setDescription('lorem ipsum');
        $movie6->setYear(2019);
        $movie6->setImg('https://1.bp.blogspot.com/-w-GVhZnqYME/XU_4jcY8ERI/AAAAAAAAFy8/i5PRr9ZAEm4EpFQKLrRgtgBqR55RulqHgCLcBGAs/s1600/euphoria-s01-1920.jpg');
        $movie6->setLikes(11);
        $movie6->setLink("https://www.youtube.com/embed/reeTpPsBFEA");

        $movie7 = new Movie();
        $movie7->addCategory($catMovies);
        $movie7->setTitle('W cieniu księżyca');
        $movie7->setDescription('lorem ipsum');
        $movie7->setYear(2019);
        $movie7->setImg('https://i.ytimg.com/vi/lsxVvQOtph0/maxresdefault.jpg');
        $movie7->setLikes(16);
        $movie7->setLink("https://www.youtube.com/embed/lsxVvQOtph0");

        $movie8 = new Movie();
        $movie8->addCategory($catMovies);
        $movie8->setTitle('Podziemny krąg');
        $movie8->setDescription('lorem ipsum');
        $movie8->setYear(1999);
        $movie8->setImg('https://wallpapermemory.com/uploads/204/fight-club-wallpaper-hd-1600x900-47738.jpg');
        $movie8->setLikes(54);
        $movie8->setLink("https://www.youtube.com/embed/BdJKm16Co6M");

        $manager->persist($catExclusive);
        $manager->persist($catSerials);
        $manager->persist($catMovies);
        $manager->persist($catNew);
        $manager->flush();

        $manager->persist($movie1);
        $manager->persist($movie2);
        $manager->persist($movie3);
        $manager->persist($movie4);
        $manager->persist($movie5);
        $manager->persist($movie6);
        $manager->persist($movie7);
        $manager->persist($movie8);

        $manager->flush();

        $manager->flush();
    }
}
