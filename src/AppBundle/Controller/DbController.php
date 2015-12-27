<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DbController extends Controller
{
    
    public function indexAction(Request $request)
    {
        
        // replace this example code with whatever you need
        // return $this->render('default/helloWorld.html.twig', array(
        //     'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        // ));

        $products = $this->getDoctrine()
        ->getRepository('AppBundle:Product')
        ->findAll();

        //echo "<pre/>";print_r($products); exit;


        $viewParams = array(
            'products' => $products,
        );        

        return $this->render('db/index.html.twig', $viewParams );
    }

    /**
     * @Route("/db/add")
     */
    public function addAction (Request $request)
    {
        $viewParams = array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            'your_application' => 'Hello World',
        );


        $randomNumbers = array();

        for($x=0; $x<10; $x++) {
            $viewParams['randomNumbers'][] = mt_rand(100000, 1200000);
        }
        return $this->render('db/add.html.twig', $viewParams );   
    }

    /**
     * @Route("/db/delete")
     */
    public function deleteAction (Request $request)
    {
        $viewParams = array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            'your_application' => 'Hello World',
        );


        $randomNumbers = array();

        for($x=0; $x<10; $x++) {
            $viewParams['randomNumbers'][] = mt_rand(100000, 1200000);
        }
        return $this->render('db/delete.html.twig', $viewParams );   
    }



}
