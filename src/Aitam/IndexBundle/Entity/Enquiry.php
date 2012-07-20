<?php
// src/Blogger/BlogBundle/Entity/Enquiry.php

namespace Aitam\IndexBundle\Entity;

class Enquiry
{
    protected $name;

    protected $email;

    protected $subject;

    protected $body;
    
    protected $web;
    
    public function getWeb()
    {
    	return $this->web;
    }
    
    public function setWeb()
    {
    	return $this->web;
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