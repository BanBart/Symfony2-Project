<?php

/* ProjectLineOfWorkBundle:Job:list.html.twig */
class __TwigTemplate_1ac196a38095d9a2390519b0687e9f1b3362511a595485ae8249c5310c0ada4f extends Twig_Template
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
        echo "<table class=\"table\">
    <thead>
        <tr>
            <th>Position</th>
            <th>Company</th>
            <th>Location</th>
            <th></th>
        </tr>
    </thead>
    ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) ? $context["jobs"] : $this->getContext($context, "jobs")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 11
            echo "    <tbody>
        <tr class=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "even", 1 => "odd"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            echo "\" >
            <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "position", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "company", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "location", array()), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_line_of_work_job_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">more details...</a></td>
        </tr>
    </tbody>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "ProjectLineOfWorkBundle:Job:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 20,  66 => 16,  62 => 15,  58 => 14,  54 => 13,  50 => 12,  47 => 11,  30 => 10,  19 => 1,);
    }
}
