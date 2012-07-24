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
    public function DinuovoAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $dinuovo = $em->getRepository('AitamIndexBundle:dinuovo')->find($id);

        if (!$dinuovo) {
            throw $this->createNotFoundException('Unable to find Dinuovo post.');
        }

        return $this->render('AitamIndexBundle:Dinuovo:dinuovo.html.twig', array(
            'dinuovo' => $dinuovo,
        ));
    }
    
    public function home_dinuovoAction()
    {
    	$em = $this->getDoctrine()
    	->getEntityManager();
    
    	$dinuovo = $em->createQueryBuilder()
    	->select('b')
    	->from('AitamIndexBundle:dinuovo',  'b')
    	->addOrderBy('b.created', 'DESC')
    	->getQuery()
    	->getResult();
    
    	return $this->render('AitamIndexBundle:Dinuovo:home_dinuovo.html.twig', array(
    			'dinuovo' => $dinuovo
    	));
    }
}
