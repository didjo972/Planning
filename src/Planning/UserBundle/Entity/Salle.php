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
     * @ORM\Column(name="occuper", type="integer", nullable=true)
     */
    private $occuper;

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
     * Set occuper
     *
     * @param integer $occuper
     * @return Salle
     */
    public function setOccuper($occuper)
    {
        $this->occuper = $occuper;

        return $this;
    }

    /**
     * Get occuper
     *
     * @return integer 
     */
    public function getOccuper()
    {
        return $this->occuper;
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
