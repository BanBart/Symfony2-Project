<?php

/* ProjectLineOfWorkBundle:Category:show.html.twig */
class __TwigTemplate_ad7484bb0b54d21f32fc4e6440fffeea9611f32c1bd3dd281c11c18ec7083eba extends Twig_Template
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
            <h2>Category - ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo "</h2>
    </div>
    <div class=\"col-lg-8 col-lg-offset-2\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                ";
        // line 10
        echo twig_include($this->env, $context, "ProjectLineOfWorkBundle:Job:list.html.twig", array("jobs" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "activejobs", array())));
        echo "
            </div>
            <div class=\"col-lg-4 col-lg-offset-4\">
                <ul class='pager'>                  
                    ";
        // line 14
        if (((isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")) > 1)) {
            echo "           
                        <li><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_line_of_work_category_show", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug", array()), "page" => (isset($context["previous_page"]) ? $context["previous_page"] : $this->getContext($context, "previous_page")))), "html", null, true);
            echo "\">Prevous page</a></li>
                    ";
        }
        // line 17
        echo "                    ";
        if (((isset($context["total_jobs"]) ? $context["total_jobs"] : $this->getContext($context, "total_jobs")) > (isset($context["jobs_per_page"]) ? $context["jobs_per_page"] : $this->getContext($context, "jobs_per_page")))) {
            // line 18
            echo "                        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_line_of_work_category_show", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug", array()), "page" => (isset($context["next_page"]) ? $context["next_page"] : $this->getContext($context, "next_page")))), "html", null, true);
            echo "\">Next page</a></li>
                    ";
        }
        // line 20
        echo "                </ul>
            </div>
            <div class=\"col-lg-4\">
                <strong>";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["total_jobs"]) ? $context["total_jobs"] : $this->getContext($context, "total_jobs")), "html", null, true);
        echo "</strong> jobs in this category
                ";
        // line 24
        if (((isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")) > 1)) {
            // line 25
            echo "                    - page <strong>";
            echo twig_escape_filter($this->env, (isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")), "html", null, true);
            echo "</strong>
                ";
        }
        // line 27
        echo "            </div>
        </div>
    </div> 
                
";
    }

    public function getTemplateName()
    {
        return "ProjectLineOfWorkBundle:Category:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 27,  78 => 25,  76 => 24,  72 => 23,  67 => 20,  61 => 18,  58 => 17,  53 => 15,  49 => 14,  42 => 10,  34 => 5,  31 => 4,  28 => 3,);
    }
}
