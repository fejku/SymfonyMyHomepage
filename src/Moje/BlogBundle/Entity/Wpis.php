<?php

namespace Moje\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

 /**
  * @ORM\Entity
  * @ORM\Table(name="wpis")
  */
class Wpis {
     /**
      * @ORM\Id
      * @ORM\Column(type="integer")
      * @ORM\GeneratedValue(strategy="AUTO")
      */
     protected $id;

     /**
      * @ORM\Column(type="string", length=250)
      */
     protected $tytul;

     /**
      * @ORM\Column(type="text")
      */
     protected $tresc;

     /**
      * @ORM\Column(type="datetime", name="data_utworzenia")
      */
     protected $dataUtworzenia;
     
     /**
      * @ORM\Column(type="string", length=250)
      */
     protected $obrazek;

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
     * Set tytul
     *
     * @param string $tytul
     * @return Wpis
     */
    public function setTytul($tytul)
    {
        $this->tytul = $tytul;

        return $this;
    }

    /**
     * Get tytul
     *
     * @return string 
     */
    public function getTytul()
    {
        return $this->tytul;
    }

    /**
     * Set tresc
     *
     * @param string $tresc
     * @return Wpis
     */
    public function setTresc($tresc)
    {
        $this->tresc = $tresc;

        return $this;
    }

    /**
     * Get tresc
     *
     * @return string 
     */
    public function getTresc()
    {
        return $this->tresc;
    }

    /**
     * Set dataUtworzenia
     *
     * @param \DateTime $dataUtworzenia
     * @return Wpis
     */
    public function setDataUtworzenia($dataUtworzenia)
    {
        $this->dataUtworzenia = $dataUtworzenia;

        return $this;
    }

    /**
     * Get dataUtworzenia
     *
     * @return \DateTime 
     */
    public function getDataUtworzenia()
    {
        return $this->dataUtworzenia;
    }

    /**
     * Set obrazek
     *
     * @param string $obrazek
     * @return Wpis
     */
    public function setObrazek($obrazek)
    {
        $this->obrazek = $obrazek;

        return $this;
    }

    /**
     * Get obrazek
     *
     * @return string 
     */
    public function getObrazek()
    {
        return $this->obrazek;
    }
}
