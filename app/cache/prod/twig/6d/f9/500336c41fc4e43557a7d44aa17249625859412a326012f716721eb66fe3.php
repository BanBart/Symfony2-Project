<?php

/* ProjectLineOfWorkBundle:Commercial:commercial.html.twig */
class __TwigTemplate_6df9500336c41fc4e43557a7d44aa17249625859412a326012f716721eb66fe3 extends Twig_Template
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
    <h3 class='text-center'>";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commercial"]) ? $context["commercial"] : null), "name", array()), "html", null, true);
        echo "</h3>
    <p class='text-center'>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commercial"]) ? $context["commercial"] : null), "content", array()), "html", null, true);
        echo "</p>

";
    }

    public function getTemplateName()
    {
        return "ProjectLineOfWorkBundle:Commercial:commercial.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }
}
