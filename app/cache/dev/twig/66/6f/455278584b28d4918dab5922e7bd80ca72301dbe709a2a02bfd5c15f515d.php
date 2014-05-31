<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_666f455278584b28d4918dab5922e7bd80ca72301dbe709a2a02bfd5c15f515d extends Twig_Template
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
    <h1>Registration <small>Create an account in store</small></h1>
</div>

<form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" method=\"post\" class=\"form-horizontal\" novalidate>
    <fieldset class=\"well\">
        ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 11
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), 'row');
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </fieldset>
    <div class=\"form-actions clearfix\">
        <div class=\"pull-right\">
            ";
        // line 16
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("hwi_oauth_connect"));
        echo "
        </div>
        <button type=\"submit\" class=\"btn btn-success btn-lg\"><i class=\"icon-user\"></i> Register</button>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  55 => 13,  46 => 11,  42 => 10,  37 => 8,  31 => 4,  28 => 3,);
    }
}
