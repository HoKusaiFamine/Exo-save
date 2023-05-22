<?php

namespace App\Form;

use App\Entity\Eleve;
use App\Entity\Seances;
use App\Entity\Presence;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class PresenceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder            
            ->add('validation_presence', ChoiceType::class, [
                'choices' => [
                    'absent' => 0,
                    'présent' => 1,
                    'absence justifiée' => 2
                ],
                'attr'=>[
                    'class'=> 'btn btn-primary btn-sm dropdown-toggle w-50  d-flex justify-content-center form-control '
                ],
                'label_attr'=> [
                    'class'=> 'input-group-text w-50 d-flex justify-content-center'
                ],
                'row_attr'=> [
                    'class'=> 'input-group-text-2 w-200'
                ]
            ])
            ->add('eleve', EntityType::class, [
                'class' => Eleve::class,
                'choice_label' => 'nom_complet',
                'label' => 'éléve concerné',
                'label_attr' => [
                    'class' => ' input-group-text w-50 d-flex justify-content-center '
                ],
                'attr' => [
                    'class' => 'input-group-text btn btn-outline-primary  mx-auto'                    
                ],
                'row_attr'=> [
                    'class'=> 'input-group-text-2 w-200'
                ]
                ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Presence::class,
        ]);
    }
}
