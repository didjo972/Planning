<?php

namespace Planning\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promotion
 *
 * @ORM\Table(name="promotion")
 * @ORM\Entity
 */
class Promotion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idpromotion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpromotion;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_promotion", type="integer", nullable=true)
     */
    private $numPromotion;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Classe", inversedBy="promotionpromotion")
     * @ORM\JoinTable(name="promotion_has_classe",
     *   joinColumns={
     *     @ORM\JoinColumn(name="promotion_idpromotion", referencedColumnName="idpromotion")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="classe_idclasse", referencedColumnName="idclasse")
     *   }
     * )
     */
    private $classeclasse;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->classeclasse = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
