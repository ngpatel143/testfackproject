<?php

namespace Ibillmaker\Hub\CoreBundle\Entity;

use Sylius\Bundle\CoreBundle\Model\User as BaseUser;
    
class User extends BaseUser {

    protected $companyUrlId;
    protected $companyName;

    public function __construct() 
    {
        parent::__construct();
    }

    public function __get($property) 
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value) 
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }

        return $this;
    }

}
