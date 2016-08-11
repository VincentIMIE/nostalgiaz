<?php

namespace NostalgiazBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass="NostalgiazBundle\Repository\UtilisateurRepository")
 */
class Utilisateur
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
     * @ORM\Column(name="nom_utilisateur", type="string", length=255)
     */
    private $nomUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_utilisateur", type="string", length=255)
     */
    private $prenomUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="login_utilisateur", type="string", length=255, unique=true)
     */
    private $loginUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="email_utilisateur", type="string", length=255)
     */
    private $emailUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp_utilisateur", type="string", length=255)
     */
    private $mdpUtilisateur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance_utilisateur", type="datetime")
     */
    private $dateNaissanceUtilisateur;


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
     * Set nomUtilisateur
     *
     * @param string $nomUtilisateur
     *
     * @return Utilisateur
     */
    public function setNomUtilisateur($nomUtilisateur)
    {
        $this->nomUtilisateur = $nomUtilisateur;

        return $this;
    }

    /**
     * Get nomUtilisateur
     *
     * @return string
     */
    public function getNomUtilisateur()
    {
        return $this->nomUtilisateur;
    }

    /**
     * Set prenomUtilisateur
     *
     * @param string $prenomUtilisateur
     *
     * @return Utilisateur
     */
    public function setPrenomUtilisateur($prenomUtilisateur)
    {
        $this->prenomUtilisateur = $prenomUtilisateur;

        return $this;
    }

    /**
     * Get prenomUtilisateur
     *
     * @return string
     */
    public function getPrenomUtilisateur()
    {
        return $this->prenomUtilisateur;
    }

    /**
     * Set loginUtilisateur
     *
     * @param string $loginUtilisateur
     *
     * @return Utilisateur
     */
    public function setLoginUtilisateur($loginUtilisateur)
    {
        $this->loginUtilisateur = $loginUtilisateur;

        return $this;
    }

    /**
     * Get loginUtilisateur
     *
     * @return string
     */
    public function getLoginUtilisateur()
    {
        return $this->loginUtilisateur;
    }

    /**
     * Set emailUtilisateur
     *
     * @param string $emailUtilisateur
     *
     * @return Utilisateur
     */
    public function setEmailUtilisateur($emailUtilisateur)
    {
        $this->emailUtilisateur = $emailUtilisateur;

        return $this;
    }

    /**
     * Get emailUtilisateur
     *
     * @return string
     */
    public function getEmailUtilisateur()
    {
        return $this->emailUtilisateur;
    }

    /**
     * Set mdpUtilisateur
     *
     * @param string $mdpUtilisateur
     *
     * @return Utilisateur
     */
    public function setMdpUtilisateur($mdpUtilisateur)
    {
        $this->mdpUtilisateur = $mdpUtilisateur;

        return $this;
    }

    /**
     * Get mdpUtilisateur
     *
     * @return string
     */
    public function getMdpUtilisateur()
    {
        return $this->mdpUtilisateur;
    }

    /**
     * Set dateNaissanceUtilisateur
     *
     * @param \DateTime $dateNaissanceUtilisateur
     *
     * @return Utilisateur
     */
    public function setDateNaissanceUtilisateur($dateNaissanceUtilisateur)
    {
        $this->dateNaissanceUtilisateur = $dateNaissanceUtilisateur;

        return $this;
    }

    /**
     * Get dateNaissanceUtilisateur
     *
     * @return \DateTime
     */
    public function getDateNaissanceUtilisateur()
    {
        return $this->dateNaissanceUtilisateur;
    }

    /**
     * toString
     * @return string
     */
    public function __toString() 
    {
        return $this->prenomUtilisateur;
    }

}

