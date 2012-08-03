<?php

namespace Aitam\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Aitam\IndexBundle\Entity\Commenti;
use Aitam\IndexBundle\Form\CommentiType;

/**
 * Commenti controller.
 */
class CommentiController extends Controller
{
    public function newAction($dinuovo_id)
    {
        $dinuovo = $this->getdinuovo($dinuovo_id);

        $commenti = new Commenti();
        $commenti->setArticolo($dinuovo);
        $form   = $this->createForm(new CommentiType(), $commenti);

        return $this->render('AitamIndexBundle:Commenti:form.html.twig', array(
            'commenti' => $commenti,
            'form'   => $form->createView()
        ));
    }

    public function createAction($dinuovo_id)
    {
        $dinuovo = $this->getDinuovo($dinuovo_id);

        $commenti  = new Commenti();
        $commenti->setArticolo($dinuovo);
        $request = $this->getRequest();
        $form    = $this->createForm(new CommentiType(), $commenti);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()
                       ->getEntityManager();
            $em->persist($commenti);
            $em->flush();

            return $this->redirect($this->generateUrl('AitamIndexBundle_dinuovo_show', array(
                'id' => $commenti->getarticolo()->getId(),
                'slug'  => $commenti->getArticolo()->getSlug())) .
                '#commenti-' . $commenti->getId()
            );

        }

        return $this->render('AitamIndexBundle:Commenti:create.html.twig', array(
            'commenti' => $commenti,
            'form'    => $form->createView()
        ));
    }

    protected function getDinuovo($dinuovo_id)
    {
        $em = $this->getDoctrine()
                    ->getEntityManager();

        $dinuovo = $em->getRepository('AitamIndexBundle:dinuovo')->find($dinuovo_id);

        if (!$dinuovo) {
            throw $this->createNotFoundException('Unable to find Blog post.');
        }

        return $dinuovo;
    }

}