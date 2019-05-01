<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

use App\Entity\Monstre;
use App\Entity\Classe;
use App\Entity\Race;
use App\Entity\Element;
use App\Entity\Habitat;

use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\IsTrue;

class AddMonstreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class)
            ->add('description', TextareaType::class)
            ->add('photo', FileType::class)

            ->add('race', EntityType::class, [
                // looks for choices from this entity
                'class' => Race::class,
            
                // uses the User.username property as the visible option string
                'choice_label' => 'nom',
            
                // used to render a select box, check boxes or radios
                'multiple' => true,
                'expanded' => false,
            ])
            // ->add('race', ChoiceType::class, [
            //     'choices' => 
            //     [
            //         'Monstre' => 1,
            //         'Humanoïde' => 2,
            //         'Chimère' => 3,
            //         'Dragon' => 4,
            //         'Créature légendaire' => 5,
            //         'Mort-vivant' => 6,
            //         'Démon' => 7
            //     ],
            // ])
            ->add('classe', EntityType::class, [
                'class' => Classe::class,
                'choice_label' => 'nom',
                'multiple' => true,
                'expanded' => false,
            ])
            // ->add('classe', ChoiceType::class, [
            //     'choices' => [
            //         'Equilibré' => 1,
            //         'Tank' => 2,
            //         'Cac' => 3,
            //         'Speed' => 4,
            //         'Caster' => 5,
            //         'Berseker' => 6,
            //         'Mage' => 7
            //     ]
            // ])
            // element choix
            ->add('element', EntityType::class, [
                'class' => Element::class,
                'choice_label' => 'nom',
                'multiple' => true,
                'expanded' => false,
            ])
            // ->add('element', ChoiceType::class, [
            //     'choices' => 
            //     [
            //         'Feu' => 1,
            //         'Terre' => 2,
            //         'Eau' => 3,
            //         'Air' => 4,
            //         'Ténèbres' => 5,
            //         'Lumières' => 6,
            //         'Glace' => 7,
            //         'Foudre' => 8
            //     ],
            // ])
            ->add('habitat', EntityType::class, [
                'class' => Habitat::class,
                'choice_label' => 'nom',
                'multiple' => true,
                'expanded' => false,
            ])
            // ->add('habitat', ChoiceType::class, [
            //     'choices' =>
            //     [
            //         'volcans' => 1,
            //         'plaines' => 2,
            //         'forêts' => 3,
            //         'montagnes' => 4,
            //         'marais' => 5,
            //         'océan' => 6,
            //         'cieux' => 7,
            //     ]
            // ])
            ->add('termsAccepted', CheckboxType::class, [
                'mapped' => false,
                'constraints' => new IsTrue(),
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Monstre::class,
        ]);
    }
}
