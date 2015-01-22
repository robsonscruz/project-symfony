<?php

namespace Acme\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Acme\StoreBundle\Document\Client;
use Symfony\Component\HttpFoundation\Response;

class ClientController extends Controller
{

    public function indexAction()
    {
        return new Response( "Página de exemplo com rota separada" ) ;
    }
}
