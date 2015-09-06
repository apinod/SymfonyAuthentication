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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
;
        echo ">
        <fieldset>
            <legend><h2>Register User</h2></legend>                                                                         
            
            <div class=\"row-fluid\">
                <div class=\"span6\">                
                    <div class=\"control-group\">
                        ";
        // line 12
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstName"), 'errors')) {
            // line 13
            echo "                            <div class=\"alert alert-error fade in\">
                                <button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button>
                                <strong>Error</strong>
                                ";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstName"), 'errors');
            echo "
                            </div>                             
                        ";
        }
        // line 19
        echo "                            
                        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstName"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
                        <div class=\"controls\">";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstName"), 'widget');
        echo "</div>
                    </div>   

                    <div class=\"control-group\">  
                        ";
        // line 25
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastName"), 'errors')) {
            // line 26
            echo "                            <div class=\"alert alert-error fade in\">
                                <button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button>
                                <strong>Error</strong>
                                ";
            // line 29
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastName"), 'errors');
            echo "
                            </div>                             
                        ";
        }
        // line 31
        echo "                        
                        
                        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastName"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
                        <div class=\"controls\">";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastName"), 'widget');
        echo "</div>                
                    </div>  

                    <div class=\"control-group\">  
                        ";
        // line 38
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address"), 'errors')) {
            // line 39
            echo "                            <div class=\"alert alert-error fade in\">
                                <button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button>
                                <strong>Error</strong>
                                ";
            // line 42
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address"), 'errors');
            echo "
                            </div>                             
                        ";
        }
        // line 44
        echo "                          
                        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
                        <div class=\"controls\">";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address"), 'widget');
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
        $context['_seq'] = twig_ensure_traversable((isset($context["states"]) ? $context["states"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            echo "                                   
                                         <option value=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "name"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["cities"]) ? $context["cities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            echo "                                   
                                         <option value=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "name"), "html", null, true);
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
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zipCode"), 'errors')) {
            // line 84
            echo "                            <div class=\"alert alert-error fade in\">
                                <button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button>
                                <strong>Error</strong>
                                ";
            // line 87
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zipCode"), 'errors');
            echo "
                            </div>                             
                        ";
        }
        // line 90
        echo "                        
                        ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zipCode"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
                        <div class=\"controls\">
                            ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zipCode"), 'widget');
        echo "
                        </div>                
                    </div> 
                    
                    <div class=\"control-group\">   
                        ";
        // line 98
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email"), 'errors')) {
            // line 99
            echo "                            <div class=\"alert alert-error fade in\">
                                <button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button>
                                <strong>Error</strong>
                                ";
            // line 102
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email"), 'errors');
            echo "
                            </div>                             
                        ";
        }
        // line 105
        echo "                            
                        ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
                        <div class=\"controls\">";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email"), 'widget');
        echo "</div>                
                    </div>                  
                    
                    ";
        // line 110
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password"));
        foreach ($context['_seq'] as $context["_key"] => $context["passwordField"]) {
            // line 111
            echo "                        <div class=\"control-group\"> 
                            
                            ";
            // line 113
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["passwordField"]) ? $context["passwordField"] : null), 'errors')) {
                // line 114
                echo "                                <div class=\"alert alert-error fade in\">
                                    <button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button>
                                    <strong>Error</strong>
                                    ";
                // line 117
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["passwordField"]) ? $context["passwordField"] : null), 'errors');
                echo "
                                </div>                             
                            ";
            }
            // line 119
            echo "                            
                            
                            ";
            // line 121
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["passwordField"]) ? $context["passwordField"] : null), 'label', array("label_attr" => array("class" => "control-label")));
            echo "
                            <div class=\"controls\">";
            // line 122
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["passwordField"]) ? $context["passwordField"] : null), 'widget');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
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
        return array (  352 => 173,  338 => 162,  315 => 141,  297 => 128,  291 => 124,  282 => 122,  274 => 119,  263 => 114,  261 => 113,  257 => 111,  253 => 110,  243 => 106,  240 => 105,  234 => 102,  227 => 98,  219 => 93,  211 => 90,  205 => 87,  200 => 84,  198 => 83,  186 => 73,  170 => 71,  159 => 63,  150 => 56,  134 => 54,  110 => 42,  96 => 34,  77 => 26,  74 => 48,  81 => 5,  53 => 13,  37 => 7,  23 => 1,  97 => 19,  83 => 41,  65 => 29,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 140,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 121,  268 => 117,  264 => 84,  258 => 81,  252 => 80,  247 => 107,  241 => 77,  235 => 74,  229 => 99,  224 => 71,  220 => 70,  214 => 91,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 45,  111 => 37,  107 => 36,  71 => 19,  177 => 65,  165 => 64,  160 => 61,  139 => 50,  135 => 47,  126 => 45,  114 => 42,  84 => 28,  70 => 20,  67 => 15,  61 => 19,  47 => 9,  38 => 6,  94 => 22,  89 => 20,  85 => 43,  79 => 18,  75 => 25,  68 => 21,  56 => 14,  50 => 13,  29 => 3,  87 => 9,  72 => 33,  55 => 16,  21 => 2,  26 => 6,  98 => 31,  93 => 28,  88 => 31,  78 => 21,  46 => 7,  27 => 4,  40 => 8,  44 => 12,  35 => 5,  31 => 3,  43 => 8,  41 => 8,  28 => 3,  201 => 92,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 58,  151 => 57,  142 => 59,  138 => 57,  136 => 56,  123 => 46,  121 => 46,  117 => 44,  115 => 43,  105 => 39,  101 => 32,  91 => 31,  69 => 25,  66 => 15,  62 => 41,  49 => 19,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 72,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 44,  112 => 42,  109 => 41,  106 => 42,  103 => 38,  99 => 30,  95 => 34,  92 => 33,  86 => 28,  82 => 29,  80 => 19,  73 => 19,  64 => 20,  60 => 15,  57 => 38,  54 => 20,  51 => 12,  48 => 12,  45 => 9,  42 => 31,  39 => 9,  36 => 5,  33 => 6,  30 => 7,);
    }
}
