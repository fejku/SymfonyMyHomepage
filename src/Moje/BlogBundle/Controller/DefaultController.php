<?php

namespace Moje\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

use Moje\BlogBundle\Entity\Wpis;
use Moje\BlogBundle\Form\Type\ProductType;
use Moje\BlogBundle\Form\Type\WpisType;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MojeBlogBundle:Default:index.html.twig');
        //return $this->render('MojeBlogBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function createAction() {
      $product = new Product();
      $product->setName('New name');
      $product->setPrice('11.11');
      $product->setDescription('New blog value');
      
      $em = $this->getDoctrine()->getManager();
      $em->persist($product);
      $em->flush();
      
      return new Response('Created product id '.$product->getId());
    }
    
    public function showAction($id) {
        $product = $this->getDoctrine()
                ->getRepository('MojeBlogBundle:Product')
                ->find($id);

        if(!$product) {
            throw $this->createNotFoundException(
                    'No product found for id '.$id);
        }
        
        //$em = $this->getDoctrine()->getManager();
        
        //$product->getName();
        
        return new Response($id.': '.$product->getName());
//        return new Response('Created product id '.$product->getId().' Name: '.
//                $product->getName());
    }
    
    public function formAction() {
        $form = $this->createFormBuilder()
                ->add('name', 'text')
                ->add('age', 'integer')
                ->add('save', 'submit', array(
                    'attr' => array(
//                        'formnovalidate' => 'formnovalidate',
//                        'class' => 'mySubmitButton'
                    )
                ))
                ->getForm();
        
        return $this->render('MojeBlogBundle:Default:form.html.twig', array(
            'myForm' => $form->createView(),
        ));
    }
    
    public function formAndDoctrineAction(Request $request) {
        $product = new Product();
        $form = $this->createForm(new ProductType, $product);
        
        $form->handleRequest($request);
        
        if($form->isValid()) {
            $name = $form->get('name')->getData();
            $price = $form->get('price')->getData();
            $description = $form->get('description')->getData();
            
            
            
            $product->setName($name);
            $product->setPrice($price);
            $product->setDescription($description);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();
            
            return new Response('New product added.');
        }
        
        return $this->render('MojeBlogBundle:Default:form.html.twig', array(
            'myForm' => $form->createView(),
        ));
    }
    
    public function newWpisAction() {
        $wpis = new Wpis();
        $form = $this->createForm(new WpisType, $wpis);
        
        $request = $this->get('request');
        
        if ($request->isMethod('POST')) {
            $form->submit($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()
                    ->getEntityManager();
                $wpis->setDataUtworzenia(new \DateTime());
                $em->persist($wpis);
                $em->flush();

                return new RedirectResponse($this->generateUrl('show_wpis'));
            }
        }
        
//        return new RedirectResponse($this->generateUrl('show_wpis'));
        
//     !!!           $form = $this->get('form.factory')->create(new ContactType());
//
//        $request = $this->get('request');
//        if ($request->isMethod('POST')) {
//            $form->submit($request);
//            if ($form->isValid()) {
//                $mailer = $this->get('mailer');
//                // .. setup a message and send it
//                // http://symfony.com/doc/current/cookbook/email.html
//
//                $this->get('session')->getFlashBag()->set('notice', 'Message sent!');
//
//                return new RedirectResponse($this->generateUrl('_demo'));
//            }
//        }

        //return array('form' => $form->createView());
        return $this->render('MojeBlogBundle:Default:blog_new.html.twig', array(
            'myForm' => $form->createView(),
        ));
    }
    
    public function showWpisAction() {
        $wpisy = $this->getDoctrine()
                ->getRepository('MojeBlogBundle:Wpis')
                ->findAll();

        if(!$wpisy) {
            throw $this->createNotFoundException(
                    'No product found for id 1');
        }
//        exit(\Doctrine\Common\Util\Debug::dump($wpisy));
        //$em = $this->getDoctrine()->getManager();
        
        //$product->getName();
        
//        return new Response(': '.$wpisy->getName());
//        return new Response('Created product id '.$product->getId().' Name: '.
//                $product->getName());
        return $this->render('MojeBlogBundle:Default:blog_show.html.twig', array(
            'wpisy' => $wpisy
        ));
    }
}
