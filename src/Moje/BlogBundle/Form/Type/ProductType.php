<?php

namespace Moje\BlogBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text')
            ->add('price', 'integer')
            ->add('description', 'text')
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
        return 'product';
    }
}