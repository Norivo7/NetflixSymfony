<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use App\Entity\Category;
use App\Entity\Video;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
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

        //movie
//
//        $movie1 = new Movie();
//        $movie1->addCategory($catSerials);
//        $movie1->addCategory($catExclusive);
//        $movie1->setTitle('Wiedźmin');
//        $movie1->setDescription('lorem ipsum');
//        $movie1->setYear(2021);
//        $movie1->setImg('https://occ-0-2507-1433.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABQoAToTA6f9ubdOWjtbqo5hD0KqxCqiqbX2ZpwCoyy7z7W_BhQJlJHBoJ0geQN-UK12Opdmmu1qFyS9z8np5gFxKoz1Foj_nfNu2v4kJAh8X9pFHmD1qyXi_59yv.jpg?r=cc1');
//        $movie1->setLink("https://www.youtube.com/embed/ndl1W4ltcmg");
//        $movie1->setActive(true);
//
//        $movie2 = new Movie();
//        $movie2->addCategory($catMovies);
//        $movie2->addCategory($catExclusive);
//        $movie2->setTitle('Rytuał');
//        $movie2->setDescription('horror');
//        $movie2->setYear(2020);
//        $movie2->setImg('https://img.wallpapersafari.com/desktop/1600/900/55/71/M7hKkS.jpg');
//        $movie2->setLink("https://www.youtube.com/embed/U57cykY5mmk");
//        $movie2->setActive(true);
//
//        $movie3 = new Movie();
//        $movie3->addCategory($catSerials);
//        $movie3->addCategory($catExclusive);
//        $movie3->setTitle('Peaky Blinders');
//        $movie3->setDescription('lorem ipsum');
//        $movie3->setYear(2018);
//        $movie3->setImg('https://occ-0-2507-1433.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABe5HswoEnt177Tub7t7PayOliSGYL0dX1EdgRNNjmIhKPgp8j1vvLpRH7SMK5b-Ts30ZUQyOxue517b35q9nTqW-Cf9SCFuu0GJpkrzS61tEXsNkCgs7ZjgCghrI.jpg?r=aa0');
//        $movie3->setLink("https://www.youtube.com/embed/oVzVdvGIC7U");
//        $movie3->setActive(true);
//
//        $movie4 = new Movie();
//        $movie4->addCategory($catMovies);
//        $movie4->setTitle('Sausage Party');
//        $movie4->setDescription('lorem ipsum');
//        $movie4->setYear(2016);
//        $movie4->setImg('https://occ-0-2507-1433.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABcBVNjOx-bAq34tGLpGCiOkJcY3kdmi2ko_wKidXLeqoN7NuouDu1YakOupwHPl3RZt0BqsMekBMfBfAMwZTuWsqs_8.webp?r=09d');
//        $movie4->setLink("https://www.youtube.com/embed/RDm_jsvksQQ");
//        $movie4->setActive(true);
//
//        $movie5 = new Movie();
//        $movie5->addCategory($catSerials);
//        $movie5->setTitle('Game of Thrones');
//        $movie5->setDescription('lorem ipsum');
//        $movie5->setYear(2011);
//        $movie5->setImg('https://uhdwallpapers.org/uploads/converted/19/03/09/game-of-thrones-8-1600x900_949765-mm-90.jpg');
//        $movie5->setLink("https://www.youtube.com/embed/KPLWWIOCOOQ");
//        $movie5->setActive(true);
//
//        $movie6 = new Movie();
//        $movie6->addCategory($catSerials);
//        $movie6->setTitle('Euforia');
//        $movie6->setDescription('lorem ipsum');
//        $movie6->setYear(2019);
//        $movie6->setImg('https://1.bp.blogspot.com/-w-GVhZnqYME/XU_4jcY8ERI/AAAAAAAAFy8/i5PRr9ZAEm4EpFQKLrRgtgBqR55RulqHgCLcBGAs/s1600/euphoria-s01-1920.jpg');
//        $movie6->setLink("https://www.youtube.com/embed/reeTpPsBFEA");
//        $movie6->setActive(true);
//
//        $movie7 = new Movie();
//        $movie7->addCategory($catMovies);
//        $movie7->setTitle('W cieniu księżyca');
//        $movie7->setDescription('lorem ipsum');
//        $movie7->setYear(2019);
//        $movie7->setImg('https://i.ytimg.com/vi/lsxVvQOtph0/maxresdefault.jpg');
//        $movie7->setLink("https://www.youtube.com/embed/lsxVvQOtph0");
//        $movie7->setActive(true);
//
//        $movie8 = new Movie();
//        $movie8->addCategory($catMovies);
//        $movie8->setTitle('Podziemny krąg');
//        $movie8->setDescription('lorem ipsum');
//        $movie8->setYear(1999);
//        $movie8->setImg('https://wallpapermemory.com/uploads/204/fight-club-wallpaper-hd-1600x900-47738.jpg');
//        $movie8->setLink("https://www.youtube.com/embed/BdJKm16Co6M");
//        $movie8->setActive(true);
//
//        $movie9 = new Movie();
//        $movie9->addCategory($catSerials);
//        $movie9->setTitle('Dark');
//        $movie9->setDescription('lorem ipsum');
//        $movie9->setYear(2020);
//        $movie9->setImg('https://occ-0-2507-1433.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABSEl8LWx4tMJIM9Atm3F1Y49Uq6X01tnDe8gPA6d84-gQ767saz9z7Jxj9sFozuI8bcM2vlxeP9IPq3Aa7jxLlkMu8JGjizRLblNEcmD7g-Z2NeZvkvV5nWF9DmJ.jpg?r=393');
//        $movie9->setLink("https://www.youtube.com/embed/watch?v=GXbR0BR6Q2c");
//        $movie9->setActive(true);
//
//        $movie10 = new Movie();
//        $movie10->addCategory($catSerials);
//        $movie10->setTitle('Miłość, śmierć i roboty');
//        $movie10->setDescription('lorem ipsum');
//        $movie10->setYear(2021);
//        $movie10->setImg('https://occ-0-2507-1433.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABVitvg6x3-xT8ffv-aTxPX69UiCMwE27oct5_OXz3vLBePgN59ZjFjUVwpJ7bhBcj8-FeLeCPQJ0Y_eKR04CPzPPBtnV5Jzo3ATu73Yfz-NPC_snj72y63gKat8u.jpg?r=2de');
//        $movie10->setLink("https://www.youtube.com/embed/watch?v=bFfYF2UKmKg");
//        $movie10->setActive(true);
//
//        $movie11 = new Movie();
//        $movie11->addCategory($catSerials);
//        $movie11->setTitle('Czarne lustro');
//        $movie11->setDescription('lorem ipsum');
//        $movie11->setYear(2019);
//        $movie11->setImg('https://occ-0-2507-1433.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABcMGeOdiKYJBgIZQNlNzy3aXsGwJiyTLURw8d0wdDgQw0XKIBpbpXKYWdPXe7QmDS8rjOZpjRVwwd-3I8CyqGCwlhOa4WvLF2-IVEDjjW-EgCR-lrAJqaGDh5h1s.jpg?r=dbb');
//        $movie11->setLink("https://www.youtube.com/embed/watch?v=HKGaB-jcpAM");
//        $movie11->setActive(true);
//
//        $movie12 = new Movie();
//        $movie12->addCategory($catMovies);
//        $movie12->setTitle('Hobbit');
//        $movie12->setDescription('lorem ipsum');
//        $movie12->setYear(2012);
//        $movie12->setImg('https://occ-0-2507-1433.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABQ_4JE4cMuNaGqzdGO4Ah2PS6vEbWsitj1cZFGL02eQ08EGHGMeLjJ0ffMBQPbMYdxqMApKZW6APPL7DS0IF6PegBe8.webp?r=46f');
//        $movie12->setLink("https://www.youtube.com/embed/watch?v=a_eM_80RveI");
//        $movie12->setActive(true);
//
//        $movie13 = new Movie();
//        $movie13->addCategory($catSerials);
//        $movie13->addCategory($catExclusive);
//        $movie13->setTitle('Kikoriki');
//        $movie13->setDescription('Kikoriki, known in the United States as GoGoRiki or BalloonToons and in Russia as Smeshariki (Russian: Смешарики), is a Russian animated television series consisting of 209 episodes of 6 minutes and 30 seconds each, aimed at children of 3 to 8 years. This series uses flash animation.');
//        $movie13->setYear(2004);
//        $movie13->setImg('https://upload.wikimedia.org/wikipedia/ru/9/92/%D0%A1%D0%BC%D0%B5%D1%88%D0%B0%D1%80%D0%B8%D0%BA%D0%B8_%D0%BF%D0%B5%D1%80%D1%81%D0%BE%D0%BD%D0%B0%D0%B6%D0%B8.png');
//        $movie13->setLink('https://www.youtube.com/embed/watch?v=8Y2YUohY7cE');
//        $movie13->setActive(true);
//
//        //  episodes
//
//        $episodeWitcherS1E1 = new Video();
//        $episodeWitcherS1E1->setName("The End's Beginning");
//        $episodeWitcherS1E1->setDescription("Following Geralt of Rivia's battle with a kikimora in 1231, he enters the town of Blaviken and meets Renfri, a cursed princess-turned-bandit. She is hunted by the wizard Stregobor, who believes her evil for being born during an eclipse. Stregobor lures Geralt to his hideout, seeking to hire him to kill Renfri, but Geralt refuses. Renfri later offers Geralt a counter-proposal, but he refuses with an ultimatum: leave or die. In 1263, Nilfgaard conquers the northern kingdom of Cintra. Princess Cirilla, also known as Ciri, is sent away by her grandmother, Queen Calanthe, to escape and find Geralt. A Nilfgaardian officer Cahir captures Cirilla, but seeing the burning city and castle triggers her powers, allowing her to escape. Renfri feigns agreement, but upon waking up the next morning, Geralt realizes Renfri will not stop until Stregobor is dead, and he rushes to stop her. After killing her men, he fights and fatally wounds Renfri, whose dying words tell of a girl in the forest who is his eternal destiny. Stregobor arrives to take Renfri's body for autopsy. When Geralt opposes, the townsfolk force him to leave, urged on by Stregobor.");
//        $episodeWitcherS1E1->setSeason(1);
//        $episodeWitcherS1E1->setMovie($movie1);
//        $episodeWitcherS1E1->setSource('https://www.youtube.com/embed/E5-fu6ijD8w');
//
//        $episodeWitcherS1E2 = new Video();
//        $episodeWitcherS1E2->setName("Four Marks");
//        $episodeWitcherS1E2->setDescription("In 1206, hunchback Yennefer from Vengerberg of Aedirn is sold to Tissaia de Vries by her father. She is taken to Aretuza for training in magic, but finds the practice difficult. She forms a friendship with Istredd, even revealing her quarter-elf heritage, which caused her deformity. Unbeknownst to either, Tissaia and Stregobor were using Yennefer and Istredd respectively to spy on each other. Later, Yennefer witnesses Tissaia turning three students into eels to act as conduits powering Aretuza with magic. In 1240, Geralt is hired to investigate grain thefts in Posada and is followed by Jaskier the bard. They encounter a Sylvan named Torque, who knocks them unconscious and takes them to his mountain cave. There, Geralt meets Filavandrel, the elven king, and urges he lead his people to better lands after being banished by the humans. Instead of killing them, Filavandrel frees Geralt and Jaskier, taking the witcher's words to heart. In 1263, Cirilla encounters Dara, a boy in the woods, who guides her to a refugee camp. Dara returns to save her when the camp is attacked by Cahir's forces; she later realizes Dara is an elf.");
//        $episodeWitcherS1E2->setSeason(1);
//        $episodeWitcherS1E2->setMovie($movie1);
//        $episodeWitcherS1E2->setSource('https://www.youtube.com/embed/McBr9-w2ZKQ');
//
//        $episodeWitcherS2E1 = new Video();
//        $episodeWitcherS2E1->setName("A Grain of Truth");
//        $episodeWitcherS2E1->setDescription("On the battlefield after the victory of the Northern Kingdoms, Geralt and Ciri encounter Tissaia who tells them that Yenn is dead. Traveling with Ciri, Geralt stops to visit his friend Nivellen and discover he has been cursed into a beast. Geralt investigates the nearby village and determines that a Bruxa, a vampire, caused the villagers to flee. He returns and sees the Bruxa drinking Nivellen's blood. Geralt fights and kills it, which lifts Nivellen's curse. Nivellen reveals he loved the Bruxa and did nothing to stop her from attacking the village. Nivellen begs Geralt to kill him, but Geralt refuses. In Aretuza, Tissaia tortures Cahir for information on Nilfgaard. Fringilla has taken Yennefer captive and is heading towards Cintra, but their party is ambushed on the road. Based on A Grain of Truth from The Last Wish");
//        $episodeWitcherS2E1->setSeason(2);
//        $episodeWitcherS2E1->setMovie($movie1);
//        $episodeWitcherS2E1->setSource('https://www.youtube.com/embed/x4osGy35QYg');
//
//        $episodeWitcherS2E2 = new Video();
//        $episodeWitcherS2E2->setName("Kaer Morhen");
//        $episodeWitcherS2E2->setDescription("Yennefer and Fringilla are captured by Filavandrel, who takes them to elven sorceress Francesca Findabair. Francesca wants them killed but Filavandrel argues they are useful in these woods, which are human. The elves are digging near a ruined monolith under the order of Francesca, who is having visions of a white-robed figure she believes is the elven prophet Ithlinne. Yennefer and Fringilla also dream of robed figures, red and black, respectively. They tell Filavandrel their dreams and suggest they might be able to help the elves; Filavandrel is considering this when the elves find something. A tunnel leads to an altar inscribed with an incantation. Yennefer recites the incantation and the altar opens to reveal a passage leading to a magic hut in a forest. The three sorceresses are visited by the Deathless Mother, a mysterious being who takes on a different form for each -- Yennefer sees a younger Tissaia, Fringilla sees Emperor Emhyr, and Francesca sees Ithlinne -- and reveals the path each must take to achieve their greatest desire. The sorceresses are released. Fringilla joins Francesca to form an elven-Nilfgaardian alliance; Yennefer calls them fools and attempts to open a portal only to discover she has lost her magic. Geralt and Ciri join the remaining witchers at Kaer Morhen. Eskel arrives late, carrying the severed hand of a leshy. The witchers are partying when their medallions start vibrating, indicating a monster is near. Geralt discovers Eskel was infected by the leshy and has been transformed into one, which should be impossible. Eskel says he returned seeking help, but he is unable to control the leshy side and attacks Vesemir, forcing Geralt to kill him. Realizing Kaer Morhen is not safe, Geralt agrees to train Ciri in combat.");
//        $episodeWitcherS2E2->setSeason(2);
//        $episodeWitcherS2E2->setMovie($movie1);
//        $episodeWitcherS2E2->setSource('https://www.youtube.com/embed/kTVgjtKc414');
//
//
//
//
//
//        $manager->persist($movie1);
//        $manager->persist($movie2);
//        $manager->persist($movie3);
//        $manager->persist($movie4);
//        $manager->persist($movie5);
//        $manager->persist($movie6);
//        $manager->persist($movie7);
//        $manager->persist($movie8);
//        $manager->persist($movie9);
//        $manager->persist($movie10);
//        $manager->persist($movie11);
//        $manager->persist($movie12);
//        $manager->persist($movie13);
//
//        $manager->persist($episodeWitcherS1E1);
//        $manager->persist($episodeWitcherS1E2);
//        $manager->persist($episodeWitcherS2E1);
//        $manager->persist($episodeWitcherS2E2);


        $manager->persist($catExclusive);
        $manager->persist($catSerials);
        $manager->persist($catMovies);
        $manager->persist($catNew);
        $manager->flush();

        $manager->flush();

        $manager->flush();
    }
}