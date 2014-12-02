<?php

/* ProjectLineOfWorkBundle:Feedback:selectOneFeedback.html.twig */
class __TwigTemplate_fdd2797c6d153645345307627d95ac0d58cc70ce00f375daeeb88618c01a8c6e extends Twig_Template
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
        echo "<p><strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feedback"]) ? $context["feedback"] : $this->getContext($context, "feedback")), "feedbackername", array()), "html", null, true);
        echo "</strong><br>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feedback"]) ? $context["feedback"] : $this->getContext($context, "feedback")), "content", array()), "html", null, true);
        echo "
</p>   
";
    }

    public function getTemplateName()
    {
        return "ProjectLineOfWorkBundle:Feedback:selectOneFeedback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
