<?php

/* SimpleProfileBundle:Security:dumpString.html.twig */
class __TwigTemplate_435be8d5d15142c5dc24860ec4eff0ce extends Twig_Template
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
        // line 2
        echo "
<a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a>


\"This is a secure area\"

</br>

";
        // line 14
        echo "
";
        // line 19
        echo "
";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["cities"]) ? $context["cities"] : $this->getContext($context, "cities")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "SimpleProfileBundle:Security:dumpString.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 20,  35 => 19,  32 => 14,  22 => 3,  19 => 2,);
    }
}
