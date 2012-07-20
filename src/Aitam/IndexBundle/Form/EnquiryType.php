<?php
// src/Blogger/BlogBundle/Form/EnquiryType.php

namespace Aitam\IndexBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class EnquiryType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('name');
        $builder->add('email', 'email');
        $builder->add('web');
        $builder->add('subject');
        $builder->add('body', 'textarea');
    }

    public function getName()
    {
        return 'contact';
    }
}