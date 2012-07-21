<?php
// src/Blogger/BlogBundle/Entity/Enquiry.php

namespace Aitam\IndexBundle\Entity;


use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\MinLength;
use Symfony\Component\Validator\Constraints\MaxLength;

class Enquiry
{
    protected $name;

    protected $email;

    protected $subject;

    protected $body;
    
    protected $web;
    
    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
    	$metadata->addPropertyConstraint('name', new NotBlank());
    
    	$metadata->addPropertyConstraint('email', new Email());
    	$metadata->addPropertyConstraint('email', new Email(array(
    			'message' => 'inserisci un email valido'
    	)));
    	
    	$metadata->addPropertyConstraint('web', new NotBlank());
    	$metadata->addPropertyConstraint('web', new MaxLength(30));
    
    	$metadata->addPropertyConstraint('subject', new NotBlank());
    	$metadata->addPropertyConstraint('subject', new MaxLength(30));
    
    	$metadata->addPropertyConstraint('body', new MinLength(array('limit' => '50',
    			'message' => 'messaggio troppo corto,deve superare i 50 caratteri'
    	)));
    }
    
    public function getWeb()
    {
    	return $this->web;
    }
    
    public function setWeb($web)
    {
    	$this->web = $web;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }
}