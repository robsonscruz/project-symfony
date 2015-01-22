<?php

namespace Acme\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Acme\StoreBundle\Document\User;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{

    public function indexAction()
    {
        return new Response( "Página de exemplo com rota separada - user" ) ;
    }
}
