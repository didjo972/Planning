<?php

namespace Planning\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Site
 *
 * @ORM\Table(name="site", indexes={@ORM\Index(name="fk_Site_salle1_idx", columns={"salle_idsalle"})})
 * @ORM\Entity
 */
class Site
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idSite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsite;

    /**
     * @var string
     *
     * @ORM\Column(name="libellé", type="string", length=255, nullable=true)
     */
    private $libell�;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var \Salle
     *
     * @ORM\ManyToOne(targetEntity="Salle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="salle_idsalle", referencedColumnName="idsalle")
     * })
     */
    private $sallesalle;



    /**
     * Get idsite
     *
     * @return integer 
     */
    public function getIdsite()
    {
        return $this->idsite;
    }

    /**
     * Set libell�
     *
     * @param string $libell�
     * @return Site
     */
    public function setLibell�($libell�)
    {
        $this->libell� = $libell�;

        return $this;
    }

    /**
     * Get libell�
     *
     * @return string 
     */
    public function getLibell�()
    {
        return $this->libell�;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Site
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set sallesalle
     *
     * @param \Planning\UserBundle\Entity\Salle $sallesalle
     * @return Site
     */
    public function setSallesalle(\Planning\UserBundle\Entity\Salle $sallesalle = null)
    {
        $this->sallesalle = $sallesalle;

        return $this;
    }

    /**
     * Get sallesalle
     *
     * @return \Planning\UserBundle\Entity\Salle 
     */
    public function getSallesalle()
    {
        return $this->sallesalle;
    }
}
