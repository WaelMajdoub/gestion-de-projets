<?php

namespace Myapp\GestionProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departement
 *
 * @ORM\Table(name="departement")
 * @ORM\Entity(repositoryClass="Myapp\GestionProjetBundle\Repository\DepartementRepository")
 */
class Departement
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
     * @ORM\OneToMany(targetEntity="Employe", mappedBy="departement")
     */
    private $employe;


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
     * @return Departement
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
     * Constructor
     */
    public function __construct()
    {
        $this->employe = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add employe
     *
     * @param \Myapp\GestionProjetBundle\Entity\Employe $employe
     *
     * @return Departement
     */
    public function addEmploye(\Myapp\GestionProjetBundle\Entity\Employe $employe)
    {
        $this->employe[] = $employe;

        return $this;
    }

    /**
     * Remove employe
     *
     * @param \Myapp\GestionProjetBundle\Entity\Employe $employe
     */
    public function removeEmploye(\Myapp\GestionProjetBundle\Entity\Employe $employe)
    {
        $this->employe->removeElement($employe);
    }

    /**
     * Get employe
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEmploye()
    {
        return $this->employe;
    }
}
