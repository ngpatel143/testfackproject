<?php

/* SyliusWebBundle::confirm-modal.html.twig */
class __TwigTemplate_0f298f20e841c0b4f7e7257d51a38d137c9dcd482e67d3133351a1a3a3f1d5e0 extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"confirmation-modal\" role=\"dialog\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.confirmation.title"), "html", null, true);
        echo "</h4>
            </div>

            <div class=\"modal-body\">
                ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.confirmation.message"), "html", null, true);
        echo "
            </div>

            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-info\" data-dismiss=\"modal\"><i class=\"glyphicon glyphicon-remove\"></i> ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.cancel"), "html", null, true);
        echo "</button>
                <a class=\"btn btn-danger\" id=\"confirmation-modal-confirm\">
                    <i class=\"glyphicon glyphicon-trash\"></i><span>";
        // line 16
        echo twig_escape_filter($this->env, ((array_key_exists("message", $context)) ? ((isset($context["message"]) ? $context["message"] : null)) : ($this->env->getExtension('translator')->trans("sylius.delete"))), "html", null, true);
        echo "</span>
                </a>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle::confirm-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 24,  126 => 22,  112 => 18,  105 => 16,  94 => 15,  80 => 11,  73 => 9,  25 => 21,  22 => 14,  179 => 32,  170 => 29,  149 => 24,  147 => 23,  144 => 25,  142 => 21,  119 => 19,  98 => 14,  78 => 9,  63 => 7,  61 => 6,  24 => 1,  21 => 2,  53 => 12,  43 => 5,  33 => 10,  26 => 6,  19 => 1,  270 => 4,  268 => 3,  253 => 1,  243 => 83,  233 => 81,  221 => 79,  212 => 74,  208 => 72,  206 => 71,  202 => 68,  198 => 66,  196 => 65,  192 => 64,  189 => 61,  187 => 60,  180 => 56,  177 => 54,  175 => 53,  169 => 49,  165 => 47,  163 => 45,  160 => 44,  156 => 41,  154 => 27,  137 => 23,  117 => 34,  115 => 17,  111 => 30,  108 => 17,  100 => 23,  93 => 21,  90 => 20,  72 => 10,  65 => 83,  62 => 8,  60 => 81,  57 => 80,  55 => 79,  52 => 78,  50 => 44,  47 => 43,  42 => 27,  40 => 14,  37 => 7,  35 => 2,  30 => 1,  27 => 8,  51 => 8,  48 => 4,  385 => 121,  359 => 119,  355 => 114,  351 => 112,  348 => 111,  341 => 105,  336 => 103,  332 => 101,  329 => 100,  325 => 95,  322 => 94,  320 => 93,  317 => 92,  313 => 78,  310 => 77,  305 => 73,  294 => 70,  291 => 69,  287 => 68,  280 => 64,  276 => 63,  272 => 62,  267 => 61,  264 => 2,  258 => 88,  249 => 85,  246 => 84,  242 => 83,  236 => 79,  234 => 77,  230 => 75,  228 => 60,  223 => 57,  220 => 56,  216 => 54,  210 => 73,  201 => 50,  195 => 48,  190 => 47,  185 => 59,  182 => 57,  172 => 51,  167 => 28,  161 => 37,  158 => 36,  155 => 35,  151 => 26,  131 => 24,  127 => 20,  123 => 18,  120 => 36,  113 => 16,  110 => 15,  104 => 122,  101 => 111,  97 => 108,  95 => 22,  92 => 99,  89 => 98,  86 => 11,  84 => 16,  81 => 15,  79 => 56,  76 => 10,  74 => 11,  71 => 44,  69 => 9,  59 => 27,  56 => 17,  49 => 12,  45 => 16,  41 => 2,  39 => 6,  32 => 14,  29 => 1,  44 => 3,  38 => 3,  34 => 3,  31 => 4,  28 => 3,);
    }
}
