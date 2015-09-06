<?php

/* SimpleProfileBundle:User:edit.html.twig */
class __TwigTemplate_08693157bf5ed1104bfdd62d5c1c1a4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SimpleProfileBundle::layout.html.twig");

        $this->blocks = array(
            'username' => array($this, 'block_username'),
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
    public function block_username($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("username", $context, $blocks);
        echo "
    ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "firstName"), "html", null, true);
        echo "
";
    }

    // line 8
    public function block_contents($context, array $blocks = array())
    {
        // line 9
        echo "<div id=\"container\" class=\"container\">
    <form class=\"form-horizontal well\" action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("user_update");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
;
        echo ">      
        <fieldset>
            <legend><h2>Edit User</h2></legend>                                           
            
        ";
        // line 14
        if ((isset($context["error"]) ? $context["error"] : null)) {
            echo "            
            <div id=\"errorBox\" class=\"alert alert-error fade in\">
                <button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button>
                <strong>Error</strong>
                ";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 20
        echo "            
            
        ";
        // line 22
        if ((isset($context["success"]) ? $context["success"] : null)) {
            echo "                       
            <div id=\"successBox\" class=\"alert alert-success fade in\">
                <button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button>
                <strong>Success</strong>
                ";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "
            </div>          
        ";
        }
        // line 28
        echo " 
            
            <div class=\"row-fluid\">
                <div class=\"span6\">                
                    <div class=\"control-group\">
                        ";
        // line 33
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstName"), 'errors')) {
            // line 34
            echo "                            <div class=\"alert alert-error fade in\">
                                <button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button>
                                <strong>Error</strong>
                                ";
            // line 37
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstName"), 'errors');
            echo "
                            </div>                             
                        ";
        }
        // line 40
        echo "                            
                        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstName"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
                        <div class=\"controls\">";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstName"), 'widget');
        echo "</div>
                    </div>   

                    <div class=\"control-group\"> 
                        
                        ";
        // line 47
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastName"), 'errors')) {
            // line 48
            echo "                            <div class=\"alert alert-error fade in\">
                                <button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button>
                                <strong>Error</strong>
                                ";
            // line 51
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastName"), 'errors');
            echo "
                            </div>                             
                        ";
        }
        // line 54
        echo "                            
                        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastName"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
                        <div class=\"controls\">";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastName"), 'widget');
        echo "</div>                
                    </div>  

                    <div class=\"control-group\"> 
                        ";
        // line 60
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address"), 'errors')) {
            // line 61
            echo "                            <div class=\"alert alert-error fade in\">
                                <button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button>
                                <strong>Error</strong>
                                ";
            // line 64
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address"), 'errors');
            echo "
                            </div>                             
                        ";
        }
        // line 66
        echo "                        
                        ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
                        <div class=\"controls\">";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address"), 'widget');
        echo "</div>                
                    </div>  
                    
                    <div>
                        <div class=\"control-group\">                         
                            <label class=\"control-label\" for=\"state\">State</label>
                            <div class=\"controls\"> 
                                <select id=\"state\">
                                    ";
        // line 76
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["states"]) ? $context["states"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            echo "                                   
                                         <option value=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "name"), "html", null, true);
            echo "</option>  
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                        
                                </select>
                            </div>   
                        </div>  

                        <div id=\"ajax-waiting-loader\" class=\"hide control-group\" style=\"z-index: 1000000;\"> 
                            <div class=\"row offset1\">              
                                <p style=\"color: #000000;\"><img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/wait.gif"), "html", null, true);
        echo "\"><strong>&nbsp;Cargando ciudades....</strong></p>
                            </div>
                        </div>                              
                            
                        <div id=\"divCity\"  class=\"control-group\"> 
                            <label class=\"control-label\" for=\"lstCities\">City</label>
                            <div class=\"controls\">                        
                                <select id=\"lstCities\" size=5>
                                    ";
        // line 93
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cities"]) ? $context["cities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            echo "                                   
                                         <option value=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "name"), "html", null, true);
            echo "</option>  
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "                                      
                                </select>
                            </div>  
                        </div>  
                    </div>                            
                </div>                

                <div class=\"span6\">  
                    
                    <div class=\"control-group\">    
                        ";
        // line 105
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zipCode"), 'errors')) {
            // line 106
            echo "                            <div class=\"alert alert-error fade in\">
                                <button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button>
                                <strong>Error</strong>
                                ";
            // line 109
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zipCode"), 'errors');
            echo "
                            </div>                             
                        ";
        }
        // line 112
        echo "                            
                        ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zipCode"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
                        <div class=\"controls\">";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zipCode"), 'widget');
        echo "</div>                
                    </div> 
                    
                    <div class=\"control-group\">
                        ";
        // line 118
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email"), 'errors')) {
            // line 119
            echo "                            <div class=\"alert alert-error fade in\">
                                <button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button>
                                <strong>Error</strong>
                                ";
            // line 122
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email"), 'errors');
            echo "
                            </div>                             
                        ";
        }
        // line 125
        echo "                        
                        ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
                        <div class=\"controls\">";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email"), 'widget');
        echo "</div>                
                    </div>

                    ";
        // line 130
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password"));
        foreach ($context['_seq'] as $context["_key"] => $context["passwordField"]) {
            // line 131
            echo "                        <div class=\"control-group\">
                            
                            ";
            // line 133
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["passwordField"]) ? $context["passwordField"] : null), 'errors')) {
                // line 134
                echo "                                <div class=\"alert alert-error fade in\">
                                    <button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button>
                                    <strong>Error</strong>
                                    ";
                // line 137
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["passwordField"]) ? $context["passwordField"] : null), 'errors');
                echo "
                                </div>                             
                            ";
            }
            // line 139
            echo "                             
                            
                            ";
            // line 141
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["passwordField"]) ? $context["passwordField"] : null), 'label', array("label_attr" => array("class" => "control-label")));
            echo "
                            <div class=\"controls\">";
            // line 142
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["passwordField"]) ? $context["passwordField"] : null), 'widget');
            echo "</div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['passwordField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "                         
                                            
                    <input type=\"hidden\" id=\"hdCity\" name=\"city\"/>                    
                    
                    ";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "             
                </div>                   
            </div>     
            
            <div class=\"form-actions\">
                <div class=\"row-fluid\">
                    <div class=\"span2\">                
                        <button id=\"updateBtn\" class=\"btn btn-primary\" type=\"submit\">Update</button>
                    </div>
                    <div class=\"span2\">
                        <button id=\"deleteBtn\" class=\"btn btn-danger\" type=\"button\">Delete</button>                            
                    </div>
                </div>                              
            </div>                        
        </fieldset>            
    </form>

    <form id=\"deleteForm\" action=\"";
        // line 165
        echo $this->env->getExtension('routing')->getPath("user_delete");
        echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
        ";
        // line 167
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'widget');
        echo "
    </form>          
</div>
";
    }

    // line 172
    public function block_javascripts($context, array $blocks = array())
    {
        // line 173
        echo "<script type=\"text/javascript\">

var \$city = \$('form #hdCity');
var \$listCities = \$('#lstCities');
var \$listStates = \$('#state');

\$(function(){        
    
    //\$listCities.find(\"option:first\").attr('selected','selected');
    \$listCities.val(";
        // line 182
        echo twig_escape_filter($this->env, (isset($context["city"]) ? $context["city"] : null), "html", null, true);
        echo ");
    \$city.val(\$listCities.val());
    \$listStates.val(";
        // line 184
        echo twig_escape_filter($this->env, (isset($context["state"]) ? $context["state"] : null), "html", null, true);
        echo ");
    
    \$listCities.change(function(){
        \$city.val(\$listCities.val());
    });   
    
    \$listStates.change(function(){     
        \$(\"#divCity\").hide();
        \$(\"#ajax-waiting-loader\").show();  
        \$('#updateBtn').attr('disabled', '');        
        \$('#deleteBtn').attr('disabled', '');
                  
        \$url = \"";
        // line 196
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
        // line 207
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
        \$('#updateBtn').removeAttr('disabled');
        \$('#deleteBtn').removeAttr('disabled');        
    }); 
    
    \$('#deleteBtn').click(function(e){
        \$('#deleteForm').submit();
    });
    
});

</script>
";
    }

    public function getTemplateName()
    {
        return "SimpleProfileBundle:User:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 207,  411 => 196,  396 => 184,  391 => 182,  380 => 173,  377 => 172,  369 => 167,  364 => 165,  344 => 148,  329 => 142,  325 => 141,  321 => 139,  310 => 134,  308 => 133,  304 => 131,  300 => 130,  290 => 126,  287 => 125,  281 => 122,  276 => 119,  267 => 114,  260 => 112,  254 => 109,  249 => 106,  225 => 94,  172 => 68,  152 => 60,  145 => 56,  127 => 48,  113 => 41,  104 => 37,  90 => 28,  352 => 173,  338 => 144,  315 => 137,  297 => 128,  291 => 124,  282 => 122,  274 => 118,  263 => 113,  261 => 113,  257 => 111,  253 => 110,  243 => 106,  240 => 105,  234 => 102,  227 => 98,  219 => 93,  211 => 90,  205 => 87,  200 => 84,  198 => 83,  186 => 73,  170 => 71,  159 => 64,  150 => 56,  134 => 54,  110 => 40,  96 => 34,  77 => 22,  74 => 48,  81 => 5,  53 => 13,  37 => 7,  23 => 1,  97 => 33,  83 => 41,  65 => 29,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 140,  309 => 97,  305 => 95,  298 => 91,  294 => 127,  285 => 89,  283 => 88,  278 => 121,  268 => 117,  264 => 84,  258 => 81,  252 => 80,  247 => 105,  241 => 77,  235 => 95,  229 => 99,  224 => 71,  220 => 70,  214 => 91,  208 => 85,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 45,  111 => 37,  107 => 36,  71 => 19,  177 => 65,  165 => 66,  160 => 61,  139 => 50,  135 => 47,  126 => 45,  114 => 42,  84 => 26,  70 => 20,  67 => 18,  61 => 19,  47 => 9,  38 => 5,  94 => 22,  89 => 20,  85 => 43,  79 => 18,  75 => 25,  68 => 21,  56 => 14,  50 => 10,  29 => 3,  87 => 9,  72 => 33,  55 => 16,  21 => 2,  26 => 6,  98 => 31,  93 => 28,  88 => 31,  78 => 21,  46 => 7,  27 => 4,  40 => 8,  44 => 8,  35 => 5,  31 => 3,  43 => 8,  41 => 8,  28 => 3,  201 => 92,  196 => 90,  183 => 76,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 58,  151 => 57,  142 => 59,  138 => 54,  136 => 56,  123 => 46,  121 => 46,  117 => 42,  115 => 43,  105 => 39,  101 => 32,  91 => 31,  69 => 25,  66 => 15,  62 => 41,  49 => 19,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 78,  193 => 73,  189 => 77,  187 => 84,  182 => 66,  176 => 72,  173 => 74,  168 => 67,  164 => 59,  162 => 62,  154 => 61,  149 => 51,  147 => 58,  144 => 53,  141 => 55,  133 => 55,  130 => 41,  125 => 47,  122 => 43,  116 => 44,  112 => 42,  109 => 41,  106 => 42,  103 => 38,  99 => 34,  95 => 34,  92 => 33,  86 => 28,  82 => 29,  80 => 19,  73 => 20,  64 => 20,  60 => 14,  57 => 38,  54 => 20,  51 => 12,  48 => 12,  45 => 9,  42 => 31,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
