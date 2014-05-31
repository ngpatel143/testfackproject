<?php
namespace Ibillmaker\Hub\CoreBundle\Controller;

use FOS\UserBundle\Controller\SecurityController as BaseController;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\SecurityContext;

/**
 * Backend security controller.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class SecurityController extends BaseController
{
    /**
     * Target action for _switch_user=_exit, redirects admin back to impersonated user
     *
     * @param string $username
     *
     * @return RedirectResponse
     *
     * @throws AccessDeniedException
     * @throws NotFoundHttpException
     */
    public function exitUserSwitchAction($username)
    {
        if (!$this->container->get('security.context')->isGranted('ROLE_SYLIUS_ADMIN')) {
            throw new AccessDeniedException();
        }

        $user = $this->container->get('sylius.repository.user')->findOneBy(array('usernameCanonical' => $username));

        if (!$user) {
            throw new NotFoundHttpException(sprintf('User with username %s does not exist.', $username));
        }

        return $this->redirect($this->generateUrl('sylius_backend_user_show', array('id' => $user->getId())));
    }

    /**
     * @param Request $request
     *
     * @return Response
     */
    public function loginAction(Request $request)
    {   
      
        $id = $request->get("companyUrlId");
        
        $url = $this->container->get('sylius.repository.user')->findOneBy(array('companyUrlId' => $id));
        
        if(!isset($url))
        {
            throw new \Exception('The product does not exist');
        }
        
        /** @var $session \Symfony\Component\HttpFoundation\Session\Session */
        $session = $request->getSession();
        $session->set('companyUrlId', $id);
       
        $error = null;

        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } elseif (null !== $session && $session->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }

        if ($error) {
            $error = $error->getMessage();
        }

        $lastUsername = (null === $session) ? '' : $session->get(SecurityContext::LAST_USERNAME);

          $csrfToken = $this->container->has('form.csrf_provider')
            ? $this->container->get('form.csrf_provider')->generateCsrfToken('authenticate')
            : null;


         return $this->renderLogin(array(
            'last_username' => $lastUsername,
            'error'         => $error,
            'token'         => $csrfToken,
            'companyUrlId' => $id
        )); 
    }

  protected function renderLogin(array $data)
    {
        $template = sprintf('FOSUserBundle:Security:login.html.%s', $this->container->getParameter('fos_user.template.engine'));

        return $this->container->get('templating')->renderResponse($template, $data);
    }

    public function checkAction()
    {
        throw new \RuntimeException('You must configure the check path to be handled by the firewall using form_login in your security firewall configuration.');
    }

    public function logoutAction()
    {
        throw new \RuntimeException('You must activate the logout in your security firewall configuration.');
    }
}