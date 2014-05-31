<?php

/* SyliusWebBundle:Frontend:layout.html.twig */
class __TwigTemplate_eff73043a9100a32223d4d7115bc1482db2bb9bbe32bea2c71b1eaf26ebeaf3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'flashes' => array($this, 'block_flashes'),
            'main' => array($this, 'block_main'),
            'content' => array($this, 'block_content'),
            'gallery' => array($this, 'block_gallery'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
";
        // line 2
        $context["settings"] = $this->env->getExtension('sylius_settings')->getSettings("general");
        // line 3
        echo "<html>
    <head>
        <title>
            ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "        </title>
        <meta charset=\"UTF-8\">
        <meta name=\"description\" content=\"";
        // line 11
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "meta_description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "meta_description"), $this->env->getExtension('translator')->trans("sylius.meta.frontend_description"))) : ($this->env->getExtension('translator')->trans("sylius.meta.frontend_description"))), "html", null, true);
        echo "\">
        <meta name=\"keywords\" content=\"";
        // line 12
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "meta_keywords", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "meta_keywords"), $this->env->getExtension('translator')->trans("sylius.meta.frontend_keywords"))) : ($this->env->getExtension('translator')->trans("sylius.meta.frontend_keywords"))), "html", null, true);
        echo "\">

        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Open+Sans:300italic,400,300,700' rel='stylesheet' type='text/css'>

        ";
        // line 17
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "
        <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
        <!--[if lt IE 9]>
        <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
    </head>
    <body>
        <div class=\"container\">
        ";
        // line 35
        $this->displayBlock('header', $context, $blocks);
        // line 45
        echo "
        ";
        // line 46
        $this->displayBlock('flashes', $context, $blocks);
        // line 56
        echo "
        ";
        // line 57
        $this->displayBlock('main', $context, $blocks);
        // line 93
        echo "
        ";
        // line 94
        $this->displayBlock('gallery', $context, $blocks);
        // line 98
        echo "
        ";
        // line 100
        echo "        ";
        $this->env->loadTemplate("SyliusWebBundle::confirm-modal.html.twig")->display($context);
        // line 101
        echo "
        ";
        // line 102
        $this->displayBlock('footer', $context, $blocks);
        // line 110
        echo "        </div>

        ";
        // line 113
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 124
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "                ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "title"), $this->env->getExtension('translator')->trans("sylius.meta.frontend_title"))) : ($this->env->getExtension('translator')->trans("sylius.meta.frontend_title"))), "html", null, true);
        echo "
            ";
    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 18
        echo "            <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css\" type=\"text/css\" />
            ";
        // line 20
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7e46861_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e46861_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/frontend_frontend_1.css");
            // line 24
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
            // asset "7e46861_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e46861_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/frontend_blueimp-gallery_2.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
        } else {
            // asset "7e46861"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e46861") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/frontend.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
        }
        unset($context["asset_url"]);
        // line 26
        echo "        ";
    }

    // line 35
    public function block_header($context, array $blocks = array())
    {
        // line 36
        echo "            <div class=\"masthead pull-right\">
           ";
        // line 39
        echo "            </div>
            <div class=\"currency-menu masthead pull-right\">
                ";
        // line 41
        echo $this->env->getExtension('knp_menu')->render("sylius.frontend.currency", array("template" => "SyliusWebBundle:Frontend:menu.html.twig"));
        echo "
            </div>
            <h1 class=\"logo\"><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("sylius_homepage");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.logo"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.logo"), "html", null, true);
        echo "</span></a></h1>
        ";
    }

    // line 46
    public function block_flashes($context, array $blocks = array())
    {
        // line 47
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "success", 1 => "error", 2 => "fos_user_success"));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 48
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 49
                echo "                    <div class=\"alert alert-";
                echo twig_escape_filter($this->env, ((((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "fos_user_success")) ? ("success") : (((((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "error")) ? ("danger") : (((((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "notice")) ? ("warning") : ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))))))), "html", null, true);
                echo "\">
                        <a class=\"close\" data-dismiss=\"alert\" href=\"#\">×</a>
                        ";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["flash"]) ? $context["flash"] : $this->getContext($context, "flash"))), "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        ";
    }

    // line 57
    public function block_main($context, array $blocks = array())
    {
        // line 58
        echo "        <hr>
        <div class=\"row\">
            <div class=\"col-md-3\" id=\"sidebar\">
       ";
        // line 76
        echo "   </div>
            <div class=\"col-md-9\">
                ";
        // line 78
        $this->displayBlock('content', $context, $blocks);
        // line 80
        echo "            </div>
        </div>
        <hr>
        <div class=\"row\">
           ";
        // line 90
        echo "        </div>
        <hr>
        ";
    }

    // line 78
    public function block_content($context, array $blocks = array())
    {
        // line 79
        echo "                ";
    }

    // line 94
    public function block_gallery($context, array $blocks = array())
    {
        // line 95
        echo "            ";
        // line 96
        echo "            ";
        $this->env->loadTemplate("SyliusWebBundle::gallery.html.twig")->display($context);
        // line 97
        echo "        ";
    }

    // line 102
    public function block_footer($context, array $blocks = array())
    {
        // line 103
        echo "            <div class=\"footer\">
                <p class=\"text-muted\">
                    &copy; Sylius, 2011 - ";
        // line 105
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ".
                </p>
                ";
        // line 107
        echo $this->env->getExtension('knp_menu')->render("sylius.frontend.social", array("template" => "SyliusWebBundle:Frontend:menu.html.twig"));
        echo "
            </div>
        ";
    }

    // line 113
    public function block_javascripts($context, array $blocks = array())
    {
        // line 114
        echo "            <script type=\"text/javascript\" src=\"//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
            <script type=\"text/javascript\" src=\"//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js\"></script>
        ";
        // line 116
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "26a225b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_26a225b_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/frontend_jquery.blueimp-gallery.min_1.js");
            // line 121
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "26a225b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_26a225b_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/frontend_confirm-modal_2.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "26a225b_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_26a225b_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/frontend_frontend_3.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "26a225b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_26a225b") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/frontend.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 123
        echo "        ";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Frontend:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 123,  292 => 121,  288 => 116,  284 => 114,  281 => 113,  274 => 107,  269 => 105,  265 => 103,  262 => 102,  258 => 97,  255 => 96,  253 => 95,  250 => 94,  246 => 79,  243 => 78,  237 => 90,  231 => 80,  229 => 78,  225 => 76,  220 => 58,  217 => 57,  213 => 55,  207 => 54,  198 => 51,  192 => 49,  187 => 48,  182 => 47,  179 => 46,  169 => 43,  164 => 41,  160 => 39,  157 => 36,  154 => 35,  150 => 26,  130 => 24,  126 => 20,  122 => 18,  119 => 17,  112 => 7,  109 => 6,  103 => 124,  100 => 113,  96 => 110,  94 => 102,  91 => 101,  88 => 100,  85 => 98,  83 => 94,  80 => 93,  78 => 57,  75 => 56,  73 => 46,  70 => 45,  68 => 35,  58 => 27,  48 => 12,  44 => 11,  40 => 9,  38 => 6,  33 => 3,  60 => 16,  55 => 17,  46 => 11,  42 => 10,  37 => 8,  31 => 2,  28 => 1,);
    }
}
