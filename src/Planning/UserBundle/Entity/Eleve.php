<?php

namespace Planning\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Eleve
 *
 * @ORM\Table(name="eleve", indexes={@ORM\Index(name="fk_eleve_user1_idx", columns={"user_id"}), @ORM\Index(name="fk_eleve_promotion1_idx", columns={"promotion_idpromotion"})})
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
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \Promotion
     *
     * @ORM\ManyToOne(targetEntity="Promotion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="promotion_idpromotion", referencedColumnName="idpromotion")
     * })
     */
    private $promotionpromotion;



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
     * Set user
     *
     * @param \Planning\UserBundle\Entity\User $user
     * @return Eleve
     */
    public function setUser(\Planning\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Planning\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set promotionpromotion
     *
     * @param \Planning\UserBundle\Entity\Promotion $promotionpromotion
     * @return Eleve
     */
    public function setPromotionpromotion(\Planning\UserBundle\Entity\Promotion $promotionpromotion = null)
    {
        $this->promotionpromotion = $promotionpromotion;

        return $this;
    }

    /**
     * Get promotionpromotion
     *
     * @return \Planning\UserBundle\Entity\Promotion 
     */
    public function getPromotionpromotion()
    {
        return $this->promotionpromotion;
    }
}
