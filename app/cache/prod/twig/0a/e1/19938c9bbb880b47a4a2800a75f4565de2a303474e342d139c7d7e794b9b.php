<?php

/* SyliusWebBundle:Backend/Macros:alerts.html.twig */
class __TwigTemplate_0ae119938c9bbb880b47a4a2800a75f4565de2a303474e342d139c7d7e794b9b extends Twig_Template
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
        // line 7
        echo "
";
        // line 14
        echo "
";
        // line 21
        echo "
";
    }

    // line 1
    public function getsuccess($_text = null)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $_text,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "<div class=\"alert alert-success\">
    <h4 class=\"alert-heading\">";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.alert.success"), "html", null, true);
            echo "</h4>
    ";
            // line 4
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
            echo "
</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 8
    public function getinfo($_text = null)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $_text,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 9
            echo "<div class=\"alert alert-info\">
    <h4 class=\"alert-heading\">";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.alert.info"), "html", null, true);
            echo "</h4>
    ";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
            echo "
</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 15
    public function geterror($_text = null)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $_text,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 16
            echo "<div class=\"alert alert-danger\">
    <h4 class=\"alert-heading\">";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.alert.error"), "html", null, true);
            echo "</h4>
    ";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
            echo "
</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 22
    public function getwarning($_text = null)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $_text,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 23
            echo "<div class=\"alert alert-warning\">
    <h4 class=\"alert-heading\">";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.alert.warning"), "html", null, true);
            echo "</h4>
    ";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
            echo "
</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Macros:alerts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 24,  126 => 22,  112 => 18,  105 => 16,  94 => 15,  80 => 11,  73 => 9,  25 => 21,  22 => 14,  179 => 32,  170 => 29,  149 => 24,  147 => 23,  144 => 25,  142 => 21,  119 => 19,  98 => 14,  78 => 9,  63 => 7,  61 => 6,  24 => 1,  21 => 2,  53 => 12,  43 => 5,  33 => 6,  26 => 4,  19 => 7,  270 => 4,  268 => 3,  253 => 1,  243 => 83,  233 => 81,  221 => 79,  212 => 74,  208 => 72,  206 => 71,  202 => 68,  198 => 66,  196 => 65,  192 => 64,  189 => 61,  187 => 60,  180 => 56,  177 => 54,  175 => 53,  169 => 49,  165 => 47,  163 => 45,  160 => 44,  156 => 41,  154 => 27,  137 => 23,  117 => 34,  115 => 17,  111 => 30,  108 => 17,  100 => 23,  93 => 21,  90 => 20,  72 => 10,  65 => 83,  62 => 8,  60 => 81,  57 => 80,  55 => 79,  52 => 78,  50 => 44,  47 => 43,  42 => 27,  40 => 4,  37 => 7,  35 => 2,  30 => 1,  27 => 8,  51 => 8,  48 => 4,  385 => 121,  359 => 119,  355 => 114,  351 => 112,  348 => 111,  341 => 105,  336 => 103,  332 => 101,  329 => 100,  325 => 95,  322 => 94,  320 => 93,  317 => 92,  313 => 78,  310 => 77,  305 => 73,  294 => 70,  291 => 69,  287 => 68,  280 => 64,  276 => 63,  272 => 62,  267 => 61,  264 => 2,  258 => 88,  249 => 85,  246 => 84,  242 => 83,  236 => 79,  234 => 77,  230 => 75,  228 => 60,  223 => 57,  220 => 56,  216 => 54,  210 => 73,  201 => 50,  195 => 48,  190 => 47,  185 => 59,  182 => 57,  172 => 51,  167 => 28,  161 => 37,  158 => 36,  155 => 35,  151 => 26,  131 => 24,  127 => 20,  123 => 18,  120 => 36,  113 => 16,  110 => 15,  104 => 122,  101 => 111,  97 => 108,  95 => 22,  92 => 99,  89 => 98,  86 => 11,  84 => 16,  81 => 15,  79 => 56,  76 => 10,  74 => 11,  71 => 44,  69 => 9,  59 => 27,  56 => 17,  49 => 12,  45 => 28,  41 => 2,  39 => 6,  32 => 14,  29 => 1,  44 => 3,  38 => 3,  34 => 3,  31 => 4,  28 => 3,);
    }
}
