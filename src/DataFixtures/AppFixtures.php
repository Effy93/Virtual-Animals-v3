<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;

class AppFixtures extends Fixture
{

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $user = new User();
        $user->setPassword($this->passwordEncoder->encodePassword($user, 'password_admin'));
        $user->setEmail('master@mail.fr');
        $user->setRoles(array('ROLE_ADMIN'));
        $manager->persist($user);

        $user = new User();
        $user->setPassword($this->passwordEncoder->encodePassword($user, 'password_admin'));
        $user->setEmail('master@mail.fr');
        $user->setRoles(array('ROLE_DESIGNER'));
        $manager->persist($user);

        $manager->flush();
    }
}
