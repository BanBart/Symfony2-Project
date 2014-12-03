<?php

/* ProjectLineOfWorkBundle:Page:search_result.html.twig */
class __TwigTemplate_3e3cb9f20ba8121e3b115c4150a5be8e2d15f379731354c809c31c25ea74e74c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ProjectLineOfWorkBundle::layout.html.twig");

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ProjectLineOfWorkBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"col-lg-8 col-lg-offset-2 body-header\">
        <h2>Search result</h2>
    </div>
    <div class=\"col-lg-8 col-lg-offset-2\">
        <div class=\"row\">          
            <div class=\"col-lg-12\">
                ";
        // line 10
        echo twig_include($this->env, $context, "ProjectLineOfWorkBundle:Job:list.html.twig", array("jobs" => (isset($context["results"]) ? $context["results"] : $this->getContext($context, "results"))));
        echo "
            </div>           
        </div>  
    </div>  
";
    }

    public function getTemplateName()
    {
        return "ProjectLineOfWorkBundle:Page:search_result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  31 => 4,  28 => 3,);
    }
}
