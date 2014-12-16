<?php

namespace Planning\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cours
 *
 * @ORM\Table(name="cours")
 * @ORM\Entity
 */
class Cours
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcours", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcours;

    /**
     * @var integer
     *
     * @ORM\Column(name="dure", type="integer", nullable=true)
     */
    private $dure;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date", nullable=true)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date", nullable=true)
     */
    private $dateFin;
    
    /**
     * @ORM\ManyToOne(targetEntity="Planning\UserBundle\Entity\Professeur", cascade={"persist"})
     * @ORM\JoinColumn(referencedColumnName="idprofesseur")
     */
    private $professeuridprofesseur;
    
    /**
     * @ORM\OneToOne(targetEntity="Planning\UserBundle\Entity\Matiere", cascade={"persist"})
     * @ORM\JoinColumn(referencedColumnName="idMatiere")
     */
    private $matiereidmatiere;
    
    /**
     * @ORM\ManyToOne(targetEntity="Planning\UserBundle\Entity\Promotion", cascade={"persist"})
     * @ORM\JoinColumn(referencedColumnName="idpromotion")
     */
    private $promotionidpromotion;


    /**
     * Get idcours
     *
     * @return integer 
     */
    public function getIdcours()
    {
        return $this->idcours;
    }

    /**
     * Set dure
     *
     * @param integer $dure
     * @return Cours
     */
    public function setDure($dure)
    {
        $this->dure = $dure;

        return $this;
    }

    /**
     * Get dure
     *
     * @return integer 
     */
    public function getDure()
    {
        return $this->dure;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     * @return Cours
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime 
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return Cours
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set professeuridprofesseur
     *
     * @param \Planning\UserBundle\Entity\Professeur $professeuridprofesseur
     * @return Cours
     */
    public function setProfesseuridprofesseur(\Planning\UserBundle\Entity\Professeur $professeuridprofesseur = null)
    {
        $this->professeuridprofesseur = $professeuridprofesseur;

        return $this;
    }

    /**
     * Get professeuridprofesseur
     *
     * @return \Planning\UserBundle\Entity\Professeur 
     */
    public function getProfesseuridprofesseur()
    {
        return $this->professeuridprofesseur;
    }

    /**
     * Set matiereidmatiere
     *
     * @param \Planning\UserBundle\Entity\Matiere $matiereidmatiere
     * @return Cours
     */
    public function setMatiereidmatiere(\Planning\UserBundle\Entity\Matiere $matiereidmatiere = null)
    {
        $this->matiereidmatiere = $matiereidmatiere;

        return $this;
    }

    /**
     * Get matiereidmatiere
     *
     * @return \Planning\UserBundle\Entity\Matiere 
     */
    public function getMatiereidmatiere()
    {
        return $this->matiereidmatiere;
    }

    /**
     * Set promotionidpromotion
     *
     * @param \Planning\UserBundle\Entity\Promotion $promotionidpromotion
     * @return Cours
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
