<?php

namespace Moje\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

use Doctrine\ORM\Tools\Pagination\Paginator;

use Moje\BlogBundle\Entity\Article;
use Moje\BlogBundle\Entity\Comment;
use Moje\BlogBundle\Form\Type\ArticleType;
use Moje\BlogBundle\Form\Type\CommentType;

//Do usuniecia?!
use Moje\BlogBundle\Entity\Tag;

class BlogController extends Controller
{
    public function indexAction($page) {
        $LIMIT_POSTOW_NA_STRONIE = 2;
        
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQueryBuilder()
            ->select('Article', 'Comment')
            ->from('MojeBlogBundle:Article', 'Article')
            ->leftJoin('Article.comments', 'Comment')
            ->leftJoin('Article.tags', 'Tag')
            ->setMaxResults($LIMIT_POSTOW_NA_STRONIE)
            ->setFirstResult(($page-1) * $LIMIT_POSTOW_NA_STRONIE)
        ;

        $articles = new Paginator($query, true);

        if(!$articles) {
            throw $this->createNotFoundException('There are no article.');
        }
        
        $query = $em->createQueryBuilder()
            ->select('COUNT(a.id)') 
            ->from('MojeBlogBundle:Article', 'a')
            ->getQuery();

        $iloscStron = $query->getSingleScalarResult();
        $iloscStron = ceil($iloscStron / $LIMIT_POSTOW_NA_STRONIE);

        return $this->render('MojeBlogBundle:Blog:index.html.twig', array(
            'articles' => $articles,
            'page' => $page,
            'ilosc_stron' => $iloscStron
        ));
    }
    
    public function articleAction($idArticle) {
        $article = $this->getDoctrine()
                ->getRepository('MojeBlogBundle:Article')
                ->findOneById($idArticle);
        
        if(!$article) {
            throw $this->createNotFoundException('There are no article with id:'.$idArticle.'.');
        }
        
        $em = $this->getDoctrine()
                    ->getManager();
        
        $comments = $article->getComments();
        
        // Form for new comment
        $comment = new Comment();
        $form = $this->createForm(new CommentType, $comment);
        
        $request = $this->get('request');
        
        if ($request->isMethod('POST')) {
            $form->submit($request);
            if ($form->isValid()) {
                $comment->setFkCommentArticle($article);
                $comment->setCreationDate(new \DateTime());
                $em->persist($comment);
                $em->flush();

                return new RedirectResponse($this->generateUrl('show_article', array(
                    'idArticle' => $idArticle
                )));
            }
        }

        $article->incrementVisitsNumber();
        $em->flush();
        
        return $this->render('MojeBlogBundle:Blog:article.html.twig', array(
            'article' => $article,
            'addCommentForm' => $form->createView(),
            'comments' => $comments
        ));
    }
    
    public function addArticleAction() {
        $article = new Article();
        
        $form = $this->createForm(new ArticleType, $article, array(
            'action' => $this->generateUrl('add_article'),
            'method' => 'POST'
        ));
        
        $request = $this->get('request');
        
        if ($request->isMethod('POST')) { 
            $form->submit($request);
            if ($form->isValid()) {               
                $em = $this->getDoctrine()
                    ->getManager();
                
                $article->setCreationDate(new \DateTime());
                $em->persist($article);
                $em->flush();

                return new RedirectResponse($this->generateUrl('index'));
            }
        }
        
        return $this->render('MojeBlogBundle:Blog:add_article.html.twig', array(
            'addArticleForm' => $form->createView(),
        ));
    }
}