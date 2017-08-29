<?php

namespace  VMP\PortailBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\RedirectResponse;


class AdvertController extends  Controller
{
    public function indexAction()
    {
       
        return $this->render('VMPPortailBundle:Advert:index.html.twig');
        
    }
    
    public function viewAction()
    {
    
    }
    
    public function addAction(){
      
    }
    
   
}