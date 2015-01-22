<?php

namespace Acme\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Acme\StoreBundle\Document\Client;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }
    
    /**
     * #####Route("/app/client", name="clientpage")
     */
    public function createAction()
    {
    	$client = new Client();
    	$client->setName( 'A Foo Bar' );
    	$client->setAddress( "Rua X, 555 - São Paulo" ) ;
    
    	$dm = $this->get( 'doctrine_mongodb' )->getManager() ;
    	$dm->persist( $client ) ;
    	$dm->flush() ;
    
    	return new Response( 'Created client id ' . $client->getId() ) ;
    }
    
    /**
     * ####Route("/app/client/{id}", name="clientpagedetail")
     */    
    public function showAction( $id )
    {
    	$product = $this->get('doctrine_mongodb')
    	->getRepository('AcmeStoreBundle:Client')
    	->find( $id ) ;
    
    	if (!$product) {
    		throw $this->createNotFoundException('No client found for id '.$id);
    	}
    
    	// do something, like pass the $product object into a template
    	return new Response( $this->print_pre( $product ) ) ;
    }
    
    private function print_pre( $l ){
    	print "\n<pre>\n" ;
    	print_r( $l ) ;
    	print "\n</pre>\n" ;
    }
}
