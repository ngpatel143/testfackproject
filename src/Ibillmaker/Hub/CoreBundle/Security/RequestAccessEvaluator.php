<?php
namespace Ibillmaker\Hub\CoreBundle\Security;

use Symfony\Component\DependencyInjection\ContainerInterface;
use JMS\DiExtraBundle\Annotation as DI;

/** @DI\Service */
class RequestAccessEvaluator
{
    private $container;

    /**
     * @DI\InjectParams({
     *     "container" = @DI\Inject("service_container"),
     * })
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /** @DI\SecurityFunction("isLocalUser") */
    public function isLocalUser()
    {
        return $this->container->get('request')->getClientIp() === '127.0.0.1';
    }
}