<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="article")
 */
class Article {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
    * @Column(type="datetime", name="posted_at")
    **/
    private $postDate;

    /**
    * @ORM\ManyToOne(targetEntity="User", inversedBy="articles")
    * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
    **/
    private $author;

    /**
    * @ORM\Column(type="boolean")
    **/
    private $published;

    /**
    * @ORM\ManyToOne(targetEntity="Category", inversedBy="articles")
    * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
    **/
    private $category;

    /**
    * @ORM\Column(type="string", length=100)
    **/
    private $title;

    /**
    * @ORM\Column(type="string", length=100)
    **/
    private $content;

     /**
     * One Article has Many Comments.
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="article")
     */
     private $comments;

     public function __construct()
     {
        $this->comments = new ArrayCollection();
     }

     public function __toString()
     {
        return $this->title;
     }

}