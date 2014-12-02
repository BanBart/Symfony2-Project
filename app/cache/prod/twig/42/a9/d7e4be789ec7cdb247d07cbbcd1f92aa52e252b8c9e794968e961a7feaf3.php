<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_42a9d7e4be789ec7cdb247d07cbbcd1f92aa52e252b8c9e794968e961a7feaf3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ProjectLineOfWorkBundle::layout.html.twig");

        $this->blocks = array(
            'alert' => array($this, 'block_alert'),
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
    public function block_alert($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"alert alert-info alert-dismissible\" role=\"alert\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
    <p><strong>Info!</strong>The reseting email has been requested in 24 hours. Check your email again and change your password.</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
