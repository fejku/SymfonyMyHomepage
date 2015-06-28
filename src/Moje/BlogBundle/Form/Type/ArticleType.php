<?php

namespace Moje\BlogBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', 'text')
            ->add('content', 'text')
            ->add('image_address', 'text')
            ->add('save', 'submit')
        ;
    }

    public function getName()
    {
        return 'article';
    }
}