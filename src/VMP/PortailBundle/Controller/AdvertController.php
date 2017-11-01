<?php

namespace  VMP\PortailBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\RedirectResponse;
use VMP\UserBundle\Entity\User;
use VMP\UserBundle\Form\UserType;
use VMP\PortailBundle\Entity\Affaires;
use VMP\PortailBundle\Entity\Charges;
use VMP\PortailBundle\Form\AffairesType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
//use CMEN\GoogleChartsBundle\GoogleCharts\Charts\Material\LineChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\ComboChart\Series;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\ComboChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\LineChart;


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
        
                $repository1=$this
                ->getDoctrine()
                ->getManager()
                ->getRepository('VMPPortailBundle:Charges');
                
               
        
        $listeaff=$repository->findAll();
        
        $listech=$repository1->findAll();
        
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
            ['Juin',    $repository->find(8)->getMontant()],
            ['Juillet',  $repository->find(15)->getMontant()   ],
            ['Aout',  $repository->find(17)->getMontant()  ],
            ['Septembre',  $repository->find(19)->getMontant()]
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
        
        
       
    $chart = new LineChart();
$chart->getData()->setArrayToDataTable([
    ['Mois', 'Reel', 'Ambition'],
    ['Janvier',  $repository->find(3)->getMontant(),      $repository->find(9)->getMontant()],
    ['Fevrier', $repository->find(4)->getMontant() ,      $repository->find(10)->getMontant()],
    ['Mars',  $repository->find(5)->getMontant(),    $repository->find(11)->getMontant()     ],
    ['Avril',  $repository->find(6)->getMontant(),  $repository->find(12)->getMontant()  ],
    ['Mai',  $repository->find(7)->getMontant(),   $repository->find(13)->getMontant()   ],
    ['Juin',  $repository->find(8)->getMontant(),     $repository->find(14)->getMontant()  ],
    ['Juillet',  $repository->find(15)->getMontant(), $repository->find(16)->getMontant()      ],
    ['Aout',  $repository->find(17)->getMontant(),   $repository->find(18)->getMontant()    ],
    ['Septembre',  $repository->find(19)->getMontant(),      $repository->find(20)->getMontant()]
]);

$chart->getOptions()->setTitle('Evolution des Chiffres d\'affaires');
$chart->getOptions()->setCurveType('function');
$chart->getOptions()->setLineWidth(4);
$chart->getOptions()->getLegend()->setPosition('none');
$chart->getOptions()->setWidth(900);
$chart->getOptions()->setHeight(500);
    
    
    $combo = new ComboChart();
$combo->getData()->setArrayToDataTable([
    ['Mois', 'Couts fixes', 'Charges réel'],           
    ['Janvier',  $repository1->find(1)->getMontant(),      $repository1->find(7)->getMontant()],
    ['Fevrier', $repository1->find(2)->getMontant(),$repository1->find(8)->getMontant()] ,
    ['Mars',  $repository1->find(3)->getMontant(),    $repository1->find(9)->getMontant()     ],
    ['Avril',  $repository1->find(4)->getMontant(),  $repository1->find(10)->getMontant()  ],
    ['Mai',  $repository1->find(5)->getMontant(),   $repository1->find(11)->getMontant()   ],
    ['Juin',  $repository1->find(6)->getMontant(),     $repository1->find(12)->getMontant()  ]
]);
$combo->getOptions()->setTitle('Les Charges');
$combo->getOptions()->getVAxis()->setTitle('Euros');
$combo->getOptions()->getHAxis()->setTitle('Mois');
$combo->getOptions()->setSeriesType('bars');

$series5 = new \CMEN\GoogleChartsBundle\GoogleCharts\Options\ComboChart\Series();
$series5->setType('line');
$combo->getOptions()->setSeries([5 => $series5]);

$combo->getOptions()->setWidth(900);
$combo->getOptions()->setHeight(500);

    
        
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
                 'chart' => $chart,
                 'combo' => $combo,
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
        
        $repository1=$this
        ->getDoctrine()
        ->getManager()
        ->getRepository('VMPPortailBundle:Produit');
        
        $repository2=$this
        ->getDoctrine()
        ->getManager()
        ->getRepository('VMPPortailBundle:Fournisseur');
        
        $repository3=$this
        ->getDoctrine()
        ->getManager()
        ->getRepository('VMPPortailBundle:Personnel');
        
        $repository4=$this
        ->getDoctrine()
        ->getManager()
        ->getRepository('VMPPortailBundle:Client');
        
        $listech=$repository1->findAll();
        $liste2=$repository2->findAll();
        $liste3=$repository3->findAll();
        $liste4=$repository4->findAll();
        
        
        
        
        
        return $this->render('VMPPortailBundle:Advert:forma.html.twig',
            array('listech' => $listech,
                'liste2' => $liste2,
                'liste3' => $liste3,
                'liste4' => $liste4
            ));
      
    }
    
    
    
    public function pdfAction()
    {
        
        $repository1=$this
        ->getDoctrine()
        ->getManager()
        ->getRepository('VMPPortailBundle:Produit');
        
        $repository2=$this
        ->getDoctrine()
        ->getManager()
        ->getRepository('VMPPortailBundle:Fournisseur');
        
        $repository3=$this
        ->getDoctrine()
        ->getManager()
        ->getRepository('VMPPortailBundle:Personnel');
        
        $repository4=$this
        ->getDoctrine()
        ->getManager()
        ->getRepository('VMPPortailBundle:Client');
        
        $listech=$repository1->findAll();
        $liste2=$repository2->findAll();
        $liste3=$repository3->findAll();
        $liste4=$repository4->findAll();
        
        
        
       
        
        
        
        
        
        $html = $this->renderView('VMPPortailBundle:Advert:pdf.html.twig', array('listech' => $listech,
            'liste2' => $liste2,
            'liste3' => $liste3,
            'liste4' => $liste4
        ));
        $url = 'http://localhost:8000/Portail/compte/';
        $filename = sprintf('test-%s.pdf', date('Y-m-d'));
        
        return new Response(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
            200,
            [
                'Content-Type'        => 'application/pdf',
                'Content-Disposition' => sprintf('attachment; filename="%s"', $filename),
            ]
            );
        
        
     
        
    }
   
}