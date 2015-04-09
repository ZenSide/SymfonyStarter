<?php

namespace ZenSide\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;

/**
 * Room
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ZenSide\DemoBundle\Entity\Repository\RoomRepository")
 */
class Room
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
     * @ORM\Column(name="width", type="integer")
     */
    private $width;

    /**
     * @var integer
     *
     * @ORM\Column(name="height", type="integer")
     */
    private $height;

    /**
     * @var integer
     *
     * @ORM\Column(name="length", type="integer")
     */
    private $length;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Furniture", mappedBy="room", cascade="persist")
     */
    private $furnitures;


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
     * Set width
     *
     * @param integer $width
     * @return Room
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return integer 
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set height
     *
     * @param integer $height
     * @return Room
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return integer 
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set length
     *
     * @param integer $length
     * @return Room
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get length
     *
     * @return integer 
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Room
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
     * Constructor
     */
    public function __construct()
    {
        $this->furnitures = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add furnitures
     *
     * @param \ZenSide\DemoBundle\Entity\Furniture $furnitures
     * @return Room
     */
    public function addFurniture(\ZenSide\DemoBundle\Entity\Furniture $furnitures)
    {
        $this->furnitures[] = $furnitures;

        return $this;
    }

    /**
     * Remove furnitures
     *
     * @param \ZenSide\DemoBundle\Entity\Furniture $furnitures
     */
    public function removeFurniture(\ZenSide\DemoBundle\Entity\Furniture $furnitures)
    {
        $this->furnitures->removeElement($furnitures);
    }

    /**
     * Get furnitures
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFurnitures()
    {
        return $this->furnitures;
    }
}
