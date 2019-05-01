<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class PPCType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('choix', ChoiceType::class, 
        [
            'choices'  => 
            [
                'pierre' => 1,
                'papier' => 2,
                'ciseaux' => 3,
            ], 
            'expanded' => true
       
        ])
        ;
        // ->add('image','choice',array
        // (
        //     'choices'=>array(
        //         'image1'=>'image1'
        //         ,'image2'=>'image2'
        //     )
        //     ,  'expanded' => true
        //     ,   'multiple' => false
        //     , 'attr'=>array('class'=>'class_image'),
        // ));
        // ->add('Submit',SubmitType::class);;
        // 
        
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
