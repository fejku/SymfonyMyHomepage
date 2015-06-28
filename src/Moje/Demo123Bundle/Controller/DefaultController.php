<?php

namespace Moje\Demo123Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MojeDemo123Bundle:Default:index.html.twig', array('name' => $name));
    }
}
