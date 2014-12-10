<?php

namespace Planning\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promotion
 *
 * @ORM\Table(name="promotion")
 * @ORM\Entity
 */
class Promotion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idpromotion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpromotion;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_promotion", type="integer", nullable=true)
     */
    private $numPromotion;



    /**
     * Get idpromotion
     *
     * @return integer 
     */
    public function getIdpromotion()
    {
        return $this->idpromotion;
    }

    /**
     * Set numPromotion
     *
     * @param integer $numPromotion
     * @return Promotion
     */
    public function setNumPromotion($numPromotion)
    {
        $this->numPromotion = $numPromotion;

        return $this;
    }

    /**
     * Get numPromotion
     *
     * @return integer 
     */
    public function getNumPromotion()
    {
        return $this->numPromotion;
    }
}
