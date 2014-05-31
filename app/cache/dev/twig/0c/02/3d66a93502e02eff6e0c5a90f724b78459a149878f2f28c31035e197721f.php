<?php

/* SyliusWebBundle::confirm-modal.html.twig */
class __TwigTemplate_0c023d66a93502e02eff6e0c5a90f724b78459a149878f2f28c31035e197721f extends Twig_Template
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
        echo twig_escape_filter($this->env, ((array_key_exists("message", $context)) ? ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))) : ($this->env->getExtension('translator')->trans("sylius.delete"))), "html", null, true);
        echo "</span>
                </a>
            </div>
        </div>
    </div>
</div>
                
<div class=\"modal fade\" id=\"confirmation-modal-refund\"  tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.confirmation.title"), "html", null, true);
        echo "</h4>
            </div>

            <div class=\"modal-body\">
                ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.refund_confirmation.message"), "html", null, true);
        echo "
            </div>

            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-info\" data-dismiss=\"modal\"><i class=\"glyphicon glyphicon-remove\"></i> ";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.cancel"), "html", null, true);
        echo "</button>
                <a class=\"btn btn-success\" id=\"confirmation-modal-confirm\">
                    <i class=\"glyphicon glyphicon-share-alt\"></i><span>";
        // line 38
        echo twig_escape_filter($this->env, ((array_key_exists("message", $context)) ? ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))) : ($this->env->getExtension('translator')->trans("sylius.refund"))), "html", null, true);
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
        return array (  79 => 38,  74 => 36,  67 => 32,  60 => 28,  45 => 16,  40 => 14,  33 => 10,  26 => 6,  19 => 1,);
    }
}
