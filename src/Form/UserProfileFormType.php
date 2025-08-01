<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserProfileFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstName', TextType::class, [
                'label' => 'Prénom :',
                'attr' => [
                    'readonly' => true,
                ],
            ])
            ->add('lastName', TextType::class, [
                'label' => 'Nom :',
                'attr' => [
                    'readonly' => true,
                ],
            ])
            ->add('email', TextType::class, [
                'label' => 'Email :',
                'attr' => [
                    'readonly' => true,
                ],
            ])
            ->add('phoneNumber', TextType::class, [
                'label' => 'Numéro de téléphone :',
                'required' => false,
                'attr' => [
                    'readonly' => true,
                ],
            ])
            ->add('address', TextType::class, [
                'label' => 'Adresse :',
                'required' => false,
                'attr' => [
                    'readonly' => true,
                ],
            ])
            ->add('city', TextType::class, [
                'label' => 'Ville :',
                'required' => false,
                'attr' => [
                    'readonly' => true,
                ],
            ])
            ->add('zipCode', TextType::class, [
                'label' => 'Code postal :',
                'required' => false,
                'attr' => [
                    'readonly' => true,
                ],
            ])
            ->add('complementaryAddress', TextType::class, [
                'label' => 'Complément d\'adresse :',
                'required' => false,
                'attr' => [
                    'readonly' => true,
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
