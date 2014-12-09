<?php

namespace Planning\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salle
 *
 * @ORM\Table(name="salle", indexes={@ORM\Index(name="fk_salle_cours1_idx", columns={"cours_idcours"})})
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
     * @ORM\Column(name="num_salle", type="integer", nullable=true)
     */
    private $numSalle;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_PC", type="integer", nullable=true)
     */
    private $nbPc;

    /**
     * @var \Cours
     *
     * @ORM\ManyToOne(targetEntity="Cours")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cours_idcours", referencedColumnName="idcours")
     * })
     */
    private $courscours;



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
     * Set courscours
     *
     * @param \Planning\UserBundle\Entity\Cours $courscours
     * @return Salle
     */
    public function setCourscours(\Planning\UserBundle\Entity\Cours $courscours = null)
    {
        $this->courscours = $courscours;

        return $this;
    }

    /**
     * Get courscours
     *
     * @return \Planning\UserBundle\Entity\Cours 
     */
    public function getCourscours()
    {
        return $this->courscours;
    }
}
