<?php

namespace Proxies\__CG__\Netelip\UserBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Task extends \Netelip\UserBundle\Entity\Task implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', 'user', '' . "\0" . 'Netelip\\UserBundle\\Entity\\Task' . "\0" . 'id', '' . "\0" . 'Netelip\\UserBundle\\Entity\\Task' . "\0" . 'title', '' . "\0" . 'Netelip\\UserBundle\\Entity\\Task' . "\0" . 'description', '' . "\0" . 'Netelip\\UserBundle\\Entity\\Task' . "\0" . 'status', '' . "\0" . 'Netelip\\UserBundle\\Entity\\Task' . "\0" . 'cratedAt', '' . "\0" . 'Netelip\\UserBundle\\Entity\\Task' . "\0" . 'updateAt'];
        }

        return ['__isInitialized__', 'user', '' . "\0" . 'Netelip\\UserBundle\\Entity\\Task' . "\0" . 'id', '' . "\0" . 'Netelip\\UserBundle\\Entity\\Task' . "\0" . 'title', '' . "\0" . 'Netelip\\UserBundle\\Entity\\Task' . "\0" . 'description', '' . "\0" . 'Netelip\\UserBundle\\Entity\\Task' . "\0" . 'status', '' . "\0" . 'Netelip\\UserBundle\\Entity\\Task' . "\0" . 'cratedAt', '' . "\0" . 'Netelip\\UserBundle\\Entity\\Task' . "\0" . 'updateAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Task $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus($status)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setCratedAt($cratedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCratedAt', [$cratedAt]);

        return parent::setCratedAt($cratedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCratedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCratedAt', []);

        return parent::getCratedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdateAt($updateAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdateAt', [$updateAt]);

        return parent::setUpdateAt($updateAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdateAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdateAt', []);

        return parent::getUpdateAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCratedAtValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCratedAtValue', []);

        return parent::setCratedAtValue();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdateAtValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdateAtValue', []);

        return parent::setUpdateAtValue();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(\Netelip\UserBundle\Entity\User $user = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

}