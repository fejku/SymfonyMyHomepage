<?php

namespace Moje\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

 /**
  * @ORM\Entity
  * @ORM\Table(name="article_tag")
  */
class ArticleTag {
     /**
      * @ORM\Id
      * @ORM\Column(type="integer")
      * @ORM\GeneratedValue(strategy="AUTO")
      */
     protected $id;

     /**
      * @ORM\ManyToOne(targetEntity="Article", inversedBy="tags")
      * @ORM\JoinColumn(name="fk_article", referencedColumnName="id")
      */
     protected $fkArticle;
     
     /**
      * @ORM\ManyToOne(targetEntity="Tag", inversedBy="articles")
      * @ORM\JoinColumn(name="fk_tag", referencedColumnName="id")
      */
     protected $fkTag;

     /**
      * @ORM\Column(type="datetime", name="creation_date")
      */
     protected $creationDate;
}