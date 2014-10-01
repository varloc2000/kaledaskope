<?php

namespace Scope\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AppController extends Controller
{
    public function indexAction()
    {
        return $this->render('ScopeAppBundle:App:index.html.twig');
    }
}
