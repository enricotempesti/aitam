<?php

namespace Aitam\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Dinuovo controller.
 */
class DinuovoController extends Controller
{
    /**
     * Show a dinuovo entry
     */
    public function DinuovoAction($id,$slug)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $dinuovo = $em->getRepository('AitamIndexBundle:Dinuovo')->find($id);

      if (!$dinuovo) {
        throw $this->createNotFoundException('Unable to find Blog post.');
        }

         $commenti = $em->getRepository('AitamIndexBundle:Commenti')
                   ->getCommentiForarticolo($dinuovo->getId());

        return $this->render('AitamIndexBundle:Dinuovo:dinuovo_show.html.twig', array(
            'dinuovo' => $dinuovo,
            'commenti'  => $commenti
        ));
    }
    
    public function home_dinuovoAction()
    {
    	$em = $this->getDoctrine()
    	->getEntityManager();
    
    	$dinuovo = $em->getRepository('AitamIndexBundle:Dinuovo')
    	->getLatestDinuovo();
    
    	return $this->render('AitamIndexBundle:Dinuovo:home_dinuovo.html.twig', array(
    			'dinuovo' => $dinuovo
    	));
    }
    
}
