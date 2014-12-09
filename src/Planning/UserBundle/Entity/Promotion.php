<?php

namespace Planning\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promotion
 *
 * @ORM\Table(name="promotion", indexes={@ORM\Index(name="fk_promotion_eleve1_idx", columns={"eleve_ideleve"})})
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
     * @var \Eleve
     *
     * @ORM\ManyToOne(targetEntity="Eleve")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="eleve_ideleve", referencedColumnName="ideleve")
     * })
     */
    private $eleveeleve;



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

    /**
     * Set eleveeleve
     *
     * @param \Planning\UserBundle\Entity\Eleve $eleveeleve
     * @return Promotion
     */
    public function setEleveeleve(\Planning\UserBundle\Entity\Eleve $eleveeleve = null)
    {
        $this->eleveeleve = $eleveeleve;

        return $this;
    }

    /**
     * Get eleveeleve
     *
     * @return \Planning\UserBundle\Entity\Eleve 
     */
    public function getEleveeleve()
    {
        return $this->eleveeleve;
    }
}
