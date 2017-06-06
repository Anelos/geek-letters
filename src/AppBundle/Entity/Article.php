<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\Timestampable\Traits\TimestampableEntity;


/**
 * @ORM\Entity
 * @ORM\Table(name="article")
 */
class Article {
    use TimestampableEntity;

    /**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;

    /**
    * @ORM\ManyToOne(targetEntity="User", inversedBy="articles")
    * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
    **/
    private $user;

    /**
    * @ORM\Column(type="boolean")
    **/
    private $published;

    /**
     * Many Articles have One Category.
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="articles")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $category;

    /**
    * @ORM\Column(type="string", length=100)
    **/
    private $title;

    /**
    * @ORM\Column(type="text")
    **/
    private $content;

    /**
    * One Article has Many Comments.
    * @ORM\OneToMany(targetEntity="Comment", mappedBy="article")
    */
    private $comments;

    /**
     * Many Article have Many User likes.
     * @ORM\ManyToMany(targetEntity="User", mappedBy="articleLikes")
     */
    private $userLikes;

    public function __construct() {
        $this->userLikes = new ArrayCollection();
        $this->comments = new ArrayCollection();
    }

    public function __toString()
    {
    return $this->title;
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
     * Set published
     *
     * @param boolean $published
     *
     * @return Article
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set title
     *
     * @param string $title
     *
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
     *
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
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Article
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set category
     *
     * @param \AppBundle\Entity\Category $category
     *
     * @return Article
     */
    public function setCategory(\AppBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \AppBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Add comment
     *
     * @param \AppBundle\Entity\Comment $comment
     *
     * @return Article
     */
    public function addComment(\AppBundle\Entity\Comment $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * Remove comment
     *
     * @param \AppBundle\Entity\Comment $comment
     */
    public function removeComment(\AppBundle\Entity\Comment $comment)
    {
        $this->comments->removeElement($comment);
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
     * Add userLike
     *
     * @param \AppBundle\Entity\User $userLike
     *
     * @return Article
     */
    public function addUserLike(\AppBundle\Entity\User $userLike)
    {
        $this->userLikes[] = $userLike;

        return $this;
    }

    /**
     * Remove userLike
     *
     * @param \AppBundle\Entity\User $userLike
     */
    public function removeUserLike(\AppBundle\Entity\User $userLike)
    {
        $this->userLikes->removeElement($userLike);
    }

    /**
     * Get userLikes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUserLikes()
    {
        return $this->userLikes;
    }

    public function getCommentsCount()
    {
        return $this->comments->count();
    }
    public function getLikesCount()
    {
        return $this->likes->count();
    }

}
