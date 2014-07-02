<?php

namespace Acme\SaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product_Category
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Acme\SaleBundle\Entity\Product_CategoryRepository")
 */
class Product_Category
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
     * @var integer
     *
     * @ORM\Column(name="product_id", type="integer")
     */
    private $productId;

    /**
     * @var integer
     *
     * @ORM\Column(name="categogy_id", type="integer")
     */
    private $categogyId;


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
     * Set productId
     *
     * @param integer $productId
     * @return Product_Category
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return integer 
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set categogyId
     *
     * @param integer $categogyId
     * @return Product_Category
     */
    public function setCategogyId($categogyId)
    {
        $this->categogyId = $categogyId;

        return $this;
    }

    /**
     * Get categogyId
     *
     * @return integer 
     */
    public function getCategogyId()
    {
        return $this->categogyId;
    }
}
