<?php

/* SimpleProfileBundle:Security:login.html.twig */
class __TwigTemplate_ec7ec89f51830a61ad0f624e264ce7f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
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

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 22
        echo "    <style>       
        .container {
            width: 40%;
            margin-top: 100px;
        }        
    </style>
";
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        echo "           
    <div class=\"container well\">        
        <form class=\"form-horizontal\" action=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
            <fieldset>
                <legend><h2>Login</h2></legend>
                
                ";
        // line 37
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 38
            echo "                    <div class=\"alert alert-error fade in\">
                        <button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button>
                        <strong>Error</strong>
                        ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message"), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 44
        echo "                
                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"inputEmail\">Email</label>
                    <div class=\"controls\">
                        <input type=\"text\" id=\"inputEmail\" placeholder=\"Email\" name=\"_username\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\"/>
                    </div>
                </div>     

                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"inputPassword\">Password</label>
                    <div class=\"controls\">
                        <input type=\"password\" id=\"inputPassword\" placeholder=\"Password\" name=\"_password\"/>
                    </div>
                </div> 

                <input type=\"hidden\" name=\"_target_path\" value=\"user_edit\" />
                
                <div class=\"control-group\">
                    <div class=\"controls\">
                        <a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("register");
        echo "\">Register</a>
                    </div>                        
                </div>
                
                <div class=\"form-actions\">
                    <button class=\"btn btn-primary\" type=\"submit\">Sign in</button>
                </div>                     
            </fieldset>        
        </form>       
    </div>
";
    }

    public function getTemplateName()
    {
        return "SimpleProfileBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 48,  81 => 5,  53 => 13,  37 => 7,  23 => 1,  97 => 19,  83 => 41,  65 => 29,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 42,  111 => 37,  107 => 36,  71 => 19,  177 => 65,  165 => 64,  160 => 61,  139 => 50,  135 => 47,  126 => 45,  114 => 42,  84 => 28,  70 => 20,  67 => 15,  61 => 13,  47 => 9,  38 => 6,  94 => 22,  89 => 20,  85 => 43,  79 => 18,  75 => 23,  68 => 44,  56 => 14,  50 => 10,  29 => 21,  87 => 9,  72 => 33,  55 => 37,  21 => 2,  26 => 6,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  40 => 8,  44 => 12,  35 => 5,  31 => 3,  43 => 8,  41 => 8,  28 => 3,  201 => 92,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 58,  151 => 57,  142 => 59,  138 => 57,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 31,  69 => 25,  66 => 15,  62 => 41,  49 => 19,  24 => 4,  32 => 22,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 36,  112 => 42,  109 => 41,  106 => 42,  103 => 41,  99 => 30,  95 => 34,  92 => 63,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 16,  60 => 15,  57 => 38,  54 => 20,  51 => 12,  48 => 33,  45 => 9,  42 => 31,  39 => 9,  36 => 5,  33 => 6,  30 => 7,);
    }
}
