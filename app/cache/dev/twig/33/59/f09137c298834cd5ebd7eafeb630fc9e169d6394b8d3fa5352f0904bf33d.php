<?php

/* ProjectLineOfWorkBundle:Job:index.html.twig */
class __TwigTemplate_3359f09137c298834cd5ebd7eafeb630fc9e169d6394b8d3fa5352f0904bf33d extends Twig_Template
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
            <h2>Job list</h2>
    </div>
    <div class=\"col-lg-8 col-lg-offset-2\">
        <div class=\"row\">
            ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 10
            echo "            <div class=\"col-lg-12 category-label\">
                    <h4><a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_line_of_work_category_show", array("slug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a></h4>        
            </div>
            <div class=\"col-lg-12\">
                ";
            // line 14
            echo twig_include($this->env, $context, "ProjectLineOfWorkBundle:Job:list.html.twig", array("jobs" => $this->getAttribute($context["category"], "activejobs", array())));
            echo "
                ";
            // line 15
            if ($this->getAttribute($context["category"], "morejobs", array())) {
                // line 16
                echo "                    <div class='pull-right'>
                       and <a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_line_of_work_category_show", array("slug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "morejobs", array()), "html", null, true);
                echo "</a> more 
                    </div>              
                ";
            }
            // line 20
            echo "            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </div>
        
    </div>  
";
    }

    public function getTemplateName()
    {
        return "ProjectLineOfWorkBundle:Job:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 22,  70 => 20,  62 => 17,  59 => 16,  57 => 15,  53 => 14,  45 => 11,  42 => 10,  38 => 9,  31 => 4,  28 => 3,);
    }
}
