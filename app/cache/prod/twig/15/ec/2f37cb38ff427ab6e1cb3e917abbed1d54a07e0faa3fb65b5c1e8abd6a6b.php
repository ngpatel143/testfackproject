<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_15ec2f37cb38ff427ab6e1cb3e917abbed1d54a07e0faa3fb65b5c1e8abd6a6b extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>An Error Occurred: ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo "</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo "\".</h2>

        <div>
            Something is broken. Please e-mail us at [email] and let us know
            what you were doing when this error occurred. We will fix it as soon
            as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,  385 => 121,  359 => 119,  355 => 114,  351 => 112,  348 => 111,  341 => 105,  336 => 103,  332 => 101,  329 => 100,  325 => 95,  322 => 94,  320 => 93,  317 => 92,  313 => 78,  310 => 77,  305 => 73,  294 => 70,  291 => 69,  287 => 68,  280 => 64,  276 => 63,  272 => 62,  267 => 61,  264 => 60,  258 => 88,  249 => 85,  246 => 84,  242 => 83,  236 => 79,  234 => 77,  230 => 75,  228 => 60,  223 => 57,  220 => 56,  216 => 54,  210 => 53,  201 => 50,  195 => 48,  190 => 47,  185 => 46,  182 => 45,  172 => 42,  167 => 40,  161 => 37,  158 => 36,  155 => 35,  151 => 26,  131 => 24,  127 => 20,  123 => 18,  120 => 17,  113 => 7,  110 => 6,  104 => 122,  101 => 111,  97 => 108,  95 => 100,  92 => 99,  89 => 98,  86 => 96,  84 => 92,  81 => 91,  79 => 56,  76 => 55,  74 => 45,  71 => 44,  69 => 35,  59 => 27,  56 => 17,  49 => 12,  45 => 11,  41 => 9,  39 => 6,  32 => 9,  29 => 1,  44 => 9,  38 => 6,  34 => 3,  31 => 4,  28 => 3,);
    }
}
