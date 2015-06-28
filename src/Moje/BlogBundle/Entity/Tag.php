<?php

namespace Moje\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

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
     * @ORM\ManyToMany(targetEntity="Article", mappedBy="tags")
     */
    protected $articles;

    public function __construct()
    {
        $this->articles = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Tag
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add articles
     *
     * @param \Moje\BlogBundle\Entity\Article $article
     * @return Tag
     */
    public function addArticle(\Moje\BlogBundle\Entity\Article $article)
    {
//        $this->articles[] = $articles;
//
//        return $this;
        if ($this->articles->contains($article)) {
            return;
        }

        $this->articles->add($article);
        $article->addTag($this);

    }

    /**
     * Remove articles
     *
     * @param \Moje\BlogBundle\Entity\Article $article
     */
    public function removeArticle(\Moje\BlogBundle\Entity\Article $article)
    {
//        $this->articles->removeElement($articles);
        if (!$this->articles->contains($article)) {
            return;
        }

        $this->articles->removeElement($article);
        $article->removeTag($this);

    }

    /**
     * Get articles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getArticles()
    {
        return $this->articles;
    }
}
