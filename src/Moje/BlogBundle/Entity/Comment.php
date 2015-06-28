<?php

namespace Moje\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

 /**
  * @ORM\Entity
  * @ORM\Table(name="comment")
  */
class Comment {
     /**
      * @ORM\Id
      * @ORM\Column(type="integer")
      * @ORM\GeneratedValue(strategy="AUTO")
      */
     protected $id;

     /**
      * @ORM\ManyToOne(targetEntity="Article", inversedBy="comments")
      * @ORM\JoinColumn(name="fk_comment_article", referencedColumnName="id")
      */
     protected $fkCommentArticle;
     
     /**
      * @ORM\Column(type="string", length=250)
      */
     protected $author;
     
     /**
      * @ORM\Column(type="text")
      */
     protected $content;

     /**
      * @ORM\Column(type="datetime", name="creation_date")
      */
     protected $creationDate;

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
     * Set fkCommentArticle
     *
     * @param integer $fkCommentArticle
     * @return Comment
     */
    public function setFkCommentArticle(Article $fkCommentArticle)
    {
        $this->fkCommentArticle = $fkCommentArticle;

        return $this;
    }

    /**
     * Get fkCommentArticle
     *
     * @return integer 
     */
    public function getFkCommentArticle()
    {
        return $this->fkCommentArticle;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return Comment
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Comment
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     * @return Comment
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime 
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }
}
