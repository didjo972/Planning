<?php

namespace Planning\Bundle\Entity;

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


}
