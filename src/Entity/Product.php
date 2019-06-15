<?php
/**
 * Created by PhpStorm.
 * User: bw
 * Date: 25.04.2019
 * Time: 19:03
 */

namespace yozh\SandboxBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ApiResource()
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string")
     */
    private $name;
    
    /**
     * @ORM\Column(type="string")
     */
    private $price;
    
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }
    
    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }
    
    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }
}
