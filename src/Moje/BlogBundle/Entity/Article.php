<?php

namespace Moje\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

 /**
  * @ORM\Entity
  * @ORM\Table(name="article")
  */
class Article {
     /**
      * @ORM\Id
      * @ORM\Column(type="integer")
      * @ORM\GeneratedValue(strategy="AUTO")
      */
     protected $id;

     /**
      * @ORM\Column(type="string", length=250)
      */
     protected $title;

     /**
      * @ORM\Column(type="text")
      */
     protected $content;

     /**
      * @ORM\Column(type="datetime", name="creation_date")
      */
     protected $creationDate;
     
     /**
      * @ORM\Column(type="string", length=250, name="image_address")
      */
     protected $imageAddress;
     
    /**
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="fkCommentArticle")
     */
    protected $comments;
    

    /**
     * @ORM\ManyToMany(targetEntity="Tag", inversedBy="articles", cascade={"persist"})
     * @ORM\JoinTable(
     *  name="article_tag",
     *  joinColumns={
     *      @ORM\JoinColumn(name="article_id", referencedColumnName="id")
     *  },
     *  inverseJoinColumns={
     *      @ORM\JoinColumn(name="tag_id", referencedColumnName="id")
     *  }
     * )
     */
    protected $tags;

    public function __construct()
    {
        $this->comments = new ArrayCollection();
        $this->tags = new ArrayCollection();
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
     * Set title
     *
     * @param string $title
     * @return Article
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Article
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
     * @return Article
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

    /**
     * Set imageAddress
     *
     * @param string $imageAddress
     * @return Article
     */
    public function setImageAddress($imageAddress)
    {
        $this->imageAddress = $imageAddress;

        return $this;
    }

    /**
     * Get imageAddress
     *
     * @return string 
     */
    public function getImageAddress()
    {
        return $this->imageAddress;
    }

    /**
     * Add comments
     *
     * @param \Moje\BlogBundle\Entity\Comment $comments
     * @return Article
     */
    public function addComment(\Moje\BlogBundle\Entity\Comment $comments)
    {
        $this->comments[] = $comments;

        return $this;
    }

    /**
     * Remove comments
     *
     * @param \Moje\BlogBundle\Entity\Comment $comments
     */
    public function removeComment(\Moje\BlogBundle\Entity\Comment $comments)
    {
        $this->comments->removeElement($comments);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Add tags
     *
     * @param \Moje\BlogBundle\Entity\Tag $tags
     * @return Article
     */
    public function addTag(\Moje\BlogBundle\Entity\Tag $tags)
    {
        $this->tags[] = $tags;

        return $this;
    }

    /**
     * Remove tags
     *
     * @param \Moje\BlogBundle\Entity\Tag $tags
     */
    public function removeTag(\Moje\BlogBundle\Entity\Tag $tags)
    {
        $this->tags->removeElement($tags);
    }

    /**
     * Get tags
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTags()
    {
        return $this->tags;
    }
}
