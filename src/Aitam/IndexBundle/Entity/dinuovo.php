<?php
// src/Aitam/IndexBundle/Entity/Dinuovo.php

namespace Aitam\IndexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Aitam\IndexBundle\Repository\DinuovoRepository")
 * @ORM\Table(name="dinuovo")
 * @ORM\HasLifecycleCallbacks()
 */
class Dinuovo
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $title;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $author;

    /**
     * @ORM\Column(type="text")
     */
    protected $articolo;

    /**
     * @ORM\Column(type="string", length="20")
     */
    protected $image;

    /**
     * @ORM\Column(type="string")
     */
    protected $slug;

    /**
     * @ORM\OneToMany(targetEntity="Commenti", mappedBy="articolo")
     */
    protected $commenti;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $created;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $updated;
    
    public function slugify($text)
    {
    	// replace non letter or digits by -
    	$text = preg_replace('#[^\\pL\d]+#u', '-', $text);
    
    	// trim
    	$text = trim($text, '-');
    
    	// transliterate
    	if (function_exists('iconv'))
    	{
    		$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    	}
    
    	// lowercase
    	$text = strtolower($text);
    
    	// remove unwanted characters
    	$text = preg_replace('#[^-\w]+#', '', $text);
    
    	if (empty($text))
    	{
    		return 'n-a';
    	}
    
    	return $text;
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
     */
    public function setTitle($title)
    {
        $this->title = $title;
        $this->setSlug($this->title);
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
     * Set author
     *
     * @param string $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set articolo
     *
     * @param text $articolo
     */
    public function setArticolo($articolo)
    {
        $this->articolo = $articolo;
    }

    /**
     * Get articolo
     *
     * @return text 
     */
    public function getArticolo($length = null)
    {
    if (false === is_null($length) && $length > 0)
        return substr($this->articolo, 0, $length);
    else
        return $this->articolo;
    }
    
    /**
     * Set image
     *
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set tags
     *
     * @param text $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    /**
     * Get tags
     *
     * @return text 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set created
     *
     * @param datetime $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * Get created
     *
     * @return datetime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param datetime $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * Get updated
     *
     * @return datetime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }
    
    public function __construct()
    {
        $this->comments = new ArrayCollection();

        $this->setCreated(new \DateTime());
        $this->setUpdated(new \DateTime());
    }
    
    /**
     * @ORM\preUpdate
     */
    public function setUpdatedValue()
    {
    	$this->setUpdated(new \DateTime());
    }

    /**
     * Add commenti
     *
     * @param Aitam\IndexBundle\Entity\Commenti $commenti
     */
    public function addComment(\Aitam\IndexBundle\Entity\Commenti $commenti)
    {
        $this->commenti[] = $commenti;
    }

    /**
     * Get comments
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getCommenti()
    {
        return $this->commenti;
    }

    /**
     * Add commenti
     *
     * @param Aitam\IndexBundle\Entity\Commenti $commenti
     */
    public function addCommenti(\Aitam\IndexBundle\Entity\Commenti $commenti)
    {
        $this->commenti[] = $commenti;
    }
    
    public function __toString()
    {
    	return $this->getTitle();
    }

    /**
     * Set slug
     *
     * @param string $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $this->slugify($slug);
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }
}