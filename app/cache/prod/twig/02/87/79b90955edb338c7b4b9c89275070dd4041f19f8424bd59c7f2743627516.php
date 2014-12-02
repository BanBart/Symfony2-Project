<?php

/* ProjectLineOfWorkBundle:Page:index.html.twig */
class __TwigTemplate_028779b90955edb338c7b4b9c89275070dd4041f19f8424bd59c7f2743627516 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ProjectLineOfWorkBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'slider' => array($this, 'block_slider'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "ProjectLineOfWorkBundle:Components:content.html.twig");
        echo "
";
    }

    // line 9
    public function block_slider($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        echo twig_include($this->env, $context, "ProjectLineOfWorkBundle:Components:slider.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "ProjectLineOfWorkBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  46 => 9,  39 => 5,  33 => 4,  30 => 3,);
    }
}
