<?php

namespace VMP\PortailBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlanCompt
 *
 * @ORM\Table(name="plan_compt")
 * @ORM\Entity(repositoryClass="VMP\PortailBundle\Repository\PlanComptRepository")
 */
class PlanCompt
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
     * @ORM\Column(name="operation", type="string", length=255, nullable=true)
     */
    private $operation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var float
     *
     * @ORM\Column(name="chiffre", type="float", nullable=true)
     */
    private $chiffre;

    /**
     * @var string
     *
     * @ORM\Column(name="autre", type="string", length=255, nullable=true)
     */
    private $autre;


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
     * @return PlanCompt
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
     * Set operation
     *
     * @param string $operation
     *
     * @return PlanCompt
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;

        return $this;
    }

    /**
     * Get operation
     *
     * @return string
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return PlanCompt
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
     * Set chiffre
     *
     * @param float $chiffre
     *
     * @return PlanCompt
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
     * Set autre
     *
     * @param string $autre
     *
     * @return PlanCompt
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
}

