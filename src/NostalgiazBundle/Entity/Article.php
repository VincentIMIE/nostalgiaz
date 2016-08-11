<?php

namespace NostalgiazBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="NostalgiazBundle\Repository\ArticleRepository")
 */
class Article
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
     * @ORM\Column(name="auteur_article", type="string", length=255)
     */
    private $auteurArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu_article", type="text")
     */
    private $contenuArticle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_article", type="datetime")
     */
    private $dateArticle;


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
     * Set auteurArticle
     *
     * @param string $auteurArticle
     *
     * @return Article
     */
    public function setAuteurArticle($auteurArticle)
    {
        $this->auteurArticle = $auteurArticle;

        return $this;
    }

    /**
     * Get auteurArticle
     *
     * @return string
     */
    public function getAuteurArticle()
    {
        return $this->auteurArticle;
    }

    /**
     * Set contenuArticle
     *
     * @param string $contenuArticle
     *
     * @return Article
     */
    public function setContenuArticle($contenuArticle)
    {
        $this->contenuArticle = $contenuArticle;

        return $this;
    }

    /**
     * Get contenuArticle
     *
     * @return string
     */
    public function getContenuArticle()
    {
        return $this->contenuArticle;
    }

    /**
     * Set dateArticle
     *
     * @param \DateTime $dateArticle
     *
     * @return Article
     */
    public function setDateArticle($dateArticle)
    {
        $this->dateArticle = $dateArticle;

        return $this;
    }

    /**
     * Get dateArticle
     *
     * @return \DateTime
     */
    public function getDateArticle()
    {
        return $this->dateArticle;
    }
}

