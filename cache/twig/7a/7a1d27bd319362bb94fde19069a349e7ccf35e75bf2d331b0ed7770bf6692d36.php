<?php

/* @Page:/Users/jerrybrahm/repos/blog/user/pages/01.blog */
class __TwigTemplate_17332cbc1cd1f7e4b6052ed378e21d68dbbb767b88220af5674137993802e09e extends Twig_Template
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
        return "@Page:/Users/jerrybrahm/repos/blog/user/pages/01.blog";
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
<h3>sick and tired of being sick and tired</h3>", "@Page:/Users/jerrybrahm/repos/blog/user/pages/01.blog", "");
    }
}
