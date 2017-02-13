<?php

namespace BackEndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BackEndBundle:Default:index.html.twig');
    }
    public function showAction()
    {
        return $this->render('BackEndBundle:Default:show.html.twig');
    }
   
}
