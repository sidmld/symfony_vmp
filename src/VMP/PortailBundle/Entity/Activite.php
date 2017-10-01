<?php

namespace VMP\PortailBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activite
 *
 * @ORM\Table(name="activite")
 * @ORM\Entity(repositoryClass="VMP\PortailBundle\Repository\ActiviteRepository")
 */
class Activite
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
     * @ORM\Column(name="mois", type="string", length=20, nullable=true)
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
     * @ORM\Column(name="reel", type="float", nullable=true)
     */
    private $reel;

    /**
     * @var float
     *
     * @ORM\Column(name="budget", type="float", nullable=true)
     */
    private $budget;

    /**
     * @var float
     *
     * @ORM\Column(name="ecart", type="float", nullable=true)
     */
    private $ecart;

    /**
     * @var string
     *
     * @ORM\Column(name="autre", type="string", length=255, nullable=true)
     */
    private $autre;
    
    
    
    /**
     * @ORM\ManyToOne(targetEntity="VMP\UserBundle\Entity\User", inversedBy="activites" , cascade={"persist"})
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
     * @return Activite
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
     * Set mois
     *
     * @param string $mois
     *
     * @return Activite
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
     * @return Activite
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
     * Set reel
     *
     * @param float $reel
     *
     * @return Activite
     */
    public function setReel($reel)
    {
        $this->reel = $reel;

        return $this;
    }

    /**
     * Get reel
     *
     * @return float
     */
    public function getReel()
    {
        return $this->reel;
    }

    /**
     * Set budget
     *
     * @param float $budget
     *
     * @return Activite
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;

        return $this;
    }

    /**
     * Get budget
     *
     * @return float
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * Set ecart
     *
     * @param float $ecart
     *
     * @return Activite
     */
    public function setEcart($ecart)
    {
        $this->ecart = $ecart;

        return $this;
    }

    /**
     * Get ecart
     *
     * @return float
     */
    public function getEcart()
    {
        return $this->ecart;
    }

    /**
     * Set autre
     *
     * @param string $autre
     *
     * @return Activite
     */
    public function setAutre($autre)
    {
        $this->autre = $autre;

        return $this;
    }

    /**
     * Get autre
     *
     * @return string
     */
    public function getAutre()
    {
        return $this->autre;
    }

    /**
     * Set societe
     *
     * @param \VMP\UserBundle\Entity\User $societe
     *
     * @return Activite
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
}
