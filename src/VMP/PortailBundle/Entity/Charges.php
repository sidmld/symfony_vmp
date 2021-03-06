<?php

namespace VMP\PortailBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Charges
 *
 * @ORM\Table(name="charges")
 * @ORM\Entity(repositoryClass="VMP\PortailBundle\Repository\ChargesRepository")
 */
class Charges
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
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="mois", type="string", length=10, nullable=true)
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
     * @var string
     *
     * @ORM\Column(name="autre", type="string", length=255, nullable=true)
     */
    private $autre;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="VMP\UserBundle\Entity\User", inversedBy="charges")
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
     * Set type
     *
     * @param string $type
     *
     * @return Charges
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
     * @return Charges
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
     * @return Charges
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
     * @return Charges
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
     * Set autre
     *
     * @param string $autre
     *
     * @return Charges
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
     * @return Charges
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
        return $this->type;
        // to show the id of the Category in the select
        // return $this->id;
    }
}
