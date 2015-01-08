<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    /**
     * @Route("/module/contact/", name="contactpage")
     * @Route("/module/contact/{index}", name="contactpage_id")
     * @Route("/module/contact/{index}/{second}/{coreana}", name="contactpage_id2")
     */
    public function indexAction( $index = null , $second = null , $coreana = null )
    {
    	print $index . "<hr>" ;
    	print $second . "<hr>" ;
    	print $coreana . "<hr>" ;
    	
        return $this->render('contact/index.html.twig');
    }
    
    /**
     * Método para pessoal iniciante = eu
     */
    public function newAction()
    {
    	exit( "Coisa diferente?!" ) ;
    }
}
