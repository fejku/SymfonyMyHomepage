<?php

namespace Moje\BlogBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class CommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('author', 'text')
            ->add('content', 'text')
            ->add('save', 'submit')
        ;
    }

    public function getName()
    {
        return 'comment';
    }
}