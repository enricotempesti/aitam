<?php

namespace Aitam\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('AitamIndexBundle:Page:index.html.twig');
    }
}