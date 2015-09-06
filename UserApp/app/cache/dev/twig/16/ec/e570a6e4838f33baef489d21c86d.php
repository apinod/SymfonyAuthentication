<?php

/* SimpleProfileBundle::layout.html.twig */
class __TwigTemplate_16ece570a6e4838f33baef489d21c86d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'username' => array($this, 'block_username'),
            'contents' => array($this, 'block_contents'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <style>
        .navbar-inverse .nav > li > a {
            color: #999999;
        }
        .navbar-inverse .divider-vertical {
            border-left-color: #888888;
            border-right-color: #999999;
        }
        
        .navbar-inverse .navbar-text {
            color: #ffffff;
        }        
    </style>
";
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        // line 20
        echo "
        <div class=\"container\" style=\"width: 100%\">
            <div class=\"navbar navbar-inverse\">                                    
                <div class=\"navbar-inner\">
                    <div class=\"container\">
                        <li class=\"brand pull-left\">User Administration Panel</li>                      
                        <div class=\"nav-collapse collapse navbar-inverse-collapse\">                    
                            <ul class=\"nav pull-right\">
                                <li>
                                    <p class=\"navbar-text\">";
        // line 29
        $this->displayBlock('username', $context, $blocks);
        echo "</p>                                
                                </li>
                                <li class=\"divider-vertical\"></li>                                
                                <li>
                                    <a class=\"\" href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a>
                                </li>                          
                            </ul>
                        </div>           
                    </div>                        
                </div>
            </div>
                
            ";
        // line 41
        $this->displayBlock('contents', $context, $blocks);
        // line 43
        echo "        </div>
    
        <hr class=\"hr_div\">
        <footer class=\"footer\">
            <div class=\"container\" style=\"margin-left: 40%\">
                <p>Symfony2  © 2014</p>            
            </div>            
        </footer>    
";
    }

    // line 29
    public function block_username($context, array $blocks = array())
    {
        echo " Wellcome ";
    }

    // line 41
    public function block_contents($context, array $blocks = array())
    {
        // line 42
        echo "            ";
    }

    public function getTemplateName()
    {
        return "SimpleProfileBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 42,  103 => 41,  85 => 43,  83 => 41,  72 => 33,  65 => 29,  54 => 20,  51 => 19,  34 => 4,  31 => 3,  318 => 156,  304 => 145,  281 => 124,  278 => 123,  270 => 118,  265 => 116,  245 => 99,  239 => 95,  230 => 93,  226 => 92,  223 => 91,  219 => 90,  213 => 87,  209 => 86,  202 => 82,  198 => 81,  186 => 71,  176 => 70,  170 => 69,  159 => 61,  150 => 54,  140 => 53,  134 => 52,  123 => 44,  119 => 43,  112 => 39,  108 => 38,  101 => 34,  97 => 29,  90 => 28,  84 => 26,  77 => 22,  73 => 20,  67 => 18,  60 => 14,  50 => 10,  47 => 9,  44 => 8,  38 => 5,  33 => 4,  30 => 3,);
    }
}
