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
        return array (  97 => 29,  83 => 41,  65 => 29,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 42,  111 => 37,  107 => 36,  71 => 19,  177 => 65,  165 => 64,  160 => 61,  139 => 50,  135 => 47,  126 => 45,  114 => 42,  84 => 28,  70 => 20,  67 => 15,  61 => 13,  47 => 9,  38 => 6,  94 => 22,  89 => 20,  85 => 43,  79 => 18,  75 => 23,  68 => 14,  56 => 9,  50 => 10,  29 => 3,  87 => 20,  72 => 33,  55 => 15,  21 => 2,  26 => 6,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  40 => 8,  44 => 12,  35 => 5,  31 => 3,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 58,  151 => 57,  142 => 59,  138 => 57,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 31,  69 => 25,  66 => 15,  62 => 23,  49 => 19,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 36,  112 => 42,  109 => 41,  106 => 42,  103 => 41,  99 => 30,  95 => 34,  92 => 33,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 13,  57 => 11,  54 => 20,  51 => 19,  48 => 13,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
