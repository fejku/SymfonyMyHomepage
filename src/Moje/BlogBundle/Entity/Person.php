<?php

namespace Moje\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

 /**
  * @ORM\Entity
  * @ORM\Table(name="Person")
  */
class Person {
     /**
      * @ORM\Id
      * @ORM\Column(type="integer")
      * @ORM\GeneratedValue(strategy="AUTO")
      */
     protected $id;

     /**
      * @ORM\Column(type="text")
      */
     protected $name;

     /**
      * @ORM\Column(type="decimal", scale=2)
      */
     protected $age;
}