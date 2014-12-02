<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_9faa62eacf9f1c6540fa5ef9d5dd0ae84ce685ae5c6d49f4d7f59413afe8f0dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ProjectLineOfWorkBundle::layout.html.twig");

        $this->blocks = array(
            'register' => array($this, 'block_register'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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
    public function block_register($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 5
        echo "        <div class=\"col-lg-6 col-lg-offset-3\">
            <div class=\"body-header\">
                <h2>Create an account</h2>
            </div>        
            ";
        // line 9
        $this->env->loadTemplate("FOSUserBundle:Registration:register_content.html.twig")->display($context);
        // line 10
        echo "        </div>  
    ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  45 => 9,  39 => 5,  32 => 4,  29 => 3,);
    }
}
