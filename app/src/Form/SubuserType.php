<?php

namespace App\Form;

use App\Entity\Subuser;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SubuserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
//        $currentUser = $this->getUser();
//
//        $subuser = new Subuser();
//        $subuser->setName("Nowy profil");
//        $subuser->setAvatar("https://i.imgur.com/9nWtdiZ.png");
//        $subuser->setSubaccountOf($currentUser);

//        $form = $this->createFormBuilder($subuser)
//            ->add('name', TextType::class)
//            ->add('avatar', TextType::class)
//            ->add('save', SubmitType::class, ['label' => 'Stwórz profil'])
//            ->getForm();

        $builder
            ->add('name', TextType::class)
            ->add('avatar', TextType::class)
            ->add('subaccountOf', EntityType::class, [
                'class' => User::class
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Subuser::class,
        ]);
    }


}