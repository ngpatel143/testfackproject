<?php

/* SyliusWebBundle:Frontend/Product:macros.html.twig */
class __TwigTemplate_5da56f2070ad9949b74fd0c44ad852f15477c189714ccb44ac0adfae1e965b15 extends Twig_Template
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
        // line 13
        echo "
";
    }

    // line 1
    public function getlist($_products = null)
    {
        $context = $this->env->mergeGlobals(array(
            "products" => $_products,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "
";
            // line 3
            $context["alerts"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:alerts.html.twig");
            // line 4
            echo "
";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 6
                $this->env->loadTemplate("SyliusWebBundle:Frontend/Product:_single.html.twig")->display($context);
                // line 7
                if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                    echo "<hr>";
                }
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 9
                echo $context["alerts"]->getinfo($this->env->getExtension('translator')->trans("sylius.product.no_results"));
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 14
    public function getgrid($_products = null, $_size = 3)
    {
        $context = $this->env->mergeGlobals(array(
            "products" => $_products,
            "size" => $_size,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 15
            echo "
";
            // line 16
            $context["alerts"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:alerts.html.twig");
            // line 17
            echo "
<div class=\"row\">
    ";
            // line 19
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 20
                echo "        <div class=\"col-md-";
                echo twig_escape_filter($this->env, (12 / (isset($context["size"]) ? $context["size"] : null)), "html", null, true);
                echo "\">
            ";
                // line 21
                $this->env->loadTemplate("SyliusWebBundle:Frontend/Product:_singleBox.html.twig")->display($context);
                // line 22
                echo "        </div>
        ";
                // line 23
                if ((0 == ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % (isset($context["size"]) ? $context["size"] : null)))) {
                    // line 24
                    echo "            </div>
            <div class=\"row\">
        ";
                }
                // line 27
                echo "    ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 28
                echo "        <div class=\"col-md-12\">
            ";
                // line 29
                echo $context["alerts"]->getinfo($this->env->getExtension('translator')->trans("sylius.product.no_results"));
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "</div>

";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Frontend/Product:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 32,  170 => 29,  149 => 24,  147 => 23,  144 => 22,  142 => 21,  119 => 19,  98 => 14,  78 => 9,  63 => 7,  61 => 6,  24 => 1,  21 => 2,  53 => 12,  43 => 5,  33 => 6,  26 => 4,  19 => 13,  270 => 4,  268 => 3,  253 => 1,  243 => 83,  233 => 81,  221 => 79,  212 => 74,  208 => 72,  206 => 71,  202 => 68,  198 => 66,  196 => 65,  192 => 64,  189 => 61,  187 => 60,  180 => 56,  177 => 54,  175 => 53,  169 => 49,  165 => 47,  163 => 45,  160 => 44,  156 => 41,  154 => 27,  137 => 20,  117 => 34,  115 => 17,  111 => 30,  108 => 28,  100 => 23,  93 => 21,  90 => 20,  72 => 10,  65 => 83,  62 => 82,  60 => 81,  57 => 80,  55 => 79,  52 => 78,  50 => 44,  47 => 43,  42 => 27,  40 => 4,  37 => 7,  35 => 2,  30 => 5,  27 => 8,  51 => 8,  48 => 7,  385 => 121,  359 => 119,  355 => 114,  351 => 112,  348 => 111,  341 => 105,  336 => 103,  332 => 101,  329 => 100,  325 => 95,  322 => 94,  320 => 93,  317 => 92,  313 => 78,  310 => 77,  305 => 73,  294 => 70,  291 => 69,  287 => 68,  280 => 64,  276 => 63,  272 => 62,  267 => 61,  264 => 2,  258 => 88,  249 => 85,  246 => 84,  242 => 83,  236 => 79,  234 => 77,  230 => 75,  228 => 60,  223 => 57,  220 => 56,  216 => 54,  210 => 73,  201 => 50,  195 => 48,  190 => 47,  185 => 59,  182 => 57,  172 => 51,  167 => 28,  161 => 37,  158 => 36,  155 => 35,  151 => 26,  131 => 24,  127 => 20,  123 => 18,  120 => 36,  113 => 16,  110 => 15,  104 => 122,  101 => 111,  97 => 108,  95 => 22,  92 => 99,  89 => 98,  86 => 11,  84 => 16,  81 => 15,  79 => 56,  76 => 55,  74 => 11,  71 => 44,  69 => 9,  59 => 27,  56 => 17,  49 => 12,  45 => 28,  41 => 6,  39 => 6,  32 => 14,  29 => 1,  44 => 9,  38 => 3,  34 => 3,  31 => 4,  28 => 3,);
    }
}
