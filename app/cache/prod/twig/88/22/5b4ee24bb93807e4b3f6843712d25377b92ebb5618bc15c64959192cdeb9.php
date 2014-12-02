<?php

/* ProjectLineOfWorkBundle:Article:oddity.html.twig */
class __TwigTemplate_88225b4ee24bb93807e4b3f6843712d25377b92ebb5618bc15c64959192cdeb9 extends Twig_Template
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
        echo "<article>
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oddity"]) ? $context["oddity"] : null), "content", array()), "html", null, true);
        echo "</p>
</article>
";
    }

    public function getTemplateName()
    {
        return "ProjectLineOfWorkBundle:Article:oddity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
