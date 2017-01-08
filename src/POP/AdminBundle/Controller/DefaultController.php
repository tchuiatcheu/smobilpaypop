<?php

namespace POP\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('POPAdminBundle:Default:index.html.twig');
    }
}
