<?php

/* @Page:/var/www/html/blog/user/pages/06.modular-page/01._hero */
class __TwigTemplate_333ebf3e82d876d6c1028cd78c411ad3857551910768ab67e02449105c45363d extends Twig_Template
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
        echo "
<section id=\"\" class=\"section modular-hero hero parallax text-light \" style=\"background-image: url(/user/pages/06.modular-page/01._hero/unsplash-text.jpg);\">
    <div class=\"image-overlay\"></div>
    <section class=\"container grid-xl\" style=\"text-align: center\">
        <h1>Manifestos</h1>
<p>Grav is a modern flat-file CMS system that focuses on making web development fun again.</p>
<p><a href=\"https://learn.getgrav.org\" class=\"btn btn-primary btn-lg\" target=\"_blank\">Read the documentation</a></p>
    </section>
    <i id=\"to-start\" class=\"pulse fa fa-angle-down\"></i>
</section>";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/blog/user/pages/06.modular-page/01._hero";
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
        return new Twig_Source("
<section id=\"\" class=\"section modular-hero hero parallax text-light \" style=\"background-image: url(/user/pages/06.modular-page/01._hero/unsplash-text.jpg);\">
    <div class=\"image-overlay\"></div>
    <section class=\"container grid-xl\" style=\"text-align: center\">
        <h1>Manifestos</h1>
<p>Grav is a modern flat-file CMS system that focuses on making web development fun again.</p>
<p><a href=\"https://learn.getgrav.org\" class=\"btn btn-primary btn-lg\" target=\"_blank\">Read the documentation</a></p>
    </section>
    <i id=\"to-start\" class=\"pulse fa fa-angle-down\"></i>
</section>", "@Page:/var/www/html/blog/user/pages/06.modular-page/01._hero", "");
    }
}
