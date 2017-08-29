<?php

namespace VMP\PortailBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VMPPortailBundle:Default:index.html.twig');
    }
}
