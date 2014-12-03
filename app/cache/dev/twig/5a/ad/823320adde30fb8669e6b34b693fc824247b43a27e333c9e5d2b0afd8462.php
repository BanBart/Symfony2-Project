<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_5aad823320adde30fb8669e6b34b693fc824247b43a27e333c9e5d2b0afd8462 extends Twig_Template
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

    // line 2
    public function block_register($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "        <div class=\"col-lg-6 col-lg-offset-3\">
            <div class=\"body-header\">
                <h2>Change your password</h2>
            </div>
    ";
        // line 8
        $this->env->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig")->display($context);
        // line 9
        echo "        </div>
    ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  45 => 8,  39 => 4,  32 => 3,  29 => 2,);
    }
}
