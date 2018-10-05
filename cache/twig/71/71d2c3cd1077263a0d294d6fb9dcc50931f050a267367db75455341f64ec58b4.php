<?php

/* @Page:/Users/temp/repos/blog/user/pages/twitterfeed */
class __TwigTemplate_ea6019695361bf19a36a441b94f76fd32c54992afdfe3cb7044e0de0fc3eea04 extends Twig_Template
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
        echo "   <div class=\"twitter-feed-wrapper\">
  
  <a class=\"twitter-timeline\" data-height=\"600\" data-chrome=\"noscrollbar\" href=\"https://twitter.com/Politifact\">Tweets by Poliyifact</a>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+\"://platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/temp/repos/blog/user/pages/twitterfeed";
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
        return new Twig_Source("   <div class=\"twitter-feed-wrapper\">
  
  <a class=\"twitter-timeline\" data-height=\"600\" data-chrome=\"noscrollbar\" href=\"https://twitter.com/Politifact\">Tweets by Poliyifact</a>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+\"://platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
  </div>
", "@Page:/Users/temp/repos/blog/user/pages/twitterfeed", "");
    }
}
