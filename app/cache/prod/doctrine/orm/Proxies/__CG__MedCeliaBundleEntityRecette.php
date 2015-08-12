<?php

namespace Proxies\__CG__\Med\CeliaBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Recette extends \Med\CeliaBundle\Entity\Recette implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Med\\CeliaBundle\\Entity\\Recette' . "\0" . 'id', '' . "\0" . 'Med\\CeliaBundle\\Entity\\Recette' . "\0" . 'nom', '' . "\0" . 'Med\\CeliaBundle\\Entity\\Recette' . "\0" . 'temp', '' . "\0" . 'Med\\CeliaBundle\\Entity\\Recette' . "\0" . 'image', '' . "\0" . 'Med\\CeliaBundle\\Entity\\Recette' . "\0" . 'categorie', '' . "\0" . 'Med\\CeliaBundle\\Entity\\Recette' . "\0" . 'ingredients', '' . "\0" . 'Med\\CeliaBundle\\Entity\\Recette' . "\0" . 'direction');
        }

        return array('__isInitialized__', '' . "\0" . 'Med\\CeliaBundle\\Entity\\Recette' . "\0" . 'id', '' . "\0" . 'Med\\CeliaBundle\\Entity\\Recette' . "\0" . 'nom', '' . "\0" . 'Med\\CeliaBundle\\Entity\\Recette' . "\0" . 'temp', '' . "\0" . 'Med\\CeliaBundle\\Entity\\Recette' . "\0" . 'image', '' . "\0" . 'Med\\CeliaBundle\\Entity\\Recette' . "\0" . 'categorie', '' . "\0" . 'Med\\CeliaBundle\\Entity\\Recette' . "\0" . 'ingredients', '' . "\0" . 'Med\\CeliaBundle\\Entity\\Recette' . "\0" . 'direction');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Recette $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function decreaseCategorie()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'decreaseCategorie', array());

        return parent::decreaseCategorie();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', array($nom));

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', array());

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setIngredients($ingredients)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIngredients', array($ingredients));

        return parent::setIngredients($ingredients);
    }

    /**
     * {@inheritDoc}
     */
    public function getIngredients()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIngredients', array());

        return parent::getIngredients();
    }

    /**
     * {@inheritDoc}
     */
    public function setDirection($direction)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDirection', array($direction));

        return parent::setDirection($direction);
    }

    /**
     * {@inheritDoc}
     */
    public function getDirection()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDirection', array());

        return parent::getDirection();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage(\Med\CeliaBundle\Entity\Image $image = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', array($image));

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', array());

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategorie(\Med\CeliaBundle\Entity\Categorie $categorie = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategorie', array($categorie));

        return parent::setCategorie($categorie);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategorie()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategorie', array());

        return parent::getCategorie();
    }

    /**
     * {@inheritDoc}
     */
    public function setTemp($temp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTemp', array($temp));

        return parent::setTemp($temp);
    }

    /**
     * {@inheritDoc}
     */
    public function getTemp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTemp', array());

        return parent::getTemp();
    }

}