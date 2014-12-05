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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Classe", inversedBy="promotionpromotion")
     * @ORM\JoinTable(name="promotion_has_classe",
     *   joinColumns={
     *     @ORM\JoinColumn(name="promotion_idpromotion", referencedColumnName="idpromotion")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="classe_idclasse", referencedColumnName="idclasse")
     *   }
     * )
     */
    private $classeclasse;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->classeclasse = new \Doctrine\Common\Collections\ArrayCollection();
    }


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
     * Add classeclasse
     *
     * @param \Planning\UserBundle\Entity\Classe $classeclasse
     * @return Promotion
     */
    public function addClasseclasse(\Planning\UserBundle\Entity\Classe $classeclasse)
    {
        $this->classeclasse[] = $classeclasse;

        return $this;
    }

    /**
     * Remove classeclasse
     *
     * @param \Planning\UserBundle\Entity\Classe $classeclasse
     */
    public function removeClasseclasse(\Planning\UserBundle\Entity\Classe $classeclasse)
    {
        $this->classeclasse->removeElement($classeclasse);
    }

    /**
     * Get classeclasse
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getClasseclasse()
    {
        return $this->classeclasse;
    }
}
