<?php

/* SyliusWebBundle::forms.html.twig */
class __TwigTemplate_40bc50401e791ba5e5612482108ce26cdf55192b7407f838d40b7d91e75f1753 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_label' => array($this, 'block_form_label'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'form_row' => array($this, 'block_form_row'),
            'form_errors' => array($this, 'block_form_errors'),
            'sylius_shipping_method_choice_widget' => array($this, 'block_sylius_shipping_method_choice_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " form-control")));
        // line 5
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 9
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " form-control")));
        // line 10
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
";
    }

    // line 13
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " form-control")));
        // line 16
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 17
        echo "
    ";
        // line 18
        if (("file" == (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))) {
            // line 19
            echo "        <span class=\"btn-primary btn-lg file-overlay\"><i class=\"icon-folder-open\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.form.choose_file"), "html", null, true);
            echo "</span>
    ";
        }
        // line 21
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 25
    public function block_form_label($context, array $blocks = array())
    {
        // line 26
        ob_start();
        // line 27
        echo "    ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . " control-label col-lg-2")));
        // line 28
        echo "    ";
        $this->displayParentBlock("form_label", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 32
    public function block_money_widget($context, array $blocks = array())
    {
        // line 33
        ob_start();
        // line 34
        echo "    <div class=\"input-group\">
        <span class=\"input-group-addon\">";
        // line 35
        echo twig_escape_filter($this->env, strtr((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
        echo "</span>
        ";
        // line 36
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 41
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 42
        ob_start();
        // line 43
        echo "    <div class=\"input-group\">
        <span class=\"input-group-addon\">%</span>
        ";
        // line 45
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 50
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 51
        ob_start();
        // line 52
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 53
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 55
            echo "        <div class=\"form-group\">
        ";
            // line 56
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), 'widget');
            echo "
        ";
            // line 57
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time"), 'widget');
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 63
    public function block_date_widget($context, array $blocks = array())
    {
        // line 64
        ob_start();
        // line 65
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 66
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 68
            echo "            ";
            echo strtr("{{ year }} / {{ month }} / {{ day }}", array("{{ year }}" =>             // line 69
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year"), 'widget', array("attr" => array("style" => "display: inline; width: 100px;"))), "{{ month }}" =>             // line 70
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month"), 'widget', array("attr" => array("style" => "display: inline; width: 100px;"))), "{{ day }}" =>             // line 71
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day"), 'widget', array("attr" => array("style" => "display: inline; width: 100px;")))));
            // line 72
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 77
    public function block_time_widget($context, array $blocks = array())
    {
        // line 78
        ob_start();
        // line 79
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 80
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 82
            echo "        ";
            $context["vars"] = ((((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1, "style" => "width: 60px; display: inline;"))) : (array()));
            // line 83
            echo "        &nbsp;";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour"), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute"), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo " ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second"), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            // line 84
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 88
    public function block_form_row($context, array $blocks = array())
    {
        // line 89
        ob_start();
        // line 90
        echo "    <div class=\"form-group";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            echo " has-error";
        }
        echo "\">
        ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"col-lg-10\">
        ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        ";
        // line 94
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 95
            echo "            <span class=\"help-block form-error\">
                ";
            // line 96
            echo twig_escape_filter($this->env, (((null === $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messagePluralization"))) ? ($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageParameters"), "validators")) : ($this->env->getExtension('translator')->transchoice($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messagePluralization"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageParameters"), "validators"))), "html", null, true);
            // line 100
            echo "
            </span>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 108
    public function block_form_errors($context, array $blocks = array())
    {
        // line 109
        ob_start();
        // line 110
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 111
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 112
                echo "            <div class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
                echo "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 118
    public function block_sylius_shipping_method_choice_widget($context, array $blocks = array())
    {
        // line 119
        echo "    ";
        ob_start();
        // line 120
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 121
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 122
            echo "                <div>
                    ";
            // line 123
            if ($this->getAttribute((isset($context["shipping_costs"]) ? $context["shipping_costs"] : null), $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars"), "value"), array(), "array", true, true)) {
                // line 124
                echo "                        <span class=\"pull-right text-muted\">";
                echo $this->env->getExtension('sylius_money')->formatPrice($this->getAttribute((isset($context["shipping_costs"]) ? $context["shipping_costs"] : $this->getContext($context, "shipping_costs")), $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars"), "value"), array(), "array"));
                echo "</span>
                    ";
            }
            // line 126
            echo "                    <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars"), "label_attr"));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
                        ";
            // line 127
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget');
            echo "
                        ";
            // line 128
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars"), "label"), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "
                    </label>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle::forms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 132,  354 => 128,  350 => 127,  334 => 126,  328 => 124,  326 => 123,  323 => 122,  319 => 121,  314 => 120,  311 => 119,  308 => 118,  302 => 114,  293 => 112,  285 => 110,  283 => 109,  280 => 108,  273 => 103,  263 => 96,  260 => 95,  256 => 94,  252 => 93,  247 => 91,  240 => 90,  238 => 89,  235 => 88,  218 => 83,  215 => 82,  209 => 80,  206 => 79,  204 => 78,  201 => 77,  194 => 72,  191 => 70,  190 => 69,  188 => 68,  177 => 64,  174 => 63,  165 => 57,  161 => 56,  158 => 55,  152 => 53,  149 => 52,  147 => 51,  144 => 50,  136 => 45,  132 => 43,  127 => 41,  115 => 35,  110 => 33,  107 => 32,  99 => 28,  72 => 17,  69 => 16,  66 => 15,  64 => 14,  61 => 13,  53 => 9,  50 => 8,  39 => 3,  81 => 14,  77 => 19,  35 => 5,  32 => 4,  29 => 3,  26 => 2,  20 => 1,  318 => 123,  292 => 121,  288 => 111,  284 => 114,  281 => 113,  274 => 107,  269 => 105,  265 => 100,  262 => 102,  258 => 97,  255 => 96,  253 => 95,  250 => 94,  246 => 79,  243 => 78,  237 => 90,  231 => 80,  229 => 84,  225 => 76,  220 => 58,  217 => 57,  213 => 55,  207 => 54,  198 => 51,  192 => 71,  187 => 48,  182 => 66,  179 => 65,  169 => 43,  164 => 41,  160 => 39,  157 => 36,  154 => 35,  150 => 26,  130 => 42,  126 => 20,  122 => 18,  119 => 36,  112 => 34,  109 => 6,  103 => 124,  100 => 113,  96 => 27,  94 => 26,  91 => 25,  88 => 17,  85 => 16,  83 => 21,  80 => 93,  78 => 57,  75 => 18,  73 => 46,  70 => 45,  68 => 35,  58 => 9,  48 => 12,  44 => 5,  40 => 9,  38 => 6,  33 => 3,  60 => 16,  55 => 10,  46 => 11,  42 => 4,  37 => 6,  31 => 2,  28 => 1,);
    }
}
