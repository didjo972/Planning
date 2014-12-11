<?php

namespace Planning\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Professeur
 *
 * @ORM\Table(name="professeur")
 * @ORM\Entity
 */
class Professeur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idprofesseur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprofesseur;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;
    
    /**
     * @ORM\OneToOne(targetEntity="Planning\UserBundle\Entity\User", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $useriduser;


    /**
     * Get idprofesseur
     *
     * @return integer 
     */
    public function getIdprofesseur()
    {
        return $this->idprofesseur;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Professeur
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
     * @return Professeur
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
     * @return Professeur
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
}
