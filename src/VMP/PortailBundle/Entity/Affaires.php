<?php

namespace VMP\PortailBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Affaires
 *
 * @ORM\Table(name="affaires")
 * @ORM\Entity(repositoryClass="VMP\PortailBundle\Repository\AffairesRepository")
 */
class Affaires
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="mois", type="string", length=255, nullable=true)
     */
    private $mois;

    /**
     * @var int
     *
     * @ORM\Column(name="annee", type="integer", nullable=true)
     */
    private $annee;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", nullable=true)
     */
    private $montant;


    /**
     * @ORM\ManyToOne(targetEntity="VMP\UserBundle\Entity\User", inversedBy="affaires")
     * @ORM\JoinColumn(nullable=true)
     */
    protected $societe;
    
    
   

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Affaires
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
     * Set type
     *
     * @param string $type
     *
     * @return Affaires
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set mois
     *
     * @param string $mois
     *
     * @return Affaires
     */
    public function setMois($mois)
    {
        $this->mois = $mois;

        return $this;
    }

    /**
     * Get mois
     *
     * @return string
     */
    public function getMois()
    {
        return $this->mois;
    }

    /**
     * Set annee
     *
     * @param integer $annee
     *
     * @return Affaires
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return integer
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set montant
     *
     * @param float $montant
     *
     * @return Affaires
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set societe
     *
     * @param \VMP\UserBundle\Entity\User $societe
     *
     * @return Affaires
     */
    public function setSociete(\VMP\UserBundle\Entity\User $societe = null)
    {
        $this->societe = $societe;

        return $this;
    }

    /**
     * Get societe
     *
     * @return \VMP\UserBundle\Entity\User
     */
    public function getSociete()
    {
        return $this->societe;
    }
    
     public function __toString(){
        // to show the name of the Category in the select
        return $this->nom;
        // to show the id of the Category in the select
        // return $this->id;
    }
}
