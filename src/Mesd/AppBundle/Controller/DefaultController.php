<?php

namespace Mesd\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MesdAppBundle:Default:index.html.twig', array('name' => $name));
    }
}
