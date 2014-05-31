<?php

namespace Proxies\__CG__\Sylius\Bundle\CoreBundle\Model;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class OrderItem extends \Sylius\Bundle\CoreBundle\Model\OrderItem implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'variant', 'inventoryUnits', 'id', 'order', 'quantity', 'unitPrice', 'adjustments', 'adjustmentsTotal', 'total');
        }

        return array('__isInitialized__', 'variant', 'inventoryUnits', 'id', 'order', 'quantity', 'unitPrice', 'adjustments', 'adjustmentsTotal', 'total');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (OrderItem $proxy) {
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
    public function getProduct()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProduct', array());

        return parent::getProduct();
    }

    /**
     * {@inheritDoc}
     */
    public function getVariant()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariant', array());

        return parent::getVariant();
    }

    /**
     * {@inheritDoc}
     */
    public function setVariant(\Sylius\Bundle\CoreBundle\Model\VariantInterface $variant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVariant', array($variant));

        return parent::setVariant($variant);
    }

    /**
     * {@inheritDoc}
     */
    public function equals(\Sylius\Bundle\OrderBundle\Model\OrderItemInterface $item)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'equals', array($item));

        return parent::equals($item);
    }

    /**
     * {@inheritDoc}
     */
    public function getInventoryUnits()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInventoryUnits', array());

        return parent::getInventoryUnits();
    }

    /**
     * {@inheritDoc}
     */
    public function addInventoryUnit(\Sylius\Bundle\CoreBundle\Model\InventoryUnitInterface $unit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addInventoryUnit', array($unit));

        return parent::addInventoryUnit($unit);
    }

    /**
     * {@inheritDoc}
     */
    public function removeInventoryUnit(\Sylius\Bundle\CoreBundle\Model\InventoryUnitInterface $unit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeInventoryUnit', array($unit));

        return parent::removeInventoryUnit($unit);
    }

    /**
     * {@inheritDoc}
     */
    public function hasInventoryUnit(\Sylius\Bundle\CoreBundle\Model\InventoryUnitInterface $unit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasInventoryUnit', array($unit));

        return parent::hasInventoryUnit($unit);
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
    public function getQuantity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuantity', array());

        return parent::getQuantity();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuantity($quantity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuantity', array($quantity));

        return parent::setQuantity($quantity);
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
    public function setOrder(\Sylius\Bundle\OrderBundle\Model\OrderInterface $order = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrder', array($order));

        return parent::setOrder($order);
    }

    /**
     * {@inheritDoc}
     */
    public function getUnitPrice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnitPrice', array());

        return parent::getUnitPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setUnitPrice($unitPrice)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUnitPrice', array($unitPrice));

        return parent::setUnitPrice($unitPrice);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdjustments()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdjustments', array());

        return parent::getAdjustments();
    }

    /**
     * {@inheritDoc}
     */
    public function addAdjustment(\Sylius\Bundle\OrderBundle\Model\AdjustmentInterface $adjustment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAdjustment', array($adjustment));

        return parent::addAdjustment($adjustment);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAdjustment(\Sylius\Bundle\OrderBundle\Model\AdjustmentInterface $adjustment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAdjustment', array($adjustment));

        return parent::removeAdjustment($adjustment);
    }

    /**
     * {@inheritDoc}
     */
    public function hasAdjustment(\Sylius\Bundle\OrderBundle\Model\AdjustmentInterface $adjustment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasAdjustment', array($adjustment));

        return parent::hasAdjustment($adjustment);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdjustmentsTotal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdjustmentsTotal', array());

        return parent::getAdjustmentsTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function clearAdjustments()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'clearAdjustments', array());

        return parent::clearAdjustments();
    }

    /**
     * {@inheritDoc}
     */
    public function calculateAdjustmentsTotal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'calculateAdjustmentsTotal', array());

        return parent::calculateAdjustmentsTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function getTotal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotal', array());

        return parent::getTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotal($total)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotal', array($total));

        return parent::setTotal($total);
    }

    /**
     * {@inheritDoc}
     */
    public function calculateTotal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'calculateTotal', array());

        return parent::calculateTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function merge(\Sylius\Bundle\OrderBundle\Model\OrderItemInterface $orderItem, $throwOnInvalid = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'merge', array($orderItem, $throwOnInvalid));

        return parent::merge($orderItem, $throwOnInvalid);
    }

}