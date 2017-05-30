<?php
namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="article")
 */
class User {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * One User has Many articles.
     * @OneToMany(targetEntity="Article", mappedBy="user")
     */
     private $articles;

     public function __construct()
     {
         parent::__construct();
         $this->articles = new ArrayCollection();
     }

     public function __toString()
     {
        return $this->userName;
     }

}