<?php

/* site/index.html */
class __TwigTemplate_b8dbaaf3198a093f2ef8452e97ae53937b6d2ee58624391dfc1fd5e33388a4e6 extends Twig_Template
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
        echo "test";
    }

    public function getTemplateName()
    {
        return "site/index.html";
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
        return new Twig_Source("", "site/index.html", "D:\\wamp\\www\\cimpress-php-test\\Templates\\site\\index.html");
    }
}
