<?php

/* SyliusWebBundle::menu.html.twig */
class __TwigTemplate_518f81b425f833308f13d2f4b93ecb1f728a23102b4f37a62fd115576e3db714 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("knp_menu.html.twig");

        $this->blocks = array(
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_label($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "labelAttribute", array(0 => "icon"), "method")) {
            echo "<i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "labelAttribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>";
        }
        // line 5
        echo "    ";
        if ((!$this->getAttribute((isset($context["item"]) ? $context["item"] : null), "labelAttribute", array(0 => "iconOnly"), "method"))) {
            // line 6
            echo "        ";
            if (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "allow_safe_labels") && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
                echo $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label"));
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label")), "html", null, true);
            }
            // line 7
            echo "    ";
        }
        // line 8
        echo "    ";
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "labelAttribute", array(0 => "data-image"), "method")) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "labelAttribute", array(0 => "data-image"), "method"), "sylius_small", true), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "name"), "html", null, true);
            echo "\" class=\"menu-thumbnail\"/>";
        }
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 8,  48 => 7,  385 => 121,  359 => 119,  355 => 114,  351 => 112,  348 => 111,  341 => 105,  336 => 103,  332 => 101,  329 => 100,  325 => 95,  322 => 94,  320 => 93,  317 => 92,  313 => 78,  310 => 77,  305 => 73,  294 => 70,  291 => 69,  287 => 68,  280 => 64,  276 => 63,  272 => 62,  267 => 61,  264 => 60,  258 => 88,  249 => 85,  246 => 84,  242 => 83,  236 => 79,  234 => 77,  230 => 75,  228 => 60,  223 => 57,  220 => 56,  216 => 54,  210 => 53,  201 => 50,  195 => 48,  190 => 47,  185 => 46,  182 => 45,  172 => 42,  167 => 40,  161 => 37,  158 => 36,  155 => 35,  151 => 26,  131 => 24,  127 => 20,  123 => 18,  120 => 17,  113 => 7,  110 => 6,  104 => 122,  101 => 111,  97 => 108,  95 => 100,  92 => 99,  89 => 98,  86 => 96,  84 => 92,  81 => 91,  79 => 56,  76 => 55,  74 => 45,  71 => 44,  69 => 35,  59 => 27,  56 => 17,  49 => 12,  45 => 11,  41 => 6,  39 => 6,  32 => 2,  29 => 1,  44 => 9,  38 => 5,  34 => 3,  31 => 4,  28 => 3,);
    }
}
