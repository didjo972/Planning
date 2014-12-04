<?php

namespace Planning\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classe
 *
 * @ORM\Table(name="classe")
 * @ORM\Entity
 */
class Classe
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idclasse", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idclasse;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=45, nullable=true)
     */
    private $libelle;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Promotion", mappedBy="classeclasse")
     */
    private $promotionpromotion;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->promotionpromotion = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Classe
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Get idclasse
     *
     * @return integer 
     */
    public function getIdclasse()
    {
        return $this->idclasse;
    }

    /**
     * Add promotionpromotion
     *
     * @param \Planning\Bundle\Entity\Promotion $promotionpromotion
     * @return Classe
     */
    public function addPromotionpromotion(\Planning\Bundle\Entity\Promotion $promotionpromotion)
    {
        $this->promotionpromotion[] = $promotionpromotion;

        return $this;
    }

    /**
     * Remove promotionpromotion
     *
     * @param \Planning\Bundle\Entity\Promotion $promotionpromotion
     */
    public function removePromotionpromotion(\Planning\Bundle\Entity\Promotion $promotionpromotion)
    {
        $this->promotionpromotion->removeElement($promotionpromotion);
    }

    /**
     * Get promotionpromotion
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPromotionpromotion()
    {
        return $this->promotionpromotion;
    }
}
