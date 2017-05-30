<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="article")
 */
class Comment {

    /**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;

    /**
    * @ORM\Column(type="datetime", name="posted_at")
    **/
    private $postDate;

    /**
    * Many Comments have One Author.
    * @ORM\ManyToOne(targetEntity="User", inversedBy="comments")
    * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
    */
    private $author;

    /**
    * Many Comments have One Article.
    * @ORM\ManyToOne(targetEntity="Article", inversedBy="comments")
    * @ORM\JoinColumn(name="article_id", referencedColumnName="id")
    */
    private $article;


    /**
    * @ORM\Column(type="text")
    **/
    private $content;


    public function __toString()
    {
        return $this->content;
    }

}