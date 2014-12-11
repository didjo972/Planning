<?php

namespace Planning\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Eleve
 *
 * @ORM\Table(name="eleve")
 * @ORM\Entity
 */
class Eleve
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ideleve", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ideleve;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=45, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=true)
     */
    private $nom;
    
    /**
     * @ORM\OneToOne(targetEntity="Planning\UserBundle\Entity\User", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $useriduser;
    
    /**
     * @ORM\ManyToOne(targetEntity="Planning\UserBundle\Entity\Promotion", cascade={"persist"})
     * @ORM\JoinColumn(referencedColumnName="idpromotion")
     */
    private $promotionidpromotion;

    /**
     * Get ideleve
     *
     * @return integer 
     */
    public function getIdeleve()
    {
        return $this->ideleve;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Eleve
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Eleve
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set useriduser
     *
     * @param \Planning\UserBundle\Entity\User $useriduser
     * @return Eleve
     */
    public function setUseriduser(\Planning\UserBundle\Entity\User $useriduser)
    {
        $this->useriduser = $useriduser;

        return $this;
    }

    /**
     * Get useriduser
     *
     * @return \Planning\UserBundle\Entity\User 
     */
    public function getUseriduser()
    {
        return $this->useriduser;
    }

    /**
     * Set promotionidpromotion
     *
     * @param \Planning\UserBundle\Entity\Promotion $promotionidpromotion
     * @return Eleve
     */
    public function setPromotionidpromotion(\Planning\UserBundle\Entity\Promotion $promotionidpromotion = null)
    {
        $this->promotionidpromotion = $promotionidpromotion;

        return $this;
    }

    /**
     * Get promotionidpromotion
     *
     * @return \Planning\UserBundle\Entity\Promotion 
     */
    public function getPromotionidpromotion()
    {
        return $this->promotionidpromotion;
    }
}
