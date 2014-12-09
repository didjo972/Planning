<?php

namespace Planning\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cours
 *
 * @ORM\Table(name="cours", indexes={@ORM\Index(name="fk_cours_promotion1_idx", columns={"promotion_idpromotion"}), @ORM\Index(name="fk_cours_matière1_idx", columns={"matiere_idMatiere"}), @ORM\Index(name="fk_cours_professeur1_idx", columns={"professeur_idprofesseur"})})
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
     * @var \Promotion
     *
     * @ORM\ManyToOne(targetEntity="Promotion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="promotion_idpromotion", referencedColumnName="idpromotion")
     * })
     */
    private $promotionpromotion;

    /**
     * @var \Matiere
     *
     * @ORM\ManyToOne(targetEntity="Matiere")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="matiere_idMatiere", referencedColumnName="idMatiere")
     * })
     */
    private $matierematiere;

    /**
     * @var \Professeur
     *
     * @ORM\ManyToOne(targetEntity="Professeur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="professeur_idprofesseur", referencedColumnName="idprofesseur")
     * })
     */
    private $professeurprofesseur;



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
     * Set promotionpromotion
     *
     * @param \Planning\UserBundle\Entity\Promotion $promotionpromotion
     * @return Cours
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

    /**
     * Set matierematiere
     *
     * @param \Planning\UserBundle\Entity\Matiere $matierematiere
     * @return Cours
     */
    public function setMatierematiere(\Planning\UserBundle\Entity\Matiere $matierematiere = null)
    {
        $this->matierematiere = $matierematiere;

        return $this;
    }

    /**
     * Get matierematiere
     *
     * @return \Planning\UserBundle\Entity\Matiere 
     */
    public function getMatierematiere()
    {
        return $this->matierematiere;
    }

    /**
     * Set professeurprofesseur
     *
     * @param \Planning\UserBundle\Entity\Professeur $professeurprofesseur
     * @return Cours
     */
    public function setProfesseurprofesseur(\Planning\UserBundle\Entity\Professeur $professeurprofesseur = null)
    {
        $this->professeurprofesseur = $professeurprofesseur;

        return $this;
    }

    /**
     * Get professeurprofesseur
     *
     * @return \Planning\UserBundle\Entity\Professeur 
     */
    public function getProfesseurprofesseur()
    {
        return $this->professeurprofesseur;
    }
}
