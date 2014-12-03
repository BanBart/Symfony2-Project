<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_e92ac7a879130dda711de9406bdd9d03e03a8824a04b6feb17f95bd12093aa78 extends Twig_Template
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
        echo "<div class=\"alert alert-success alert-dismissible\" role=\"alert\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
    <p><strong>Success!</strong>Account has been activated. You can now add your job or resume. Good luck.</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
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
