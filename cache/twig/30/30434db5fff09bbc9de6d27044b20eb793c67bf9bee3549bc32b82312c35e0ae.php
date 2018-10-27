<?php

/* @Page:/var/www/html/blog/user/pages/01.blog */
class __TwigTemplate_a457f3305b26afc17c82416e0a767888fa1cd65828684e9b9a769122eaf2b1a7 extends Twig_Template
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
        echo "<h1>Out<strong>Rage</strong> Fatigue</h1>
<h3>sick and tired of being sick and tired</h3>";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/blog/user/pages/01.blog";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Out<strong>Rage</strong> Fatigue</h1>
<h3>sick and tired of being sick and tired</h3>", "@Page:/var/www/html/blog/user/pages/01.blog", "");
    }
}
