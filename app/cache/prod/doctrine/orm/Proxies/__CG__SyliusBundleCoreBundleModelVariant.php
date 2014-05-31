<?php

namespace Proxies\__CG__\Sylius\Bundle\CoreBundle\Model;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Variant extends \Sylius\Bundle\CoreBundle\Model\Variant implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'sku', 'price', 'onHold', 'onHand', 'availableOnDemand', 'images', 'weight', 'width', 'height', 'depth', 'id', 'master', 'presentation', 'product', 'options', 'availableOn', 'createdAt', 'updatedAt', 'deletedAt');
        }

        return array('__isInitialized__', 'sku', 'price', 'onHold', 'onHand', 'availableOnDemand', 'images', 'weight', 'width', 'height', 'depth', 'id', 'master', 'presentation', 'product', 'options', 'availableOn', 'createdAt', 'updatedAt', 'deletedAt');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Variant $proxy) {
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
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getSku()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSku', array());

        return parent::getSku();
    }

    /**
     * {@inheritDoc}
     */
    public function setSku($sku)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSku', array($sku));

        return parent::setSku($sku);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice', array());

        return parent::getPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrice($price)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrice', array($price));

        return parent::setPrice($price);
    }

    /**
     * {@inheritDoc}
     */
    public function isInStock()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isInStock', array());

        return parent::isInStock();
    }

    /**
     * {@inheritDoc}
     */
    public function getOnHold()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOnHold', array());

        return parent::getOnHold();
    }

    /**
     * {@inheritDoc}
     */
    public function setOnHold($onHold)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOnHold', array($onHold));

        return parent::setOnHold($onHold);
    }

    /**
     * {@inheritDoc}
     */
    public function getOnHand()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOnHand', array());

        return parent::getOnHand();
    }

    /**
     * {@inheritDoc}
     */
    public function setOnHand($onHand)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOnHand', array($onHand));

        return parent::setOnHand($onHand);
    }

    /**
     * {@inheritDoc}
     */
    public function getInventoryName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInventoryName', array());

        return parent::getInventoryName();
    }

    /**
     * {@inheritDoc}
     */
    public function isAvailableOnDemand()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAvailableOnDemand', array());

        return parent::isAvailableOnDemand();
    }

    /**
     * {@inheritDoc}
     */
    public function setAvailableOnDemand($availableOnDemand)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAvailableOnDemand', array($availableOnDemand));

        return parent::setAvailableOnDemand($availableOnDemand);
    }

    /**
     * {@inheritDoc}
     */
    public function setDefaults(\Sylius\Bundle\VariableProductBundle\Model\VariantInterface $masterVariant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDefaults', array($masterVariant));

        return parent::setDefaults($masterVariant);
    }

    /**
     * {@inheritDoc}
     */
    public function getShippingCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShippingCategory', array());

        return parent::getShippingCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function hasImage(\Sylius\Bundle\CoreBundle\Model\VariantImageInterface $image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasImage', array($image));

        return parent::hasImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImages()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImages', array());

        return parent::getImages();
    }

    /**
     * {@inheritDoc}
     */
    public function addImage(\Sylius\Bundle\CoreBundle\Model\VariantImageInterface $image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addImage', array($image));

        return parent::addImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function removeImage(\Sylius\Bundle\CoreBundle\Model\VariantImageInterface $image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeImage', array($image));

        return parent::removeImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getWeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWeight', array());

        return parent::getWeight();
    }

    /**
     * {@inheritDoc}
     */
    public function setWeight($weight)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWeight', array($weight));

        return parent::setWeight($weight);
    }

    /**
     * {@inheritDoc}
     */
    public function getWidth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWidth', array());

        return parent::getWidth();
    }

    /**
     * {@inheritDoc}
     */
    public function setWidth($width)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWidth', array($width));

        return parent::setWidth($width);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHeight', array());

        return parent::getHeight();
    }

    /**
     * {@inheritDoc}
     */
    public function setHeight($height)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHeight', array($height));

        return parent::setHeight($height);
    }

    /**
     * {@inheritDoc}
     */
    public function getDepth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepth', array());

        return parent::getDepth();
    }

    /**
     * {@inheritDoc}
     */
    public function setDepth($depth)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDepth', array($depth));

        return parent::setDepth($depth);
    }

    /**
     * {@inheritDoc}
     */
    public function getShippingWeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShippingWeight', array());

        return parent::getShippingWeight();
    }

    /**
     * {@inheritDoc}
     */
    public function getShippingWidth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShippingWidth', array());

        return parent::getShippingWidth();
    }

    /**
     * {@inheritDoc}
     */
    public function getShippingHeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShippingHeight', array());

        return parent::getShippingHeight();
    }

    /**
     * {@inheritDoc}
     */
    public function getShippingDepth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShippingDepth', array());

        return parent::getShippingDepth();
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
    public function isMaster()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isMaster', array());

        return parent::isMaster();
    }

    /**
     * {@inheritDoc}
     */
    public function setMaster($master)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaster', array($master));

        return parent::setMaster($master);
    }

    /**
     * {@inheritDoc}
     */
    public function getPresentation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPresentation', array());

        return parent::getPresentation();
    }

    /**
     * {@inheritDoc}
     */
    public function setPresentation($presentation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPresentation', array($presentation));

        return parent::setPresentation($presentation);
    }

    /**
     * {@inheritDoc}
     */
    public function getProduct()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProduct', array());

        return parent::getProduct();
    }

    /**
     * {@inheritDoc}
     */
    public function setProduct(\Sylius\Bundle\VariableProductBundle\Model\VariableProductInterface $product = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProduct', array($product));

        return parent::setProduct($product);
    }

    /**
     * {@inheritDoc}
     */
    public function getOptions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOptions', array());

        return parent::getOptions();
    }

    /**
     * {@inheritDoc}
     */
    public function setOptions(\Doctrine\Common\Collections\Collection $options)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOptions', array($options));

        return parent::setOptions($options);
    }

    /**
     * {@inheritDoc}
     */
    public function addOption(\Sylius\Bundle\VariableProductBundle\Model\OptionValueInterface $option)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOption', array($option));

        return parent::addOption($option);
    }

    /**
     * {@inheritDoc}
     */
    public function removeOption(\Sylius\Bundle\VariableProductBundle\Model\OptionValueInterface $option)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeOption', array($option));

        return parent::removeOption($option);
    }

    /**
     * {@inheritDoc}
     */
    public function hasOption(\Sylius\Bundle\VariableProductBundle\Model\OptionValueInterface $option)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasOption', array($option));

        return parent::hasOption($option);
    }

    /**
     * {@inheritDoc}
     */
    public function isAvailable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAvailable', array());

        return parent::isAvailable();
    }

    /**
     * {@inheritDoc}
     */
    public function getAvailableOn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAvailableOn', array());

        return parent::getAvailableOn();
    }

    /**
     * {@inheritDoc}
     */
    public function setAvailableOn(\DateTime $availableOn)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAvailableOn', array($availableOn));

        return parent::setAvailableOn($availableOn);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', array());

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTime $createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', array($createdAt));

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', array());

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', array($updatedAt));

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function isDeleted()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isDeleted', array());

        return parent::isDeleted();
    }

    /**
     * {@inheritDoc}
     */
    public function getDeletedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeletedAt', array());

        return parent::getDeletedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeletedAt(\DateTime $deletedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeletedAt', array($deletedAt));

        return parent::setDeletedAt($deletedAt);
    }

}