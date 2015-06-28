<?php

namespace Moje\Demo123Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MojeController extends Controller
{
    public function innAction($param, $param3, $color)
    {
        //return $this->render('MojeDemo123Bundle:Default:index.html.twig', array('name' => $name));
//        return new Response(
//            '<html><body>Number: '.$param.'</body></html>');
      //return $this->render('MojeDemo123Bundle:Moje:index.html.twig', array('param' => $param, 'param3' => $param3, 'color' => $color));
      //return $this->redirect($this->generateUrl('moje_demo123_homepage', array('name' => 'ala')), 301);
      //
      //-----------------------------------------------------------------
      //NIE DZIALALO HMM
//      $response = $this->forward('Demo123Bundle:Moje:inna', array(
//          'p1' => $param,
//          'p2' => $param3,
//          'p3' => $color
//              ));
//      ------------------------------------------------------------------
      
      //throw $this->createNotFoundException('Produkt nie istnieje');
      //throw new \Exception('alala');
      
      $session = $this->getRequest()->getSession();
      
      //$session->set('ala', 'makota');
      $param = $session->get('ala');
        return new Response(
            '<html><body>Number: '.$param.'</body></html>');    
    }
    
    public function innaAction($param, $param3, $p3) {

      
      
      return $response;
    }
}
