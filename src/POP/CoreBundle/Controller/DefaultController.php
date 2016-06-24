<?php

namespace POP\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('POPCoreBundle:Default:index.html.twig');
    }
}
