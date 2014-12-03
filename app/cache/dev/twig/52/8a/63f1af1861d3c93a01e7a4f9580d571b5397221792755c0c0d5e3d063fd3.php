<?php

/* ProjectLineOfWorkBundle:Page:contact.html.twig */
class __TwigTemplate_528a63f1af1861d3c93a01e7a4f9580d571b5397221792755c0c0d5e3d063fd3 extends Twig_Template
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

    // line 2
    public function block_main($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"col-lg-8 col-lg-offset-2\">
        <div class=\"body-header\">
            <h2>Contact</h2>
        </div>
        <p>Do you have any questions or other important things to say? Fill this form and submit.
        We will answer as soon as possible.</p>
        
        <form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("project_line_of_work_contact");
        echo "#menu\" method='POST'>
            
            ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            
            <button type='submit' class=\"btn custom-button pull-right\">Send</button>
        </form>
    </div>  
";
    }

    public function getTemplateName()
    {
        return "ProjectLineOfWorkBundle:Page:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  40 => 10,  31 => 3,  28 => 2,);
    }
}
