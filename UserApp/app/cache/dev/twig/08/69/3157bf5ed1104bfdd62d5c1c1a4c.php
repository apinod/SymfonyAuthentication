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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "firstName"), "html", null, true);
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
;
        echo ">      
        <fieldset>
            <legend><h2>Edit User</h2></legend>                                           
            
        ";
        // line 14
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            echo "            
            <div id=\"errorBox\" class=\"alert alert-error fade in\">
                <button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button>
                <strong>Error</strong>
                ";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 20
        echo "            
            
        ";
        // line 22
        if ((isset($context["success"]) ? $context["success"] : $this->getContext($context, "success"))) {
            echo "                       
            <div id=\"successBox\" class=\"alert alert-success fade in\">
                <button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button>
                <strong>Success</strong>
                ";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
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
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName"), 'errors')) {
            // line 34
            echo "                            <div class=\"alert alert-error fade in\">
                                <button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button>
                                <strong>Error</strong>
                                ";
            // line 37
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName"), 'errors');
            echo "
                            </div>                             
                        ";
        }
        // line 40
        echo "                            
                        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
                        <div class=\"controls\">";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName"), 'widget');
        echo "</div>
                    </div>   

                    <div class=\"control-group\"> 
                        
                        ";
        // line 47
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName"), 'errors')) {
            // line 48
            echo "                            <div class=\"alert alert-error fade in\">
                                <button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button>
                                <strong>Error</strong>
                                ";
            // line 51
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName"), 'errors');
            echo "
                            </div>                             
                        ";
        }
        // line 54
        echo "                            
                        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
                        <div class=\"controls\">";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName"), 'widget');
        echo "</div>                
                    </div>  

                    <div class=\"control-group\"> 
                        ";
        // line 60
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address"), 'errors')) {
            // line 61
            echo "                            <div class=\"alert alert-error fade in\">
                                <button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button>
                                <strong>Error</strong>
                                ";
            // line 64
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address"), 'errors');
            echo "
                            </div>                             
                        ";
        }
        // line 66
        echo "                        
                        ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
                        <div class=\"controls\">";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address"), 'widget');
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
        $context['_seq'] = twig_ensure_traversable((isset($context["states"]) ? $context["states"] : $this->getContext($context, "states")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            echo "                                   
                                         <option value=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "name"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["cities"]) ? $context["cities"] : $this->getContext($context, "cities")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            echo "                                   
                                         <option value=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "name"), "html", null, true);
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
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zipCode"), 'errors')) {
            // line 106
            echo "                            <div class=\"alert alert-error fade in\">
                                <button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button>
                                <strong>Error</strong>
                                ";
            // line 109
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zipCode"), 'errors');
            echo "
                            </div>                             
                        ";
        }
        // line 112
        echo "                            
                        ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zipCode"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
                        <div class=\"controls\">";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zipCode"), 'widget');
        echo "</div>                
                    </div> 
                    
                    <div class=\"control-group\">
                        ";
        // line 118
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors')) {
            // line 119
            echo "                            <div class=\"alert alert-error fade in\">
                                <button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button>
                                <strong>Error</strong>
                                ";
            // line 122
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors');
            echo "
                            </div>                             
                        ";
        }
        // line 125
        echo "                        
                        ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
                        <div class=\"controls\">";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget');
        echo "</div>                
                    </div>

                    ";
        // line 130
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"));
        foreach ($context['_seq'] as $context["_key"] => $context["passwordField"]) {
            // line 131
            echo "                        <div class=\"control-group\">
                            
                            ";
            // line 133
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["passwordField"]) ? $context["passwordField"] : $this->getContext($context, "passwordField")), 'errors')) {
                // line 134
                echo "                                <div class=\"alert alert-error fade in\">
                                    <button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button>
                                    <strong>Error</strong>
                                    ";
                // line 137
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["passwordField"]) ? $context["passwordField"] : $this->getContext($context, "passwordField")), 'errors');
                echo "
                                </div>                             
                            ";
            }
            // line 139
            echo "                             
                            
                            ";
            // line 141
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["passwordField"]) ? $context["passwordField"] : $this->getContext($context, "passwordField")), 'label', array("label_attr" => array("class" => "control-label")));
            echo "
                            <div class=\"controls\">";
            // line 142
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["passwordField"]) ? $context["passwordField"] : $this->getContext($context, "passwordField")), 'widget');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
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
        echo twig_escape_filter($this->env, (isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "html", null, true);
        echo ");
    \$city.val(\$listCities.val());
    \$listStates.val(";
        // line 184
        echo twig_escape_filter($this->env, (isset($context["state"]) ? $context["state"] : $this->getContext($context, "state")), "html", null, true);
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
        return array (  425 => 207,  411 => 196,  396 => 184,  391 => 182,  380 => 173,  377 => 172,  369 => 167,  364 => 165,  344 => 148,  338 => 144,  329 => 142,  325 => 141,  321 => 139,  315 => 137,  310 => 134,  308 => 133,  304 => 131,  300 => 130,  294 => 127,  290 => 126,  287 => 125,  281 => 122,  276 => 119,  274 => 118,  267 => 114,  263 => 113,  260 => 112,  254 => 109,  249 => 106,  247 => 105,  235 => 95,  225 => 94,  219 => 93,  208 => 85,  199 => 78,  189 => 77,  183 => 76,  172 => 68,  168 => 67,  165 => 66,  159 => 64,  154 => 61,  152 => 60,  145 => 56,  141 => 55,  138 => 54,  132 => 51,  127 => 48,  125 => 47,  117 => 42,  113 => 41,  110 => 40,  104 => 37,  99 => 34,  97 => 33,  90 => 28,  84 => 26,  77 => 22,  73 => 20,  67 => 18,  60 => 14,  50 => 10,  47 => 9,  44 => 8,  38 => 5,  33 => 4,  30 => 3,);
    }
}
