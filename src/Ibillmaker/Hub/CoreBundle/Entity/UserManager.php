<?php
namespace Ibillmaker\Hub\CoreBundle\Entity;

use FOS\UserBundle\Model\UserManager as BaseUserManager;
class UserManager extends BaseUserManager
{
    public function __construct(EncoderFactoryInterface $encoderFactory, CanonicalizerInterface $usernameCanonicalizer, CanonicalizerInterface $emailCanonicalizer, ObjectManager $om, $class)
    {
        parent::__construct($encoderFactory, $usernameCanonicalizer, $emailCanonicalizer, $om, $class);
    }
    
    /**
     * Finds a user by username
     *
     * @param string $username
     *
     * @return UserInterface
     */
    public function findUserByUsername($username,$companyId)
    {
        return $this->findUserBy(array('usernameCanonical' => $this->canonicalizeUsername($username)));
    }

}

?>