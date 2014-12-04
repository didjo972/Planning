<?php

namespace Planning\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table(name="role")
 * @ORM\Entity
 */
class Role
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idrole", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrole;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=45, nullable=true)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="habilitation", type="string", length=45, nullable=true)
     */
    private $habilitation;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Utilisateur", inversedBy="rolerole")
     * @ORM\JoinTable(name="role_has_utilisateur",
     *   joinColumns={
     *     @ORM\JoinColumn(name="role_idrole", referencedColumnName="idrole")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="utilisateur_idutilisateur", referencedColumnName="idutilisateur")
     *   }
     * )
     */
    private $utilisateurutilisateur;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->utilisateurutilisateur = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
