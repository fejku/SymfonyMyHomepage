<?php

namespace Moje\BlogBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class WpisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tytul', 'text')
            ->add('tresc', 'text')
            ->add('obrazek', 'text')
            ->add('save', 'submit', array(
                'attr' => array(
//                        'formnovalidate' => 'formnovalidate',
                        'class' => 'mySubmitButton'
                )
            ))
        ;
    }

    public function getName()
    {
        return 'wpis';
    }
}