<?php

namespace Chm\MPFormBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ChmMPFormBundle:Default:index.html.twig', array('name' => $name));
    }
}
