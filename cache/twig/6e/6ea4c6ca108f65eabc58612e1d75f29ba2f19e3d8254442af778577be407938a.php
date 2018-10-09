<?php

/* @Page:/var/www/html/blog/user/pages/01.blog/last-chance-to-register */
class __TwigTemplate_fe32d33c2091ccf105ccc3ca909d49975c8fef5a139441f3d282cc0c8c97a25a extends Twig_Template
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
        echo "<p>Tomorrow is the last day to register to vote in November's election. If you know anyone who is not registered, pressure them to do so. Nothing changes without pressure.</p>
<p><a href=\"https://www.pavoterservices.pa.gov/pages/VoterRegistrationApplication.aspx\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">PA Online Voter Registration</a></p>";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/blog/user/pages/01.blog/last-chance-to-register";
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
        return new Twig_Source("<p>Tomorrow is the last day to register to vote in November's election. If you know anyone who is not registered, pressure them to do so. Nothing changes without pressure.</p>
<p><a href=\"https://www.pavoterservices.pa.gov/pages/VoterRegistrationApplication.aspx\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">PA Online Voter Registration</a></p>", "@Page:/var/www/html/blog/user/pages/01.blog/last-chance-to-register", "");
    }
}
