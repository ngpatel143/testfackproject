<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_98872f7865aec79b0b85b3788fb34e04ad9e61aaa7f8d1596ec1a11545346937 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SyliusWebBundle:Frontend:layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SyliusWebBundle:Frontend:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"page-header\">
    <h1>Login <small>Sylius store</small></h1>
</div>

";
        // line 8
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 9
            echo "    <div class=\"alert alert-danger\">
        ";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
            echo "
    </div>
";
        }
        // line 13
        echo "
<blockquote>
  <p>Please login using \"<strong>sylius@example.com</strong>\" email and \"<strong>sylius</strong>\" as password.</p>
  <small>Mr. Sylius Demo Guide</small>
</blockquote>

<form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-horizontal\">
<fieldset>
    <div class=\"form-group\">
        <label for=\"username\" class=\"col-sm-3 control-label\">Email</label>
        <div class=\"col-sm-9\">
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" class=\"form-control\" />
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"password\" class=\"col-sm-3 control-label\">Password</label>
        <div class=\"col-sm-9\">
            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" />
        </div>
    </div>
    <div class=\"form-group\">
        <div class=\"col-sm-offset-3 col-sm-9\">
            <div class=\"checkbox\">
                <label for=\"remember_me\">
                    Remember me? &nbsp; <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                </label>
            </div>
        </div>
    </div>
</fieldset>
<div class=\"form-actions clearfix\">
    <div class=\"pull-right\">
        ";
        // line 45
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("hwi_oauth_connect"));
        echo "
    </div>
    <button type=\"submit\" class=\"btn btn-primary btn-lg\" name=\"login\"><i class=\"icon-lock\"></i> Login</button>
</div>
</form>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 45,  64 => 24,  56 => 19,  48 => 13,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,);
    }
}
