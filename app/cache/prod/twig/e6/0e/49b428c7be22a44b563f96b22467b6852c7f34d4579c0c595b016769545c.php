<?php

/* ProjectLineOfWorkBundle::layout_null.html.twig */
class __TwigTemplate_e60e49b428c7be22a44b563f96b22467b6852c7f34d4579c0c595b016769545c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'register' => array($this, 'block_register'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('register', $context, $blocks);
    }

    public function block_register($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "ProjectLineOfWorkBundle::layout_null.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,);
    }
}
