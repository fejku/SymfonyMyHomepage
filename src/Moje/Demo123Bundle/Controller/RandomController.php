<?php

namespace Moje\Demo123Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class RandomController extends Controller
{
    public function indexAction($limit)
    {
        //return $this->render('MojeDemo123Bundle:Default:index.html.twig', array('name' => $name));
        return new Response(
            '<html><body>Number: '.rand(1, $limit).'</body></html>');
    }
}
