<?php
namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="user_table")
 */
class User extends BaseUser {
    
    /**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;

    /**
    * @ORM\Column(type="string", length=100)
    **/
    private $firstName;

    /**
    * @ORM\Column(type="string", length=100)
    **/
    private $lastName;

    /**
    * @ORM\Column(type="date")
    **/
    private $birthday;

    /**
    * One User has Many articles.
    * @ORM\OneToMany(targetEntity="Article", mappedBy="user")
    */
    private $articles;

    /**
    * @ORM\Column(type="string")
    * @Assert\NotBlank(message="Please, upload your Avatar as an image file.")
    * @Assert\File(mimeTypes={ "image/png" })
    */
    private $avatar;

    /**
    * One User has Many comments.
    * @ORM\OneToMany(targetEntity="Comment", mappedBy="user")
    */
    private $comments;

    /**
     * Many Users make Many Likes.
     * @ORM\ManyToMany(targetEntity="Article", inversedBy="userLikes")
     * @ORM\JoinTable(name="likes")
     */
    private $articleLikes;

    public function __construct()
    {
        parent::__construct();
        $this->articles = new ArrayCollection();
        $this->comments = new ArrayCollection();
        $this->articleLikes = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->userName;
    }


    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     *
     * @return User
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     *
     * @return User
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Add article
     *
     * @param \AppBundle\Entity\Article $article
     *
     * @return User
     */
    public function addArticle(\AppBundle\Entity\Article $article)
    {
        $this->articles[] = $article;

        return $this;
    }

    /**
     * Remove article
     *
     * @param \AppBundle\Entity\Article $article
     */
    public function removeArticle(\AppBundle\Entity\Article $article)
    {
        $this->articles->removeElement($article);
    }

    /**
     * Get articles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * Add comment
     *
     * @param \AppBundle\Entity\Comment $comment
     *
     * @return User
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
     * Add like
     *
     * @param \AppBundle\Entity\Article $like
     *
     * @return User
     */
    public function addLike(\AppBundle\Entity\Article $like)
    {
        $this->likes[] = $like;

        return $this;
    }

    /**
     * Remove like
     *
     * @param \AppBundle\Entity\Article $like
     */
    public function removeLike(\AppBundle\Entity\Article $like)
    {
        $this->likes->removeElement($like);
    }

    /**
     * Get likes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * Add articleLike
     *
     * @param \AppBundle\Entity\Article $articleLike
     *
     * @return User
     */
    public function addArticleLike(\AppBundle\Entity\Article $articleLike)
    {
        $this->articleLikes[] = $articleLike;

        return $this;
    }

    /**
     * Remove articleLike
     *
     * @param \AppBundle\Entity\Article $articleLike
     */
    public function removeArticleLike(\AppBundle\Entity\Article $articleLike)
    {
        $this->articleLikes->removeElement($articleLike);
    }

    /**
     * Get articleLikes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArticleLikes()
    {
        return $this->articleLikes;
    }
}
