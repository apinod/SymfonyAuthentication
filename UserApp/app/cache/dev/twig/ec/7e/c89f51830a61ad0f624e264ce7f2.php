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
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 38
            echo "                    <div class=\"alert alert-error fade in\">
                        <button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button>
                        <strong>Error</strong>
                        ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
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
        return array (  92 => 63,  74 => 48,  68 => 44,  62 => 41,  57 => 38,  55 => 37,  48 => 33,  42 => 31,  32 => 22,  29 => 21,);
    }
}
