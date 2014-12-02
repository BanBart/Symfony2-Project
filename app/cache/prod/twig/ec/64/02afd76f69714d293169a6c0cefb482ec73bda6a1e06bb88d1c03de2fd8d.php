<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_ec6402afd76f69714d293169a6c0cefb482ec73bda6a1e06bb88d1c03de2fd8d extends Twig_Template
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
    <p><strong>Info!</strong>The Activation email has been sent. Check your email and activate your account.</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
