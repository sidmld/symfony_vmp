<?php

namespace VMP\PortailBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Budget
 *
 * @ORM\Table(name="budget")
 * @ORM\Entity(repositoryClass="VMP\PortailBundle\Repository\BudgetRepository")
 */
class Budget
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
     * @var float
     *
     * @ORM\Column(name="impot", type="float", nullable=true)
     */
    private $impot;


    /**
     * Get id
     *
     * @return int
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
     * @return Budget
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
     * @return Budget
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
     * @return Budget
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return int
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
     * @return Budget
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
     * Set impot
     *
     * @param float $impot
     *
     * @return Budget
     */
    public function setImpot($impot)
    {
        $this->impot = $impot;

        return $this;
    }

    /**
     * Get impot
     *
     * @return float
     */
    public function getImpot()
    {
        return $this->impot;
    }
    
     public function __toString(){
        // to show the name of the Category in the select
        return $this->nom;
        // to show the id of the Category in the select
        // return $this->id;
    }
}
