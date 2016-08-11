<?php

namespace NostalgiazBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity(repositoryClass="NostalgiazBundle\Repository\ProduitRepository")
 */
class Produit
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
     * @ORM\Column(name="nom_produit", type="string", length=255)
     */
    private $nomProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="prix_ht_produit", type="string", length=255)
     */
    private $prixHtProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="prix_tva_produit", type="string", length=255)
     */
    private $prixTvaProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="prix_ttc_produit", type="string", length=255)
     */
    private $prixTtcProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="reference_produit", type="string", length=255)
     */
    private $referenceProduit;


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
     * Set nomProduit
     *
     * @param string $nomProduit
     *
     * @return Produit
     */
    public function setNomProduit($nomProduit)
    {
        $this->nomProduit = $nomProduit;

        return $this;
    }

    /**
     * Get nomProduit
     *
     * @return string
     */
    public function getNomProduit()
    {
        return $this->nomProduit;
    }

    /**
     * Set prixHtProduit
     *
     * @param string $prixHtProduit
     *
     * @return Produit
     */
    public function setPrixHtProduit($prixHtProduit)
    {
        $this->prixHtProduit = $prixHtProduit;

        return $this;
    }

    /**
     * Get prixHtProduit
     *
     * @return string
     */
    public function getPrixHtProduit()
    {
        return $this->prixHtProduit;
    }

    /**
     * Set prixTvaProduit
     *
     * @param string $prixTvaProduit
     *
     * @return Produit
     */
    public function setPrixTvaProduit($prixTvaProduit)
    {
        $this->prixTvaProduit = $prixTvaProduit;

        return $this;
    }

    /**
     * Get prixTvaProduit
     *
     * @return string
     */
    public function getPrixTvaProduit()
    {
        return $this->prixTvaProduit;
    }

    /**
     * Set prixTtcProduit
     *
     * @param string $prixTtcProduit
     *
     * @return Produit
     */
    public function setPrixTtcProduit($prixTtcProduit)
    {
        $this->prixTtcProduit = $prixTtcProduit;

        return $this;
    }

    /**
     * Get prixTtcProduit
     *
     * @return string
     */
    public function getPrixTtcProduit()
    {
        return $this->prixTtcProduit;
    }

    /**
     * Set referenceProduit
     *
     * @param string $referenceProduit
     *
     * @return Produit
     */
    public function setReferenceProduit($referenceProduit)
    {
        $this->referenceProduit = $referenceProduit;

        return $this;
    }

    /**
     * Get referenceProduit
     *
     * @return string
     */
    public function getReferenceProduit()
    {
        return $this->referenceProduit;
    }
}

