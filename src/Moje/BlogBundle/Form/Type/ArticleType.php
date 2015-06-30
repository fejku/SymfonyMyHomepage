<?php

namespace Moje\BlogBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', 'text', array(
                'label' => 'Tytul'
            ))
            ->add('content', 'text')
            ->add('image_address', 'text')
            ->add('tags', 'collection', array(
                'type' => new TagType(),
                'prototype' => true,
                'allow_add'    => true,
            ))
            ->add('save', 'submit')
        ;
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Moje\BlogBundle\Entity\Article',
        ));
    }

    public function getName()
    {
        return 'article';
    }
}