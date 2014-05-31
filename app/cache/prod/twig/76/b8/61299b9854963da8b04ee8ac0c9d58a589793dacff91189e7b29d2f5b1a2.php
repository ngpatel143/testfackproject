<?php

/* SyliusWebBundle:Frontend/Product:latestSidebar.html.twig */
class __TwigTemplate_76b861299b9854963da8b04ee8ac0c9d58a589793dacff91189e7b29d2f5b1a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h4>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.newest"), "html", null, true);
        echo "</h4>

<ul>
    ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 5
            echo "        <li>
            <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_product_show", array("slug" => $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "slug"))), "html", null, true);
            echo "\" class=\"btn btn-link\">
                <img class=\"thumbnail\" src=\"";
            // line 7
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image")) ? ($this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image"), "path"), "sylius_small")) : ("http://placehold.it/50x40")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
            echo "\" />
                <h4>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
            echo "</h4>
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Frontend/Product:latestSidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 12,  43 => 8,  33 => 6,  26 => 4,  19 => 1,  270 => 4,  268 => 3,  253 => 1,  243 => 83,  233 => 81,  221 => 79,  212 => 74,  208 => 72,  206 => 71,  202 => 68,  198 => 66,  196 => 65,  192 => 64,  189 => 61,  187 => 60,  180 => 56,  177 => 54,  175 => 53,  169 => 49,  165 => 47,  163 => 45,  160 => 44,  156 => 41,  154 => 40,  137 => 37,  117 => 34,  115 => 33,  111 => 30,  108 => 28,  100 => 23,  93 => 21,  90 => 20,  72 => 10,  65 => 83,  62 => 82,  60 => 81,  57 => 80,  55 => 79,  52 => 78,  50 => 44,  47 => 43,  42 => 27,  40 => 20,  37 => 7,  35 => 15,  30 => 5,  27 => 8,  51 => 8,  48 => 7,  385 => 121,  359 => 119,  355 => 114,  351 => 112,  348 => 111,  341 => 105,  336 => 103,  332 => 101,  329 => 100,  325 => 95,  322 => 94,  320 => 93,  317 => 92,  313 => 78,  310 => 77,  305 => 73,  294 => 70,  291 => 69,  287 => 68,  280 => 64,  276 => 63,  272 => 62,  267 => 61,  264 => 2,  258 => 88,  249 => 85,  246 => 84,  242 => 83,  236 => 79,  234 => 77,  230 => 75,  228 => 60,  223 => 57,  220 => 56,  216 => 54,  210 => 73,  201 => 50,  195 => 48,  190 => 47,  185 => 59,  182 => 57,  172 => 51,  167 => 48,  161 => 37,  158 => 36,  155 => 35,  151 => 26,  131 => 24,  127 => 20,  123 => 18,  120 => 36,  113 => 31,  110 => 6,  104 => 122,  101 => 111,  97 => 108,  95 => 22,  92 => 99,  89 => 98,  86 => 17,  84 => 16,  81 => 15,  79 => 56,  76 => 55,  74 => 11,  71 => 44,  69 => 9,  59 => 27,  56 => 17,  49 => 12,  45 => 28,  41 => 6,  39 => 6,  32 => 14,  29 => 1,  44 => 9,  38 => 5,  34 => 3,  31 => 4,  28 => 3,);
    }
}
