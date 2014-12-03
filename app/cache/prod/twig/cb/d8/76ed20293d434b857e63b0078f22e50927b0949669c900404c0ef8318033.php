<?php

/* ProjectLineOfWorkBundle:Page:contactEmail.txt.twig */
class __TwigTemplate_cbd876ed20293d434b857e63b0078f22e50927b0949669c900404c0ef8318033 extends Twig_Template
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
        echo "A contact enquiry was made by ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : null), "name", array()), "html", null, true);
        echo " at ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d H:i"), "html", null, true);
        echo "

Replay-to: ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : null), "email", array()), "html", null, true);
        echo "
Subject: ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : null), "subject", array()), "html", null, true);
        echo "
Body:
";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : null), "body", array()), "html", null, true);
    }

    public function getTemplateName()
    {
        return "ProjectLineOfWorkBundle:Page:contactEmail.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  31 => 4,  27 => 3,  19 => 1,);
    }
}
