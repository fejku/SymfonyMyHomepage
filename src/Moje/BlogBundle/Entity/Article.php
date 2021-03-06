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
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $visitsNumber;
    
     /**
      * @ORM\ManyToOne(targetEntity="Moje\UserBundle\Entity\User", inversedBy="id")
      * @ORM\JoinColumn(name="fk_article_user", referencedColumnName="id")
      */
    protected $fkArticleUser;

    public function __construct()
    {
        $this->comments = new ArrayCollection();
        $this->tags = new ArrayCollection();
        $this->visitsNumber = 0;
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
//        $this->tags[] = $tags;
        if(!$this->tags->contains($tags)){
            $this->tags->add($tags);
        }
            
        return $this->tags;
    }

    /**
     * Remove tags
     *
     * @param \Moje\BlogBundle\Entity\Tag $tags
     */
    public function removeTag(\Moje\BlogBundle\Entity\Tag $tags)
    {
        if($this->tags->contains($tags)) {
            $this->tags->removeElement($tags);
        }
        
        return $this->tags;
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
    
        /**
     * Set tags
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function setTags(Collection $tags)
    {
        $this->tags = $tags;
        
        return $this;
    }
    
    /**
     * Set visitsNumber
     *
     * @param string $visitsNumber
     * @return Article
     */
    public function setVisitsNumber($visitsNumber)
    {
        $this->visitsNumber = $visitsNumber;

        return $this;
    }

    /**
     * Get visitsNumber
     *
     * @return integer 
     */
    public function getVisitsNumber()
    {
        return $this->visitsNumber;
    }
    
    /**
     * Increment visitsNumber
     *
     * @return integer 
     */
    public function incrementVisitsNumber()
    {
        $this->visitsNumber++;
        
        return $this;
    }
    
    /**
     * Decrement visitsNumber
     *
     * @return integer 
     */
    public function decrementVisitsNumber()
    {
        $this->visitsNumber--;
        
        return $this;
    }

    /**
     * Set fkArticleUser
     *
     * @param \Moje\UserBundle\Entity\User $fkArticleUser
     * @return Article
     */
    public function setFkArticleUser(\Moje\UserBundle\Entity\User $fkArticleUser = null)
    {
        $this->fkArticleUser = $fkArticleUser;

        return $this;
    }

    /**
     * Get fkArticleUser
     *
     * @return \Moje\UserBundle\Entity\User 
     */
    public function getFkArticleUser()
    {
        return $this->fkArticleUser;
    }
}
