<?php

namespace Acme\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Component\Security\Core\Exception\AccessDeniedException;


use Symfony\Component\HttpFoundation\Response;

class ApplicationController extends Controller
{	
	protected function check_authenticated() {
		if ( false === $this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY') ) {
			 throw new AccessDeniedException();
		}
	}
	
	/**
	 * @Template()
	 */
    public function indexAction()
    {
    	// Autenticado
    	$this->check_authenticated();
    	
    	return $this->render('application/index.html.twig');
    }
}
