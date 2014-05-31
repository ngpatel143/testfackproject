<?php

/* HWIOAuthBundle:Connect:login.html.twig */
class __TwigTemplate_757f35aee38802dad872beccd0b026c4b4aac9533a9f70bd61cf48a8b043bb5d extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('hwi_oauth')->getResourceOwners());
        foreach ($context['_seq'] as $context["_key"] => $context["owner"]) {
            // line 2
            echo "    ";
            $context["ownerName"] = $this->env->getExtension('translator')->trans((isset($context["owner"]) ? $context["owner"] : null), array(), "HWIOAuthBundle");
            // line 3
            echo "    <a class=\"oauth-login oauth-login-";
            echo twig_escape_filter($this->env, (isset($context["ownerName"]) ? $context["ownerName"] : null), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('hwi_oauth')->getLoginUrl((isset($context["owner"]) ? $context["owner"] : null)), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["ownerName"]) ? $context["ownerName"] : null), "html", null, true);
            echo "\">
        <img src=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/syliusweb/img/icon/64/" . (isset($context["ownerName"]) ? $context["ownerName"] : null)) . ".png")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, (isset($context["ownerName"]) ? $context["ownerName"] : null), "html", null, true);
            echo "\">
    </a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['owner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  26 => 3,  23 => 2,  19 => 1,  88 => 45,  64 => 24,  56 => 19,  48 => 13,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,);
    }
}
