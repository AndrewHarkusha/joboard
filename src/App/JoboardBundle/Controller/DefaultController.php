<?php

namespace App\JoboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AppJoboardBundle:Default:index.html.twig', array('name' => $name));
    }

    public function testAction($name = 'test')
    {
        return $this->render('AppJoboardBundle:Default:index.html.twig', array('name' => $name));
    }
}
