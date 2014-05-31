<?php

/* SyliusWebBundle::gallery.html.twig */
class __TwigTemplate_d76149b2e0c1871392e2639fc22e35af90b273392d17551e0bda0fc98926ef4c extends Twig_Template
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
        echo "<script>
var gallery = document.getElementById('gallery');
if (gallery) {
    gallery.onclick = function (event) {
        event = event || window.event;
        var target = event.target || event.srcElement,
                link = target.src ? target.parentNode : target,
                options = {index: link, event: event},
                links = this.getElementsByTagName('a');
        blueimp.Gallery(links, options);
    };
}
</script>

<div id=\"blueimp-gallery\" class=\"blueimp-gallery\">
    <div class=\"slides\"></div>
    <h3 class=\"title\"></h3>
    <a class=\"prev\">‹</a>
    <a class=\"next\">›</a>
    <a class=\"close\">×</a>
    <a class=\"play-pause\"></a>
    <ol class=\"indicator\"></ol>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle::gallery.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
