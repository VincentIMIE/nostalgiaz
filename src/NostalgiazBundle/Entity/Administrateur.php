<?php

namespace NostalgiazBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Administrateur
 *
 * @ORM\Table(name="administrateur")
 * @ORM\Entity(repositoryClass="NostalgiazBundle\Repository\AdministrateurRepository")
 */
class Administrateur
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
     * @ORM\Column(name="login_admin", type="string", length=255)
     */
    private $loginAdmin;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp_admin", type="string", length=255)
     */
    private $mdpAdmin;


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
     * Set loginAdmin
     *
     * @param string $loginAdmin
     *
     * @return Administrateur
     */
    public function setLoginAdmin($loginAdmin)
    {
        $this->loginAdmin = $loginAdmin;

        return $this;
    }

    /**
     * Get loginAdmin
     *
     * @return string
     */
    public function getLoginAdmin()
    {
        return $this->loginAdmin;
    }

    /**
     * Set mdpAdmin
     *
     * @param string $mdpAdmin
     *
     * @return Administrateur
     */
    public function setMdpAdmin($mdpAdmin)
    {
        $this->mdpAdmin = $mdpAdmin;

        return $this;
    }

    /**
     * Get mdpAdmin
     *
     * @return string
     */
    public function getMdpAdmin()
    {
        return $this->mdpAdmin;
    }
}

