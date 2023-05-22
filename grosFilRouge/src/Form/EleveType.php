<?php

namespace App\Form;

use App\Entity\Eleve;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Type;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class EleveType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_eleve', TextType::class, [
                'attr' => [
                    'class' => 'w-50  d-flex justify-content-center form-control m-5',
                    'minlenght' => '2',
                    'maxlenght' => '255',
                ],                
                // 'label_attr' =>[
                //     'class' => 'form-label d-flex justify-content-center fs-4'
                // ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'entrez votre nom'
                    ]),
                    new Length([
                    'min' => 2,
                    'max' => 255,
                    'minMessage'=>"votre nom est trop court",
                    'maxMessage' => "votre nom est trop long"])
                    ],
                    'label_attr'=> [
                        'class'=> 'input-group-text w-50 d-flex justify-content-center'
                    ],
                    'row_attr'=> [
                        'class'=> 'input-group-text-2'
                    ]
            ])
            ->add('prenom_eleve', TextType::class, [
                'attr' => [
                    'class' => 'w-50  d-flex justify-content-center form-control m-5',
                    'minlenght' => '2',
                    'maxlenght' => '255'
                ],                
                'label_attr' =>[
                    'class' => 'form-label'
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'entrez votre prénom'
                    ]),
                    new Length([
                    'min' => 2,
                    'max' => 255,
                    'minMessage'=>"votre prénom est trop court",
                    'maxMessage' => "votre prénom est trop long"])
                    ],
                    'label_attr'=> [
                        'class'=> 'input-group-text w-50 d-flex justify-content-center'
                    ],
                    'row_attr'=> [
                        'class'=> 'input-group-text-2'
                    ]
            ])
            ->add('email_eleve', EmailType::class, [
                'attr' => [
                    'class' => 'w-50  d-flex justify-content-center form-control m-5',
                    'minlenght' => '2',
                    'maxlenght' => '180'
                ],
                'label_attr' =>[
                    'class' => 'form-label'
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'entrez votre mail'
                    ]),
                    new Email(),
                    new Length([
                    'min' => 2,
                    'max' => 180,
                    'minMessage'=>"votre mail est trop court",
                    'maxMessage' => "votre mail est trop long"])
                    ],
                    'label_attr'=> [
                        'class'=> 'input-group-text w-50 d-flex justify-content-center'
                    ],
                    'row_attr'=> [
                        'class'=> 'input-group-text-2'
                    ]
            ])
            ->add('telephone_eleve', TelType::class, [
                'attr' => [
                    'class' => 'w-50  d-flex justify-content-center form-control m-5',
                    'placeholder' => '+33642595959'                    
                ],
                // 'label_attr' => [
                //     'class' => 'form-label'
                // ],            
                'constraints' => [
                    new NotBlank([
                        'message' => 'entrez votre numéro de téléphone',
                    ]),
                    new Length([
                        'min' => 11,                        
                        'max' => 12,
                        'minMessage'=>"Entrez un numéro de téléphone valide",
                        'maxMessage'=>"Entrez un numéro de téléphone valide"
                    ]),
                    new Type([
                        'type' => 'numeric',
                        'message' => "Entrez un numéro de téléphone valide"
                    ])
                ],
                'label_attr'=> [
                    'class'=> 'input-group-text w-50 d-flex justify-content-center'
                ],
                'row_attr'=> [
                    'class'=> 'input-group-text-2'
                ]
            ])
            ->add('sexe_eleve', ChoiceType::class, [
                'choices' => [
                    'Homme' => "Homme",
                    'Femme' => 'Femme'
                ],
                'attr' => [
                    'class' => 'btn btn-primary btn-sm dropdown-toggle w-50  d-flex justify-content-center form-control m-5 '                    
                ],
                'label_attr'=> [
                    'class'=> 'input-group-text w-50 d-flex justify-content-center'
                ],
                'row_attr'=> [
                    'class'=> 'input-group-text-2'
                ]
                ])
            ->add('niveau_etude', TextType::class, [
                'attr' => [
                    'class' => 'w-50  d-flex justify-content-center form-control m-5',
                    'minlenght' => '2',
                    'maxlenght' => '255'
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'entrez votre niveau'
                    ]),
                    new Length([
                    'min' => 2,
                    'max' => 255,
                    'minMessage'=>"c'est trop court",
                    'maxMessage' => "c'est trop long"])
                    ],
                    'label_attr'=> [
                        'class'=> 'input-group-text w-50 d-flex justify-content-center'
                    ],
                    'row_attr'=> [
                        'class'=> 'input-group-text-2'
                    ]
            ])
            ->add('metier_exerce', TextType::class, [
                'attr' => [
                    'class' => 'w-50  d-flex justify-content-center form-control m-5',
                    'minlenght' => '2',
                    'maxlenght' => '255'
                ],                
                'label_attr' =>[
                    'class' => 'form-label'
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'entrez votre dernier métier exercé'
                    ]),
                    new Length([
                    'min' => 2,
                    'max' => 255,
                    'minMessage'=>"c'est trop court",
                    'maxMessage' => "c'est trop long"])
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
            'data_class' => Eleve::class,
        ]);
    }
}
