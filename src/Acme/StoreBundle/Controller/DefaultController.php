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
     * @Route("/client/{name}")
     * @Template()
     */
    public function createAction()
    {
    	$client = new Client();
    	$client->setName( 'A Foo Bar' );
    	$client->setAddress( "Rua X, 555 - São Paulo" ) ;
    
    	$dm = $this->get('doctrine_mongodb')->getManager();
    	$dm->persist( $client );
    	$dm->flush();
    
    	return new Response('Created client id '.$client->getId());
    }
}
