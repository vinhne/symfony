<?php

namespace Acme\SaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categogy
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Acme\SaleBundle\Entity\CategogyRepository")
 */
class Categogy
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=400)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="parent_id", type="integer")
     */
    private $parentId;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=300)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="conver_url", type="string", length=400)
     */
    private $converUrl;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;


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
     * Set name
     *
     * @param string $name
     * @return Categogy
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set parentId
     *
     * @param integer $parentId
     * @return Categogy
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Get parentId
     *
     * @return integer 
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Categogy
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
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
     * Set converUrl
     *
     * @param string $converUrl
     * @return Categogy
     */
    public function setConverUrl($converUrl)
    {
        $this->converUrl = $converUrl;

        return $this;
    }

    /**
     * Get converUrl
     *
     * @return string 
     */
    public function getConverUrl()
    {
        return $this->converUrl;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Categogy
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }
}
