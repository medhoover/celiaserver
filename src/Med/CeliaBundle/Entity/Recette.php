<?php

namespace Med\CeliaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recette
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Med\CeliaBundle\Entity\RecetteRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Recette
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;
    
    /**
     * @var integer
     * @ORM\Column(name="temp", type="smallint")
     */
    private $temp = 0;
    
    /**
    * @ORM\OneToOne(targetEntity="Med\CeliaBundle\Entity\Image", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $image;
    
    /**
    * @ORM\ManyToOne(targetEntity="Med\CeliaBundle\Entity\Categorie", inversedBy="recettes")
    * @ORM\JoinColumn(nullable=true)
    */
    private $categorie;
  
    /**
     * @var string
     *
     * @ORM\Column(name="ingredients", type="text")
     */
    private $ingredients;

    /**
     * @var string
     *
     * @ORM\Column(name="direction", type="text")
     */
    private $direction;

    
    /**
    * @ORM\PreRemove
    */ 
    public function decreaseCategorie(){
        
        $this->getCategorie()->decreaseNbRecette();
        
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
     * @return Recette
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
     * Set ingredients
     *
     * @param string $ingredients
     * @return Recette
     */
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;

        return $this;
    }

    /**
     * Get ingredients
     *
     * @return string 
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * Set direction
     *
     * @param string $direction
     * @return Recette
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;

        return $this;
    }

    /**
     * Get direction
     *
     * @return string 
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * Set image
     *
     * @param \Med\CeliaBundle\Entity\Image $image
     * @return Recette
     */
    public function setImage(\Med\CeliaBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \Med\CeliaBundle\Entity\Image 
     */
    public function getImage()
    {
        return $this->image;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set categorie
     *
     * @param \Med\CeliaBundle\Entity\Categorie $categorie
     * @return Recette
     */
    public function setCategorie(\Med\CeliaBundle\Entity\Categorie $categorie = null)
    {
        if ($this->categorie != null) $this->getCategorie()->decreaseNbRecette();
        $this->categorie = $categorie;
        $this->getCategorie()->increaseNbRecette();
        return $this;
    }

    /**
     * Get categorie
     *
     * @return \Med\CeliaBundle\Entity\Categorie 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set temp
     *
     * @param integer $temp
     * @return Recette
     */
    public function setTemp($temp)
    {
        $this->temp = $temp;

        return $this;
    }

    /**
     * Get temp
     *
     * @return integer 
     */
    public function getTemp()
    {
        return $this->temp;
    }
}
