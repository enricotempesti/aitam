<?php

namespace Aitam\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Aitam\IndexBundle\Entity\Enquiry;
use Aitam\IndexBundle\Form\EnquiryType;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('AitamIndexBundle:Page:index.html.twig');
    }
    
    public function contactAction()
    {
    $enquiry = new Enquiry();
    $form = $this->createForm(new EnquiryType(), $enquiry);

    $request = $this->getRequest();
    if ($request->getMethod() == 'POST') {
        $form->bindRequest($request);

        if ($form->isValid()) {
            // Perform some action, such as sending an email

            // Redirect - This is important to prevent users re-posting
            // the form if they refresh the page
            return $this->redirect($this->generateUrl('AitamIndexBundle_contact'));
        }
    }

    return $this->render('AitamIndexBundle:Page:contact.html.twig', array(
        'form' => $form->createView()
    ));
    }
}