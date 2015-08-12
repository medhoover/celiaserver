<?php

namespace Med\CeliaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Med\CeliaBundle\Entity\Marque;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;

/**
 * Produit
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Med\CeliaBundle\Entity\ProduitRepository")
 * @ORM\HasLifecycleCallbacks()
 * @ExclusionPolicy("all")
 */
class Produit
{
    /**
     * @var integer
     * @Expose
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
    * @ORM\OneToOne(targetEntity="Med\CeliaBundle\Entity\Image", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $image;

    
    /**
    * @ORM\ManyToOne(targetEntity="Med\CeliaBundle\Entity\Marque", inversedBy="produits")
    * @ORM\JoinColumn(nullable=true)
    * @Expose
    */
    private $marque;
    
    /**
     * @var boolean
     * @Expose
     * @ORM\Column(name="estAutorise", type="boolean")
     */
    private $estAutorise;

    /**
     * @var string
     * @Expose
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    
    
    /**
    * @ORM\PreRemove
    */ 
    public function decreaseMarque(){
        
        $this->getMarque()->decreaseNbProd();
        if ($this->getEstAutorise()) {
            $this->getMarque()->decreaseNbProdAutorise();
        }
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
     * @return Produit
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
     * Set estAutorise
     *
     * @param boolean $estAutorise
     * @return Produit
     */
    public function setEstAutorise($estAutorise)
    {
        $this->estAutorise = $estAutorise;

        return $this;
    }

    /**
     * Get estAutorise
     *
     * @return boolean 
     */
    public function getEstAutorise()
    {
        return $this->estAutorise;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Produit
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set image
     *
     * @param \Med\CeliaBundle\Entity\Image $image
     * @return Produit
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
     * Set marque
     *
     * @param \Med\CeliaBundle\Entity\Marque $marque
     * @return Produit
     */
    public function setMarque(Marque $marque)
    {
        if ($this->marque != null)            $this->decreaseMarque ();
        $this->marque = $marque;
        $this->getMarque()->increaseNbProd();
        if ($this->getEstAutorise()) {
            $this->getMarque()->increaseNbProdAutorise();
        }

        return $this;
    }

    /**
     * Get marque
     *
     * @return \Med\CeliaBundle\Entity\Marque 
     */
    public function getMarque()
    {
        return $this->marque;
    }
}
