<?php

namespace Planning\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salle
 *
 * @ORM\Table(name="salle")
 * @ORM\Entity
 */
class Salle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idsalle", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsalle;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_salle", type="integer", nullable=false)
     */
    private $numSalle;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_PC", type="integer", nullable=true)
     */
    private $nbPc;

    /**
     * @ORM\ManyToOne(targetEntity="Planning\UserBundle\Entity\Site", cascade={"persist"})
     * @ORM\JoinColumn(referencedColumnName="idSite")
     */
    private $siteidsite;
    
    /**
     * @ORM\OneToOne(targetEntity="Planning\UserBundle\Entity\Cours", cascade={"persist"})
     * @ORM\JoinColumn(referencedColumnName="idcours")
     */
    private $coursidcours;


    /**
     * Get idsalle
     *
     * @return integer 
     */
    public function getIdsalle()
    {
        return $this->idsalle;
    }

    /**
     * Set numSalle
     *
     * @param integer $numSalle
     * @return Salle
     */
    public function setNumSalle($numSalle)
    {
        $this->numSalle = $numSalle;

        return $this;
    }

    /**
     * Get numSalle
     *
     * @return integer 
     */
    public function getNumSalle()
    {
        return $this->numSalle;
    }

    /**
     * Set nbPc
     *
     * @param integer $nbPc
     * @return Salle
     */
    public function setNbPc($nbPc)
    {
        $this->nbPc = $nbPc;

        return $this;
    }

    /**
     * Get nbPc
     *
     * @return integer 
     */
    public function getNbPc()
    {
        return $this->nbPc;
    }

    /**
     * Set siteidsite
     *
     * @param \Planning\UserBundle\Entity\Site $siteidsite
     * @return Salle
     */
    public function setSiteidsite(\Planning\UserBundle\Entity\Site $siteidsite = null)
    {
        $this->siteidsite = $siteidsite;

        return $this;
    }

    /**
     * Get siteidsite
     *
     * @return \Planning\UserBundle\Entity\Site 
     */
    public function getSiteidsite()
    {
        return $this->siteidsite;
    }

    /**
     * Set coursidcours
     *
     * @param \Planning\UserBundle\Entity\Cours $coursidcours
     * @return Salle
     */
    public function setCoursidcours(\Planning\UserBundle\Entity\Cours $coursidcours = null)
    {
        $this->coursidcours = $coursidcours;

        return $this;
    }

    /**
     * Get coursidcours
     *
     * @return \Planning\UserBundle\Entity\Cours 
     */
    public function getCoursidcours()
    {
        return $this->coursidcours;
    }
}
