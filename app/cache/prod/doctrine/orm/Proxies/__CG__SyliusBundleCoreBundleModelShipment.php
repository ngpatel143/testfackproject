<?php

namespace Proxies\__CG__\Sylius\Bundle\CoreBundle\Model;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Shipment extends \Sylius\Bundle\CoreBundle\Model\Shipment implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'order', 'id', 'state', 'method', 'items', 'tracking', 'createdAt', 'updatedAt');
        }

        return array('__isInitialized__', 'order', 'id', 'state', 'method', 'items', 'tracking', 'createdAt', 'updatedAt');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Shipment $proxy) {
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
    public function getOrder()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrder', array());

        return parent::getOrder();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrder(\Sylius\Bundle\CoreBundle\Model\OrderInterface $order = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrder', array($order));

        return parent::setOrder($order);
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
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
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
    public function getState()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getState', array());

        return parent::getState();
    }

    /**
     * {@inheritDoc}
     */
    public function setState($state)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setState', array($state));

        return parent::setState($state);
    }

    /**
     * {@inheritDoc}
     */
    public function getMethod()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMethod', array());

        return parent::getMethod();
    }

    /**
     * {@inheritDoc}
     */
    public function setMethod(\Sylius\Bundle\ShippingBundle\Model\ShippingMethodInterface $method)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMethod', array($method));

        return parent::setMethod($method);
    }

    /**
     * {@inheritDoc}
     */
    public function getItems()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getItems', array());

        return parent::getItems();
    }

    /**
     * {@inheritDoc}
     */
    public function hasItem(\Sylius\Bundle\ShippingBundle\Model\ShipmentItemInterface $item)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasItem', array($item));

        return parent::hasItem($item);
    }

    /**
     * {@inheritDoc}
     */
    public function addItem(\Sylius\Bundle\ShippingBundle\Model\ShipmentItemInterface $item)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addItem', array($item));

        return parent::addItem($item);
    }

    /**
     * {@inheritDoc}
     */
    public function removeItem(\Sylius\Bundle\ShippingBundle\Model\ShipmentItemInterface $item)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeItem', array($item));

        return parent::removeItem($item);
    }

    /**
     * {@inheritDoc}
     */
    public function getShippables()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShippables', array());

        return parent::getShippables();
    }

    /**
     * {@inheritDoc}
     */
    public function getTracking()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTracking', array());

        return parent::getTracking();
    }

    /**
     * {@inheritDoc}
     */
    public function setTracking($tracking)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTracking', array($tracking));

        return parent::setTracking($tracking);
    }

    /**
     * {@inheritDoc}
     */
    public function isTracked()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isTracked', array());

        return parent::isTracked();
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
    public function getShippingItemCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShippingItemCount', array());

        return parent::getShippingItemCount();
    }

    /**
     * {@inheritDoc}
     */
    public function getShippingItemTotal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShippingItemTotal', array());

        return parent::getShippingItemTotal();
    }

}