<?php

namespace POP\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quartier
 *
 * @ORM\Table(name="Quartier")
 * @ORM\Entity(repositoryClass="POP\AdminBundle\Repository\QuartierRepository")
 */
class Quartier
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var bool
     *
     * @ORM\Column(name="actif", type="boolean")
     */
    private $actif;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime")
     */
    private $dateCreation;

    /**
     * @var \POP\AdminBundle\Entity\Ville
     *
     * @ORM\ManyToOne(targetEntity="POP\AdminBundle\Entity\Ville")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ville;


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
     * @return Quartier
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
     * Set actif
     *
     * @param boolean $actif
     * @return Quartier
     */
    public function setActif($actif)
    {
        $this->actif = $actif;

        return $this;
    }

    /**
     * Get actif
     *
     * @return boolean 
     */
    public function getActif()
    {
        return $this->actif;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Quartier
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

    public function __construct()
    {
        $this->dateCreation = new \DateTime();
    }

    /**
     * Set Ville
     *
     * @param \POP\AdminBundle\Entity\Ville $ville
     * @return Quartier
     */
    public function setVille(\POP\AdminBundle\Entity\Ville $ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get Ville
     *
     * @return \POP\AdminBundle\Entity\Ville 
     */
    public function getVille()
    {
        return $this->ville;
    }
}
