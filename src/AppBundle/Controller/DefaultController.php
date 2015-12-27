<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        // return $this->render('default/helloWorld.html.twig', array(
        //     'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        // ));

        $viewParams = array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            'your_application' => 'Hello World',
        );


        $randomNumbers = array();

        for($x=0; $x<10; $x++) {
            $viewParams['randomNumbers'][] = mt_rand(100000, 1200000);
        }        

        return $this->render('default/helloWorld.html.twig', $viewParams );
    }
}
