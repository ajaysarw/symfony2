<?php    
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Products")
 */
class Product
{
    /**
     * @ORM\Column(type="integer", name="ProductId")
     * @ORM\id
     * @ORM\GeneratedValue(strategy="AUTO")
     * 
     */
    protected $ProductId;
    
    /**
     * @ORM\Column(type="string", length=100, name="ProductName")
     */
    protected $ProductName;       


    /**
     * Get productId
     *
     * @return integer
     */
    public function getProductId()
    {
        return $this->ProductId;
    }

    /**
     * Set productName
     *
     * @param string $productName
     *
     * @return Product
     */
    public function setProductName($productName)
    {
        $this->ProductName = $productName;

        return $this;
    }

    /**
     * Get productName
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->ProductName;
    }
}
