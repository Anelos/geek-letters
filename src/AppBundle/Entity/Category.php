<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="article")
 */
class Category {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
    * @ORM\Column(type="string", length=100)
    **/
    private $designation;

    /**
     * One Category has Many articles.
     * @ORM\OneToMany(targetEntity="Article", mappedBy="category")
     */
     private $articles;

     public function __construct() 
     {
        $this->articles = new ArrayCollection();
     }

     public function __toString()
     {
        return $this->designation;
     }

}