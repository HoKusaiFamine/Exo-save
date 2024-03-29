<?php

namespace App\Form;

use App\Entity\Cours;
use DateTime;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Positive;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class CoursUpdateType extends AbstractType
{
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
        
            //nombre max élèves
            ->add('max_eleves', NumberType::class, [                
                'label' => "Nombre max d'élèves",
                'label_attr' => [
                    'class' => 'form-label d-flex justify-content-center fs-4'
                ],
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => '10'                    
                ],
                'invalid_message' => 'entrer un nombre positif',
                'constraints' => [                
                    new Positive([
                        'message' => 'entrez un nombre positif'
                    ]),                                    
                ],
                'label'=> ' ',
            ])
            
            
            //description
            ->add('description', TextareaType::class, [
                'label' => "Description du cours",
                'label_attr' => [
                    'class' => 'form-label d-flex justify-content-center fs-4'
                ],
                'attr' => [
                    'class' => 'form-control',                                       
                ],
                'label'=> ' ',
                'invalid_message' => 'entrer le descriptif du cours',
            ])
            
            
            //libelle
            ->add('libelle', TextType::class, [
                'label' => 'Libellé',
                'label_attr' => [
                    'class' => 'form-label d-flex justify-content-center fs-4'
                ],
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Français'                                       
                ],
                'invalid_message' => 'entrer le libelle du cours',
                'constraints' => [
                    new Length([
                        'max' => 255,
                        'maxMessage' => "le libelle ne doit pas excéder 255 caractères"
                    ])
                    ],
                    'label'=> ' ',
            ])
            
            
            //heure du début
            ->add('heure_debut', TimeType::class, [
                
                'label' => 'Heure du début du cours',
                'label_attr' => [
                    'class' => 'form-label  d-flex justify-content-center fs-4',
                ], 
                'label'=> ' ',               
                //modification du des dropdown menu en attente
                // 'widget' => 'choice'
            ])
            
            
            //heure de fin
            ->add('heure_fin', TimeType::class, [
                'label' => 'Heure de fin du cours',
                'label_attr' => [
                    'class' => 'form-label  d-flex justify-content-center fs-4'
                ],
                'label'=> ' ',              
                //modification du des dropdown menu en attente
            ]);
            
            
            

            // Si l'utilisateur connecté est un administrateur, affichez un menu déroulant pour sélectionner le professeur
            if ($this->security->isGranted('ROLE_ADMIN')) {
                $builder->add('utilisateur', EntityType::class, [
                    'class' => 'App\Entity\Utilisateur',
                    'choice_label' => 'nom_utilisateur',
                    'label' => 'Professeur en charge du cours',
                    'label_attr' => [
                        'class' => 'form-label d-flex justify-content-center fs-4'
                    ],
                    'attr' => [
                        'class' => 'btn btn-outline-primary dropdown-toggle mx-auto'                    
                    ],
                    'label'=> ' ',
                ]);
            } else {
                // Si l'utilisateur connecté est un professeur, récupérez son id pour l'associer au cours
                $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
                $form = $event->getForm();
                $cours = $event->getData();

                if (!$cours || null === $cours->getId()) {
                    $professeur = $this->security->getUser();
                    $cours->setUtilisateur($professeur);
                }
            });
            }
            
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cours::class,
        ]);
    }
    
}
