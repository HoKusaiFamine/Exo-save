<?php

namespace App\Form;

use App\Entity\Seances;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class SeancesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            //Heure du début
            ->add('heure_debut', TimeType::class, [
                'label' => 'Heure du début',
                'attr' => [
                    'class'=> 'w-50 d-flex justify-content-center'
                ],
                'label_attr'=> [
                    'class'=> 'input-group-text w-50 d-flex justify-content-center'
                ],
                'row_attr'=> [
                    'class'=> 'input-group-text-2'
                ]

            ])
            //Heure de fin
            ->add('heure_fin', TimeType::class, [
                'label' => 'Heure de fin',
                'attr' => [
                    'class'=> 'w-50 d-flex justify-content-center'
                ],
                'label_attr'=> [
                    'class'=> 'input-group-text w-50 d-flex justify-content-center'
                ],
                'row_attr'=> [
                    'class'=> 'input-group-text-2'
                ]
            ])
            //Date de la séance            
            ->add('date', DateType::class,[
                'format' => 'dd-MM-yyyy',
                'attr' => [
                    'class'=> 'w-50 d-flex justify-content-center'
                ],
                'label_attr'=> [
                    'class'=> 'input-group-text w-50 d-flex justify-content-center'
                ],
                'row_attr'=> [
                    'class'=> 'input-group-text-2'
                ]
            ])
            //description du cours
            ->add('description', TextareaType::class, [
                'label' => 'Description du cours',
                'invalid_message' => 'entrer le descriptif du cours',
                'attr' => [
                    'class'=> 'w-50 d-flex justify-content-center'
                ],
                'label_attr'=> [
                    'class'=> 'input-group-text w-50 d-flex justify-content-center'
                ],
                'row_attr'=> [
                    'class'=> 'input-group-text-2'
                ]
            ])
            //libelle du cours
            ->add('libelle', TextType::class, [
                'label' => 'Libellé',
                'invalid_message' => 'entrer le libelle du cours', 
                'constraints' => [
                    new Length([
                        'max' => 255, 
                        'maxMessage' => "le libellé ne doit pas excéder 255 caractères"
                    ])
                ],
                'attr' => [
                    'class'=> 'w-50 d-flex justify-content-center'
                ],
                'label_attr'=> [
                    'class'=> 'input-group-text w-50 d-flex justify-content-center'
                ],
                'row_attr'=> [
                    'class'=> 'input-group-text-2'
                ] 
            ])            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Seances::class,
        ]);
    }
}
