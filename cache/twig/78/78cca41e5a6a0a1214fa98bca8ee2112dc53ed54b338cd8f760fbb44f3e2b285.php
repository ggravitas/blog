<?php

/* @Page:/var/www/html/blog/user/pages/sidebar */
class __TwigTemplate_87dddf94efb0c863ff824ebeee3ac2e3c7735af66d4c2e37b9ca875c831337ca extends Twig_Template
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
        echo "<blockquote>
<p>\"We do not say that a man who takes no interest in politics is a man who minds his own business; we say that he has no business here at all.\"
<br><cite>— Pericles commenting on the participation of Athenian citizens in politics</cite></p>
</blockquote>";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/blog/user/pages/sidebar";
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
        return new Twig_Source("<blockquote>
<p>\"We do not say that a man who takes no interest in politics is a man who minds his own business; we say that he has no business here at all.\"
<br><cite>— Pericles commenting on the participation of Athenian citizens in politics</cite></p>
</blockquote>", "@Page:/var/www/html/blog/user/pages/sidebar", "");
    }
}
