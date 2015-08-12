<?php

namespace Med\CeliaBundle\Entity;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use Doctrine\ORM\Mapping as ORM;

/**
 * Marque
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Med\CeliaBundle\Entity\MarqueRepository")
 * @ExclusionPolicy("all")
 */
class Marque
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
     *
     * @ORM\OneToMany(targetEntity="Med\CeliaBundle\Entity\Produit", mappedBy="marque")
     */
    private $produits;
    /**
     * @var string
     * @Expose
     * @ORM\Column(name="nomMarque", type="string", length=255)
     */
    
    private $nomMarque;

    
    /**
     * @var integer
     *
     * @ORM\Column(name="nbProd", type="integer", nullable=true)
     */
    private $nbProd = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbProdAutorise", type="integer", nullable=true)
     */
    private $nbProdAutorise = 0;


    public function increaseNbProd(){
        $this->nbProd++;
    }
    public function decreaseNbProd(){
        $this->nbProd--;
    }
    public function increaseNbProdAutorise(){
        $this->nbProdAutorise++;
    }
    public function decreaseNbProdAutorise(){
        $this->nbProdAutorise--;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->produits = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nomMarque
     *
     * @param string $nomMarque
     * @return Marque
     */
    public function setNomMarque($nomMarque)
    {
        $this->nomMarque = $nomMarque;

        return $this;
    }

    /**
     * Get nomMarque
     *
     * @return string 
     */
    public function getNomMarque()
    {
        return $this->nomMarque;
    }

    /**
     * Set nbProd
     *
     * @param integer $nbProd
     * @return Marque
     */
    public function setNbProd($nbProd)
    {
        $this->nbProd = $nbProd;

        return $this;
    }

    /**
     * Get nbProd
     *
     * @return integer 
     */
    public function getNbProd()
    {
        return $this->nbProd;
    }

    /**
     * Set nbProdAutorise
     *
     * @param integer $nbProdAutorise
     * @return Marque
     */
    public function setNbProdAutorise($nbProdAutorise)
    {
        $this->nbProdAutorise = $nbProdAutorise;

        return $this;
    }

    /**
     * Get nbProdAutorise
     *
     * @return integer 
     */
    public function getNbProdAutorise()
    {
        return $this->nbProdAutorise;
    }

    /**
     * Add produits
     *
     * @param \Med\CeliaBundle\Entity\Produit $produits
     * @return Marque
     */
    public function addProduit(\Med\CeliaBundle\Entity\Produit $produits)
    {
        $this->produits[] = $produits;

        return $this;
    }

    /**
     * Remove produits
     *
     * @param \Med\CeliaBundle\Entity\Produit $produits
     */
    public function removeProduit(\Med\CeliaBundle\Entity\Produit $produits)
    {
        $this->produits->removeElement($produits);
    }

    /**
     * Get produits
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProduits()
    {
        return $this->produits;
    }
}
