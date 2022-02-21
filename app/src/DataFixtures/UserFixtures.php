<?php

namespace App\DataFixtures;


use App\Entity\Subuser;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class UserFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager)
    {
        $admin = new User();
        $admin->setEmail('admin@gmail.com');
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setPassword($this->passwordHasher->hashPassword($admin, 'admin'));

        $adminSub1 = new Subuser();
        $adminSub1->setName('Default');
        $adminSub1->setSubaccountOf($admin);
        $adminSub1->setAvatar('https://i.imgur.com/9nWtdiZ.png');

        $user = new User();
        $user->setEmail('user@gmail.com');
        $user->setRoles(['ROLE_USER']);
        $user->setPassword($this->passwordHasher->hashPassword($user, 'user'));

        $userSub1 = new Subuser();
        $userSub1->setName('Default');
        $userSub1->setSubaccountOf($user);
        $userSub1->setAvatar('https://i.imgur.com/9nWtdiZ.png');

        $manager->persist($admin);
        $manager->persist($adminSub1);

        $manager->persist($user);
        $manager->persist($userSub1);

        $manager->flush();
    }
}
