<?php

namespace JM\BilleterieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Billet
 *
 * @ORM\Table(name="billet")
 * @ORM\Entity(repositoryClass="JM\BilleterieBundle\Repository\BilletRepository")
 */
class Billet
{
    
    public function __construct()
    {
        $this->dateCreation = new \DateTime();
        $this->dateNaissance = new \DateTime();
        $this->dateNaissance->modify('-26 years');
        $this->payer = false;
        $this->prix = 125;
    }
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="date")
     */
    private $dateCreation;
    
    /**
     * @var bool
     *
     * @ORM\Column(name="demiJour", type="boolean")
     */
    private $demiJour;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateReservation", type="date")
     */
    private $dateReservation;

    /**
     * @var string
     *
     * @ORM\Column(name="codeUnique", type="string", length=255, unique=true)
     */
    private $codeUnique;

    /**
     * @var bool
     *
     * @ORM\Column(name="tarifReduit", type="boolean")
     */
    private $tarifReduit;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=125)
     */
    private $pays;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissance", type="date")
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var bool
     *
     * @ORM\Column(name="payer", type="boolean")
     */
    private $payer;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer")
     */
    private $prix;

    /**
     * @ORM\ManyToOne(targetEntity="JM\BilleterieBundle\Entity\Panier")
     */
    private $panier;
    
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
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Billet
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
     * Set dateReservation
     *
     * @param \DateTime $dateReservation
     *
     * @return Billet
     */
    public function setDateReservation($dateReservation)
    {
        $this->dateReservation = $dateReservation;

        return $this;
    }

    /**
     * Get dateReservation
     *
     * @return \DateTime
     */
    public function getDateReservation()
    {
        return $this->dateReservation;
    }

    /**
     * Set codeUnique
     *
     * @param string $codeUnique
     *
     * @return Billet
     */
    public function setCodeUnique($codeUnique)
    {
        $this->codeUnique = $codeUnique;

        return $this;
    }

    /**
     * Get codeUnique
     *
     * @return string
     */
    public function getCodeUnique()
    {
        return $this->codeUnique;
    }

    /**
     * Set tarifReduit
     *
     * @param boolean $tarifReduit
     *
     * @return Billet
     */
    public function setTarifReduit($tarifReduit)
    {
        $this->tarifReduit = $tarifReduit;

        return $this;
    }

    /**
     * Get tarifReduit
     *
     * @return bool
     */
    public function getTarifReduit()
    {
        return $this->tarifReduit;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Billet
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Billet
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set pays
     *
     * @param string $pays
     *
     * @return Billet
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     *
     * @return Billet
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Billet
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
    
    public function getMajeur()
    {
        return $this->majeur;
    }
    
    public function setMajeur($majeur)
    {
        $this->majeur = $majeur;

        return $this;
    }
    
    /**
     * Set demiJour
     *
     * @param boolean $demiJour
     *
     * @return Billet
     */
    public function setDemiJour($demiJour)
    {
        $this->demiJour = $demiJour;

        return $this;
    }

    /**
     * Get demiJour
     *
     * @return boolean
     */
    public function getDemiJour()
    {
        return $this->demiJour;
    }

    /**
     * Set payer
     *
     * @param boolean $payer
     *
     * @return Billet
     */
    public function setPayer($payer)
    {
        $this->payer = $payer;

        return $this;
    }

    /**
     * Get payer
     *
     * @return boolean
     */
    public function getPayer()
    {
        return $this->payer;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     *
     * @return Billet
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set moinsDeQuatreAns
     *
     * @param boolean $moinsDeQuatreAns
     *
     * @return Billet
     */
    public function setBilletValider($billetValider)
    {
        $this->billetValider = $billetValider;

        return $this;
    }

    /**
     * Get moinsDeQuatreAns
     *
     * @return boolean
     */
    public function getBilletValider()
    {
        return $this->billetValider;
    }
    
    public function getAge()
    {
        $anniv = $this->getDateNaissance();
        $age = $anniv->diff(new \DateTime(), true)->y;
        return $age;
    }

    /**
     * Set panier
     *
     * @param \JM\BilleterieBundle\Entity\Panier $panier
     *
     * @return Billet
     */
    public function setPanier(\JM\BilleterieBundle\Entity\Panier $panier = null)
    {
        $this->panier = $panier;

        return $this;
    }

    /**
     * Get panier
     *
     * @return \JM\BilleterieBundle\Entity\Panier
     */
    public function getPanier()
    {
        return $this->panier;
    }
}