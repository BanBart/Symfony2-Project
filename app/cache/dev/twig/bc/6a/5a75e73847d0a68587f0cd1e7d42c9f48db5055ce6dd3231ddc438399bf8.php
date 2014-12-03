<?php

/* ProjectLineOfWorkBundle:Page:search.html.twig */
class __TwigTemplate_bc6a5a75e73847d0a68587f0cd1e7d42c9f48db5055ce6dd3231ddc438399bf8 extends Twig_Template
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
        echo "

<div class=\"row\">
    <form action='";
        // line 4
        echo $this->env->getExtension('routing')->getPath("project_line_of_work_search");
        echo "' method=\"POST\">
        <div class=\"col-lg-12\">
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'widget', array("attr" => array("placeholder" => "position/location/category...", "value" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "query"), "method"), "list" => "search_data_list")));
        echo "
        <datalist id='search_data_list'>
            <option></option>
        </datalist>
        <a class='pull-right search-advanced' data-toggle='collapse' data-target='#more_options'>Advanced search &raquo;</a>
        </div>
        ";
        // line 18
        echo "        <div id='more_options' class=\"col-lg-12 collapse\">
            <div class='row'>
                <div class=\"col-lg-6\">
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'widget');
        echo "
                </div>
                <div  class=\"col-lg-6\">
                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "location", array()), 'widget', array("attr" => array("placeholder" => "location...")));
        echo "
                </div>
            </div> 
        </div>      
        <div class=\"clearfix visible-lg-block\"></div>
        <div class=\"col-lg-6 col-lg-offset-3\">
            <button id=\"search_btn\" type=\"submit\" class=\"btn custom-button form-control has-spinner\">
                <span class=\"spinner\"><i class=\"glyphicon gly glyphicon-refresh\"></i></span>
                Search</button>
        </div>
    </form>  
</div>


";
    }

    public function getTemplateName()
    {
        return "ProjectLineOfWorkBundle:Page:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 24,  43 => 21,  38 => 18,  29 => 6,  24 => 4,  19 => 1,);
    }
}
