<?php

namespace Aitam\IndexBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CommentiType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('utente')
            ->add('commenti')
        ;
    }

    public function getName()
    {
        return 'aitam_indexbundle_commentitype';
    }
}
