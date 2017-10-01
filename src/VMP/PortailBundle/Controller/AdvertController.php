<?php

namespace  VMP\PortailBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\RedirectResponse;
use VMP\UserBundle\Entity\User;
use VMP\PortailBundle\Entity\Affaires;
use VMP\PortailBundle\Form\AffairesType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;


class AdvertController extends  Controller
{
    public function indexAction()
    {
     
       
        return $this->render('VMPPortailBundle:Advert:index.html.twig');
        
    }
    
    public function viewAction(Request $request)
    {
               
     $pieChart = new PieChart();
    $pieChart->getData()->setArrayToDataTable(
        [['Pourcentage', 'Par mois'],
         ['Production',     11],
         ['Fournisseurs',      2],
         ['Clients',  2],
         ['Autres', 2],
         ['Benefies',    7]
        ]
    );
    $pieChart->getOptions()->setTitle('Pourcentages des resources');
    $pieChart->getOptions()->setHeight(500);
    $pieChart->getOptions()->setWidth(900);
    $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
    $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
    $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
    $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
    $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20); 
        
        
        
        
    $affaires = new Affaires();
    $form   = $this->get('form.factory')->create(AffairesType::class, $affaires);

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->persist($affaires);
      $em->flush();

      

    // return $this->redirectToRoute('fos_user_profile_show');
    }

   
        
        
     return $this->render('VMPPortailBundle:Advert:view.html.twig', 
             array('piechart' => $pieChart,
                 'form' => $form->createView()));
    }
    
    public function addAction(){
      
    }
    
   
}