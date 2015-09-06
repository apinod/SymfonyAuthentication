<?php

/* SimpleProfileBundle:Security:register.html.twig */
class __TwigTemplate_917dc6b5125db2dc6fc39ffa5df2f1e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SimpleProfileBundle::layout.html.twig");

        $this->blocks = array(
            'contents' => array($this, 'block_contents'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SimpleProfileBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contents($context, array $blocks = array())
    {
        // line 4
        echo "<div id=\"container\" class=\"container\">
    <form class=\"form-horizontal well\" action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("user_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
;
        echo ">
        <fieldset>
            <legend><h2>Register User</h2></legend>                                                                         
            
            <div class=\"row-fluid\">
                <div class=\"span6\">                
                    <div class=\"control-group\">
                        ";
        // line 12
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName"), 'errors')) {
            // line 13
            echo "                            <div class=\"alert alert-error fade in\">
                                <button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button>
                                <strong>Error</strong>
                                ";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName"), 'errors');
            echo "
                            </div>                             
                        ";
        }
        // line 19
        echo "                            
                        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
                        <div class=\"controls\">";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName"), 'widget');
        echo "</div>
                    </div>   

                    <div class=\"control-group\">  
                        ";
        // line 25
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName"), 'errors')) {
            // line 26
            echo "                            <div class=\"alert alert-error fade in\">
                                <button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button>
                                <strong>Error</strong>
                                ";
            // line 29
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName"), 'errors');
            echo "
                            </div>                             
                        ";
        }
        // line 31
        echo "                        
                        
                        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
                        <div class=\"controls\">";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName"), 'widget');
        echo "</div>                
                    </div>  

                    <div class=\"control-group\">  
                        ";
        // line 38
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address"), 'errors')) {
            // line 39
            echo "                            <div class=\"alert alert-error fade in\">
                                <button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button>
                                <strong>Error</strong>
                                ";
            // line 42
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address"), 'errors');
            echo "
                            </div>                             
                        ";
        }
        // line 44
        echo "                          
                        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
                        <div class=\"controls\">";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address"), 'widget');
        echo "</div>                
                    </div>  
                    
                    <div>
                        <div class=\"control-group\">                         
                            <label class=\"control-label\" for=\"state\">State</label>
                            <div class=\"controls\"> 
                                <select id=\"state\">
                                    ";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["states"]) ? $context["states"] : $this->getContext($context, "states")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            echo "                                   
                                         <option value=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "name"), "html", null, true);
            echo "</option>  
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                        
                                </select>
                            </div>   
                        </div>  

                        <div id=\"ajax-waiting-loader\" class=\"hide control-group\" style=\"z-index: 1000000;\"> 
                            <div class=\"row offset1\">              
                                <p style=\"color: #000000;\"><img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/wait.gif"), "html", null, true);
        echo "\"><strong>&nbsp;Cargando ciudades....</strong></p>
                            </div>
                        </div>                              
                            
                        <div id=\"divCity\"  class=\"control-group\"> 
                            <label class=\"control-label\" for=\"lstCities\">City</label>
                            <div class=\"controls\">                        
                                <select id=\"lstCities\" size=5>
                                    ";
        // line 71
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cities"]) ? $context["cities"] : $this->getContext($context, "cities")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            echo "                                   
                                         <option value=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "name"), "html", null, true);
            echo "</option>  
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                                      
                                </select>
                            </div>  
                        </div>  
                    </div>                            
                </div>                

                <div class=\"span6\">  
                    
                    <div class=\"control-group\">                        
                        ";
        // line 83
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zipCode"), 'errors')) {
            // line 84
            echo "                            <div class=\"alert alert-error fade in\">
                                <button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button>
                                <strong>Error</strong>
                                ";
            // line 87
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zipCode"), 'errors');
            echo "
                            </div>                             
                        ";
        }
        // line 90
        echo "                        
                        ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zipCode"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
                        <div class=\"controls\">
                            ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zipCode"), 'widget');
        echo "
                        </div>                
                    </div> 
                    
                    <div class=\"control-group\">   
                        ";
        // line 98
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors')) {
            // line 99
            echo "                            <div class=\"alert alert-error fade in\">
                                <button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button>
                                <strong>Error</strong>
                                ";
            // line 102
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors');
            echo "
                            </div>                             
                        ";
        }
        // line 105
        echo "                            
                        ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
                        <div class=\"controls\">";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget');
        echo "</div>                
                    </div>                  
                    
                    ";
        // line 110
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"));
        foreach ($context['_seq'] as $context["_key"] => $context["passwordField"]) {
            // line 111
            echo "                        <div class=\"control-group\"> 
                            
                            ";
            // line 113
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["passwordField"]) ? $context["passwordField"] : $this->getContext($context, "passwordField")), 'errors')) {
                // line 114
                echo "                                <div class=\"alert alert-error fade in\">
                                    <button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button>
                                    <strong>Error</strong>
                                    ";
                // line 117
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["passwordField"]) ? $context["passwordField"] : $this->getContext($context, "passwordField")), 'errors');
                echo "
                                </div>                             
                            ";
            }
            // line 119
            echo "                            
                            
                            ";
            // line 121
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["passwordField"]) ? $context["passwordField"] : $this->getContext($context, "passwordField")), 'label', array("label_attr" => array("class" => "control-label")));
            echo "
                            <div class=\"controls\">";
            // line 122
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["passwordField"]) ? $context["passwordField"] : $this->getContext($context, "passwordField")), 'widget');
            echo "</div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['passwordField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "                         
                                            
                    <input type=\"hidden\" id=\"hdCity\" name=\"city\"/>                    
                    
                    ";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "             
                </div>                   
            </div>     
            
            <div class=\"form-actions\">
                <button class=\"btn btn-primary\" type=\"submit\">Register</button>
            </div> 
        </fieldset>            
    </form>
</div>
";
    }

    // line 140
    public function block_javascripts($context, array $blocks = array())
    {
        // line 141
        echo "<script type=\"text/javascript\">

var \$city = \$('form #hdCity');
var \$listCities = \$('#lstCities');
var \$listStates = \$('#state');

\$(function(){
       
    \$listCities.find(\"option:first\").attr('selected','selected');
    \$city.val(\$listCities.val());
    
    \$listCities.change(function(){
        \$city.val(\$listCities.val());
    });   
    
    \$listStates.change(function(){     
        \$(\"#divCity\").hide();
        \$(\"#ajax-waiting-loader\").show();  
        \$('form button').attr('disabled', '');
                  
        //\$('#errorBox').hide(); 
        \$url = \"";
        // line 162
        echo $this->env->getExtension('routing')->getPath("cities");
        echo "\";
        \$.ajax({ url: \$url,
                type: 'POST',
                data: \"state=\" + \$listStates.val(),
                async: false
        })
        .done(function(html){            
            /* if (html==\"\")
             {
                 //\$('form button').attr('disabled', '');
                  alert(html);                  
                  //location.href=\"";
        // line 173
        echo "\";
             }
             else
             {
                  alert(\"ERROR\"); 
                  //\$('#errorBox').show();                  
             }*/
            \$listCities.html(html);
            \$listCities.find(\"option:first\").attr('selected','selected');            
            \$city.val(\$listCities.val());             
        })
        .fail(function(error){
             alert(error);
        });        
        \$(\"#ajax-waiting-loader\").hide(); 
        \$(\"#divCity\").show();   
        \$('form button').removeAttr('disabled');
    }); 
    
    var \$otra_cosa = \$city.val();
    var \$otra_cosaM = 8;
    
});

</script>
";
    }

    public function getTemplateName()
    {
        return "SimpleProfileBundle:Security:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 173,  338 => 162,  315 => 141,  312 => 140,  297 => 128,  291 => 124,  282 => 122,  278 => 121,  274 => 119,  268 => 117,  263 => 114,  261 => 113,  257 => 111,  253 => 110,  247 => 107,  243 => 106,  240 => 105,  234 => 102,  229 => 99,  227 => 98,  219 => 93,  214 => 91,  211 => 90,  205 => 87,  200 => 84,  198 => 83,  186 => 73,  176 => 72,  170 => 71,  159 => 63,  150 => 56,  140 => 55,  134 => 54,  123 => 46,  119 => 45,  116 => 44,  110 => 42,  105 => 39,  103 => 38,  96 => 34,  92 => 33,  88 => 31,  82 => 29,  77 => 26,  75 => 25,  68 => 21,  64 => 20,  61 => 19,  55 => 16,  50 => 13,  48 => 12,  35 => 5,  32 => 4,  29 => 3,);
    }
}
