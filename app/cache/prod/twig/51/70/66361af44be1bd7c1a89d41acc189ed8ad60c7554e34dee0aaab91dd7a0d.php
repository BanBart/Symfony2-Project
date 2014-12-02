<?php

/* ProjectLineOfWorkBundle:Page:about.html.twig */
class __TwigTemplate_517066361af44be1bd7c1a89d41acc189ed8ad60c7554e34dee0aaab91dd7a0d extends Twig_Template
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
        echo "    <div class=\"col-lg-8 col-lg-offset-2\">
    <div class=\"body-header\">
        <h2>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["about"]) ? $context["about"] : null), "articletype", array()), "html", null, true);
        echo "</h2>
    </div>
    <article>
        <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["about"]) ? $context["about"] : null), "content", array()), "html", null, true);
        echo "</p>
    </article>        
    </div>

";
    }

    public function getTemplateName()
    {
        return "ProjectLineOfWorkBundle:Page:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  35 => 6,  31 => 4,  28 => 3,);
    }
}
