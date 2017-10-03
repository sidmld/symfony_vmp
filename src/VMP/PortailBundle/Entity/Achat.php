<?php

namespace VMP\PortailBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Achat
 *
 * @ORM\Table(name="achat")
 * @ORM\Entity(repositoryClass="VMP\PortailBundle\Repository\AchatRepository")
 */
class Achat
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
     * @var float
     *
     * @ORM\Column(name="prix", type="float", nullable=true)
     */
    private $prix;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var float
     *
     * @ORM\Column(name="qte", type="float", nullable=true)
     */
    private $qte;

    /**
     * @var string
     *
     * @ORM\Column(name="ref", type="string", length=255, nullable=true)
     */
    private $ref;

   

    /**
     * @var string
     *
     * @ORM\Column(name="autre", type="string", length=255, nullable=true)
     */
    private $autre;
    
    /**
     * @ORM\ManyToOne(targetEntity="VMP\PortailBundle\Entity\Fournisseur" , cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $fournisseur;

    /**
     * @ORM\ManyToOne(targetEntity="VMP\PortailBundle\Entity\Produit" , cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $produit;
    
    /**
     * @ORM\ManyToOne(targetEntity="VMP\PortailBundle\Entity\PlanCompt" , cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $plancompt;

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
     * Set prix
     *
     * @param float $prix
     *
     * @return Achat
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Achat
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set qte
     *
     * @param float $qte
     *
     * @return Achat
     */
    public function setQte($qte)
    {
        $this->qte = $qte;

        return $this;
    }

    /**
     * Get qte
     *
     * @return float
     */
    public function getQte()
    {
        return $this->qte;
    }

    /**
     * Set ref
     *
     * @param string $ref
     *
     * @return Achat
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Get ref
     *
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Set idProd
     *
     * @param integer $idProd
     *
     * @return Achat
     */
    public function setIdProd($idProd)
    {
        $this->idProd = $idProd;

        return $this;
    }


  


    /**
     * Set autre
     *
     * @param string $autre
     *
     * @return Achat
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
     * Set fournisseur
     *
     * @param \VMP\PortailBundle\Entity\Fournisseur $fournisseur
     *
     * @return Achat
     */
    public function setFournisseur(\VMP\PortailBundle\Entity\Fournisseur $fournisseur)
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }

    /**
     * Get fournisseur
     *
     * @return \VMP\PortailBundle\Entity\Fournisseur
     */
    public function getFournisseur()
    {
        return $this->fournisseur;
    }

    /**
     * Set produit
     *
     * @param \VMP\PortailBundle\Entity\Produit $produit
     *
     * @return Achat
     */
    public function setProduit(\VMP\PortailBundle\Entity\Produit $produit)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return \VMP\PortailBundle\Entity\Produit
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * Set plancompt
     *
     * @param \VMP\PortailBundle\Entity\PlanCompt $plancompt
     *
     * @return Achat
     */
    public function setPlancompt(\VMP\PortailBundle\Entity\PlanCompt $plancompt)
    {
        $this->plancompt = $plancompt;

        return $this;
    }

    /**
     * Get plancompt
     *
     * @return \VMP\PortailBundle\Entity\PlanCompt
     */
    public function getPlancompt()
    {
        return $this->plancompt;
    }
    
     public function __toString(){
        // to show the name of the Category in the select
        return $this->ref;
        // to show the id of the Category in the select
        // return $this->id;
    }
}
