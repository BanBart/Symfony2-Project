<?php

/* ProjectLineOfWorkBundle:Job:latestJobs.html.twig */
class __TwigTemplate_9e74344a54f5adb1284d7c18cb37a84bf14281e1331692eb61a3b85b2e702130 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) ? $context["jobs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 2
            echo "<div class=\"col-lg-3\">
    <div class='job-slider text-center'>
        <h3><a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_line_of_work_job_show", array("id" => $this->getAttribute($context["job"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "position", array()), "html", null, true);
            echo "</a></h3>
        <p><a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_line_of_work_category_show", array("slug" => $this->getAttribute($this->getAttribute($context["job"], "category", array()), "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "category", array()), "html", null, true);
            echo "</a></p>
        <p>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "company", array()), "html", null, true);
            echo "</p>
        <p><a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "url", array()), "html", null, true);
            echo "</a></p>
        <p>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "location", array()), "html", null, true);
            echo "</p>
        <p class='text-muted'>Added: ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('project_lineofwork_extension')->createdAgo($this->getAttribute($context["job"], "createdat", array())), "html", null, true);
            echo "</p>
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "ProjectLineOfWorkBundle:Job:latestJobs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  49 => 8,  43 => 7,  39 => 6,  33 => 5,  27 => 4,  23 => 2,  19 => 1,);
    }
}
