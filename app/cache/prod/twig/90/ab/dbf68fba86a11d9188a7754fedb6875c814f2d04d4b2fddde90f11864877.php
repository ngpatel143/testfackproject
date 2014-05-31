<?php

/* SyliusWebBundle:Frontend/Homepage:main.html.twig */
class __TwigTemplate_90abdbf68fba86a11d9188a7754fedb6875c814f2d04d4b2fddde90f11864877 extends Twig_Template
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
        echo "<div class=\"jumbotron\">
    <h1>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.homepage.splash.headline"), "html", null, true);
        echo "</h1>
    <p class=\"lead\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.homepage.splash.subheadline"), "html", null, true);
        echo "</p>
</div>

";
        // line 9
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("sylius_partial_product_latest", array("limit" => 9, "template" => "SyliusWebBundle:Frontend/Product:latest.html.twig")));
        echo "

";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Frontend/Homepage:main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  38 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
