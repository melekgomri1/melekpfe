<?php

namespace App\Form;

use App\Entity\Address;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name',TextType::class,[
                'label' =>'Quel nom souhaitez-vous donner a votre adresse ?',
                'attr' =>[
                    'placeholder'=>'nommez votre address'
                ]
            ])
            ->add('firstname',TextType::class,[
                'label' =>'votr prenom',
                'attr' =>[
                    'placeholder'=>'entrer votre prenom '
                ]
            ])
            ->add('lastname',TextType::class,[
                'label' =>'votre nom ',
                'attr' =>[
                    'placeholder'=>'enter votre nom'
                ]
            ])
            ->add('company',TextType::class,[
                'label' =>'votre societé',
                'attr' =>[
                    'placeholder'=>'(facultatif) enterer votre socité'
                ]
            ])
            ->add('address',TextType::class,[
                'label' =>'Votre address',
                'attr' =>[
                    'placeholder'=>'05 nahej borej khadija'
                ]
            ])
            ->add('postal',TextType::class,[
                'label' =>'Votre code postal ',
                'attr' =>[
                    'placeholder'=>'Entrer votre code postal'
                ]
            ])
            ->add('city',TextType::class,[
                'label' =>'Votre ville ',
                'attr' =>[
                    'placeholder'=>'Entrer votre ville'
                ]
            ])
            ->add('country',CountryType::class,[
                'label' =>'Pays',
                'attr' =>[
                    'placeholder'=>'Entrer votre pays'
                ]
            ])
            ->add('phone',TelType::class,[
                'label' =>'Votre telephone',
                'attr' =>[
                    'placeholder'=>'Entrer Votre telephone'
                ]
            ])
            ->add('submit',SubmitType::class,[
                'label'=> 'Valider',
                'attr' =>[
                    'class'=>'btn-block btn-info']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Address::class,
        ]);
    }
}
