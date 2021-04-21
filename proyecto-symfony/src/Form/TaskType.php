<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;



class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('title', TextType::class, array(
            'label' => 'Titulo'
        ))
            ->add('content', TextareaType::class, array(
                'label' => 'Contenido'
            ))
            ->add('priority', ChoiceType::class, array(
                'label' => 'Prrioridad',
                'choices' => array(
                    'Alta' => 'high',
                    'Media' => 'medium',
                    'Baja' => 'low'
                )
            ))
            ->add('hours', TextType::class, array(
                'label' => 'Horas'
            ))
            ->add('submit', SubmitType::class, array(
                'label' => 'Guardar'
            ));
    }
}
