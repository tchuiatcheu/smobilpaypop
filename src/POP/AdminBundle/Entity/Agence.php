<?php

namespace POP\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agence
 *
 * @ORM\Table(name="Agence")
 * @ORM\Entity(repositoryClass="POP\AdminBundle\Repository\AgenceRepository")
 */
class Agence
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
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=255)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="decimal", precision=10, scale=5)
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="decimal", precision=10, scale=5)
     */
    private $latitude;

    /**
     * @var \POP\AdminBundle\Entity\Quartier
     *
     * @ORM\ManyToOne(targetEntity="POP\AdminBundle\Entity\Quartier")
     * @ORM\JoinColumn(nullable=false)
     */
    private $quartier;


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
     * @return Agence
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
     * Set logo
     *
     * @param string $logo
     * @return Agence
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return Agence
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Agence
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     * @return Agence
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     * @return Agence
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set Quartier
     *
     * @param \POP\AdminBundle\Entity\Quartier $quartier
     * @return Agence
     */
    public function setQuartier(\POP\AdminBundle\Entity\Quartier $quartier)
    {
        $this->quartier = $quartier;

        return $this;
    }

    /**
     * Get Quartier
     *
     * @return \POP\AdminBundle\Entity\Quartier 
     */
    public function getQuartier()
    {
        return $this->quartier;
    }
}
