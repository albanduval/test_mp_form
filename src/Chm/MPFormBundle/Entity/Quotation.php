<?php

namespace Chm\MPFormBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Devis
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Chm\MPFormBundle\Entity\QuotationRepository")
 */
class Quotation
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
     * @var Chm\MPFormBundle\Entity\Size
     *
     * @ORM\ManyToOne(targetEntity="Size", inversedBy="quotations")
     * @ORM\JoinColumn(name="size_id", referencedColumnName="id")
     */
    private $size;

    /**
     * @var Chm\MPFormBundle\Entity\Color
     *
     * @ORM\ManyToOne(targetEntity="Color", inversedBy="quotations")
     * @ORM\JoinColumn(name="color_id", referencedColumnName="id")
     */
    private $color;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

    /**
     * @var integer
     *
     * @ORM\Column(name="front_color_count", type="integer")
     */
    private $front_color_count;

    /**
     * @var integer
     *
     * @ORM\Column(name="back_color_count", type="integer")
     */
    private $back_color_count;

    /**
     * @var Chm\MPFormBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="quotations")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;


    /**
     * @var Chm\MPFormBundle\Entity\Size
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="quotations")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set size
     *
     * @param \stdClass $size
     * @return Quotation
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return \stdClass 
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return Quotation
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set user
     *
     * @param \stdClass $user
     * @return Quotation
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \stdClass 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set color
     *
     * @param \Chm\MPFormBundle\Entity\Color $color
     * @return Quotation
     */
    public function setColor(\Chm\MPFormBundle\Entity\Color $color = null)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return \Chm\MPFormBundle\Entity\Color 
     */
    public function getColor()
    {
        return $this->color;
    }
    /**
     * Set front_color_count
     *
     * @param integer $frontColorCount
     * @return Quotation
     */
    public function setFrontColorCount($frontColorCount)
    {
        $this->front_color_count = $frontColorCount;

        return $this;
    }

    /**
     * Get front_color_count
     *
     * @return integer 
     */
    public function getFrontColorCount()
    {
        return $this->front_color_count;
    }

    /**
     * Set back_color_count
     *
     * @param integer $backColorCount
     * @return Quotation
     */
    public function setBackColorCount($backColorCount)
    {
        $this->back_color_count = $backColorCount;

        return $this;
    }

    /**
     * Get back_color_count
     *
     * @return integer 
     */
    public function getBackColorCount()
    {
        return $this->back_color_count;
    }
}
