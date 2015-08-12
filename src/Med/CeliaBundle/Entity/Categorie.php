<?php

namespace Med\CeliaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;

/**
 * @ORM\Entity(repositoryClass="Med\CeliaBundle\Entity\CategorieRepository")
 * @ExclusionPolicy("all")
 */
class Categorie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @Expose
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;
    
    /**
     *
     * @ORM\OneToMany(targetEntity="Med\CeliaBundle\Entity\Recette", mappedBy="categorie")
     */
    private $recettes;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbRecette", type="integer", nullable=true)
     */
    private $nbRecette = 0;


    public function increaseNbRecette(){
        $this->nbRecette++;
    }
    public function decreaseNbRecette(){
        $this->nbRecette--;
    }
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
     * @return Categorie
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
     * Set nbRecette
     *
     * @param integer $nbRecette
     * @return Categorie
     */
    public function setNbRecette($nbRecette)
    {
        $this->nbRecette = $nbRecette;

        return $this;
    }

    /**
     * Get nbRecette
     *
     * @return integer 
     */
    public function getNbRecette()
    {
        return $this->nbRecette;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->recettes = new \Doctrine\Common\Collections\ArrayCollection();
        
    }


    /**
     * Add recettes
     *
     * @param \Med\CeliaBundle\Entity\Recette $recettes
     * @return Categorie
     */
    public function addRecette(\Med\CeliaBundle\Entity\Recette $recettes)
    {
        $this->recettes[] = $recettes;

        return $this;
    }

    /**
     * Remove recettes
     *
     * @param \Med\CeliaBundle\Entity\Recette $recettes
     */
    public function removeRecette(\Med\CeliaBundle\Entity\Recette $recettes)
    {
        $this->recettes->removeElement($recettes);
    }

    /**
     * Get recettes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRecettes()
    {
        return $this->recettes;
    }
}
