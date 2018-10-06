<?php

/* partials/scripts.html.twig */
class __TwigTemplate_2c9083e038e9c0aef7ca37d2c19fa2bc56e2087ddcc88276c3da55370eb6ab9b extends Twig_Template
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
        echo "<!--- Your global JavaScript code can go here -->
";
    }

    public function getTemplateName()
    {
        return "partials/scripts.html.twig";
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
        return new Twig_Source("<!--- Your global JavaScript code can go here -->
", "partials/scripts.html.twig", "/var/www/html/blog/user/themes/quark-open-publishing/templates/partials/scripts.html.twig");
    }
}
