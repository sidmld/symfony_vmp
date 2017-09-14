<?php

namespace  VMP\PortailBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\RedirectResponse;
use VMP\PortailBundle\Entity\Utilisateur;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class AdvertController extends  Controller
{
    public function indexAction()
    {
     
       
        return $this->render('VMPPortailBundle:Advert:index.html.twig');
        
    }
    
    public function viewAction()
    {
     return $this->render('VMPPortailBundle:Advert:view.html.twig'
                );
    }
    
    public function addAction(){
      
    }
    
   
}