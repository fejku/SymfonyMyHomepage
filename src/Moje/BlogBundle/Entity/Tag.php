<?php

namespace Moje\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

 /**
  * @ORM\Entity
  * @ORM\Table(name="tag")
  */
class Tag {
     /**
      * @ORM\Id
      * @ORM\Column(type="integer")
      * @ORM\GeneratedValue(strategy="AUTO")
      */
     protected $id;

     /**
      * @ORM\Column(type="string", length=50)
      */
     protected $name;
     
    /**
     * @ORM\OneToMany(targetEntity="ArticleTag", mappedBy="fkTag")
     */
    protected $articles;

    public function __construct()
    {
        $this->articles = new ArrayCollection();
    }
}