<?php

namespace  VMP\PortailBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\RedirectResponse;
use VMP\UserBundle\Entity\User;
use VMP\UserBundle\Form\UserType;
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
          
        $repository=$this
                ->getDoctrine()
                ->getManager()
                ->getRepository('VMPPortailBundle:Affaires');
        
        $listeaff=$repository->findAll();
        
       // foreach ($listeaff as $aff){
      //      echo $aff->getMois();
      //  }
        
        
     $pieChart = new PieChart();
    $pieChart->getData()->setArrayToDataTable(
        [['Mois', 'euros'],
            ['Janiver',   $repository->find(3)->getMontant()],
            ['Mars',      $repository->find(5)->getMontant()],
            ['Avril',  $repository->find(6)->getMontant()],
            ['Mai', $repository->find(7)->getMontant()],
            ['Juin',    $repository->find(8)->getMontant()]
        ]
    );
    $pieChart->getOptions()->setTitle('Chiffre d\'affaire réel');
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
                 'form' => $form->createView(),
                   'listaff' => $listeaff));
    }
    
    public function addAction(){
      
    }
    
    
    public function formsAction(Request $request){
      
         $societe = new User();
    $form   = $this->get('form.factory')->create(UserType::class, $societe);

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->persist($societe);
      $em->flush();

      

    // return $this->redirectToRoute('vmp_portail_forms');
    }

   
        
        
     return $this->render('VMPPortailBundle:Advert:forms.html.twig', 
             array('form' => $form->createView()));
        
        
    }
    
    
    public function formaAction(){
      
    }
   
}