<?php

namespace VMP\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
/**
 * User
 *
 * @ORM\Table(name="societe")
 * @ORM\Entity(repositoryClass="VMP\UserBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

     /**
     * @var string
     *
     * @ORM\Column(name="nomsociete", type="string", length=255, nullable=true)
     */
    protected $nomsociete;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="date", nullable=true)
     */
    protected $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255, nullable=true)
     */
   protected $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=true)
     */
    protected $address;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=true)
     */
    protected $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="siteweb", type="string", length=255, nullable=true)
     */
    protected $siteweb;

 

    /**
     * @var int
     *
     * @ORM\Column(name="telephone", type="integer", nullable=true)
     */
    protected $telephone;

    /**
     * @var int
     *
     * @ORM\Column(name="code", type="integer", nullable=true)
     */
    protected $code;

    /**
     * @var float
     *
     * @ORM\Column(name="affaire", type="float", nullable=true)
     */
    protected $chiffre;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    protected $type;

  

    /**
     * @var string
     *
     * @ORM\Column(name="autre", type="string", length=255, nullable=true)
     */
    protected $autre;
    
     /**
     * @ORM\OneToOne(targetEntity="VMP\PortailBundle\Entity\Budget" , cascade={"persist"})
     */
     protected $budget;
     
     
     /**
     * @ORM\ManyToMany(targetEntity="VMP\PortailBundle\Entity\Client" , cascade={"persist"})
     */
    protected $clients;
     
    /**
     * @ORM\ManyToMany(targetEntity="VMP\PortailBundle\Entity\Fournisseur" , cascade={"persist"})
     */
    protected $fournisseurs;
    
     /**
     * @ORM\OneToMany(targetEntity="VMP\PortailBundle\Entity\Personnel", mappedBy="societe" , cascade={"persist"})
     */
    protected $personnel;
   
    /**
     * @ORM\OneToMany(targetEntity="VMP\PortailBundle\Entity\Produit",mappedBy="societe" , cascade={"persist"})
     */
    protected $produit;

    /**
     * Set nomsociete
     *
     * @param string $nomsociete
     *
     * @return User
     */
    public function setNomsociete($nomsociete)
    {
        $this->nomsociete = $nomsociete;

        return $this;
    }

    /**
     * Get nomsociete
     *
     * @return string
     */
    public function getNomsociete()
    {
        return $this->nomsociete;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return User
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return User
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return User
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return User
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set siteweb
     *
     * @param string $siteweb
     *
     * @return User
     */
    public function setSiteweb($siteweb)
    {
        $this->siteweb = $siteweb;

        return $this;
    }

    /**
     * Get siteweb
     *
     * @return string
     */
    public function getSiteweb()
    {
        return $this->siteweb;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     *
     * @return User
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return integer
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set code
     *
     * @param integer $code
     *
     * @return User
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return integer
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set chiffre
     *
     * @param float $chiffre
     *
     * @return User
     */
    public function setChiffre($chiffre)
    {
        $this->chiffre = $chiffre;

        return $this;
    }

    /**
     * Get chiffre
     *
     * @return float
     */
    public function getChiffre()
    {
        return $this->chiffre;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return User
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
     * Set autre
     *
     * @param string $autre
     *
     * @return User
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
     * Set budget
     *
     * @param \VMP\PortailBundle\Entity\Budget $budget
     *
     * @return User
     */
    public function setBudget(\VMP\PortailBundle\Entity\Budget $budget = null)
    {
        $this->budget = $budget;

        return $this;
    }

    /**
     * Get budget
     *
     * @return \VMP\PortailBundle\Entity\Budget
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * Add client
     *
     * @param \VMP\PortailBundle\Entity\Client $client
     *
     * @return User
     */
    public function addClient(\VMP\PortailBundle\Entity\Client $client)
    {
        $this->clients[] = $client;

        return $this;
    }

    /**
     * Remove client
     *
     * @param \VMP\PortailBundle\Entity\Client $client
     */
    public function removeClient(\VMP\PortailBundle\Entity\Client $client)
    {
        $this->clients->removeElement($client);
    }

    /**
     * Get clients
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClients()
    {
        return $this->clients;
    }

    /**
     * Add fournisseur
     *
     * @param \VMP\PortailBundle\Entity\Fournisseur $fournisseur
     *
     * @return User
     */
    public function addFournisseur(\VMP\PortailBundle\Entity\Fournisseur $fournisseur)
    {
        $this->fournisseurs[] = $fournisseur;

        return $this;
    }

    /**
     * Remove fournisseur
     *
     * @param \VMP\PortailBundle\Entity\Fournisseur $fournisseur
     */
    public function removeFournisseur(\VMP\PortailBundle\Entity\Fournisseur $fournisseur)
    {
        $this->fournisseurs->removeElement($fournisseur);
    }

    /**
     * Get fournisseurs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFournisseurs()
    {
        return $this->fournisseurs;
    }

    /**
     * Add personnel
     *
     * @param \VMP\PortailBundle\Entity\Personnel $personnel
     *
     * @return User
     */
    public function addPersonnel(\VMP\PortailBundle\Entity\Personnel $personnel)
    {
        $this->personnel[] = $personnel;

        return $this;
    }

    /**
     * Remove personnel
     *
     * @param \VMP\PortailBundle\Entity\Personnel $personnel
     */
    public function removePersonnel(\VMP\PortailBundle\Entity\Personnel $personnel)
    {
        $this->personnel->removeElement($personnel);
    }

    /**
     * Get personnel
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPersonnel()
    {
        return $this->personnel;
    }

    /**
     * Add produit
     *
     * @param \VMP\PortailBundle\Entity\Produit $produit
     *
     * @return User
     */
    public function addProduit(\VMP\PortailBundle\Entity\Produit $produit)
    {
        $this->produit[] = $produit;

        return $this;
    }

    /**
     * Remove produit
     *
     * @param \VMP\PortailBundle\Entity\Produit $produit
     */
    public function removeProduit(\VMP\PortailBundle\Entity\Produit $produit)
    {
        $this->produit->removeElement($produit);
    }

    /**
     * Get produit
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProduit()
    {
        return $this->produit;
    }
}
