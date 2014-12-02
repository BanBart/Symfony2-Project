<?php

/* ProjectLineOfWorkBundle::layout_login.html.twig */
class __TwigTemplate_4caa15e8fb09d09ed200b923a80b41c91e5c6cb6bc0e3474e745fa99b32b6e34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'register' => array($this, 'block_register'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
    ";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7f8d658_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7f8d658_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/7f8d658_part_1_custom_1.css");
            // line 10
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "7f8d658_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7f8d658_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/7f8d658_part_1_jquery_2.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "7f8d658_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7f8d658_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/7f8d658_part_1_sticky_footer_3.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
        } else {
            // asset "7f8d658"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7f8d658") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/7f8d658.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
        }
        unset($context["asset_url"]);
    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        // line 15
        echo "    
";
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "    <div class=\"col-lg-12 body\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-lg-offset-3\">
            ";
        // line 22
        $this->displayBlock('register', $context, $blocks);
        // line 24
        echo " 
            </div> 
        </div>
    </div>
";
    }

    // line 22
    public function block_register($context, array $blocks = array())
    {
        // line 23
        echo "                
            ";
    }

    // line 30
    public function block_footer($context, array $blocks = array())
    {
        // line 31
        echo "    
";
    }

    public function getTemplateName()
    {
        return "ProjectLineOfWorkBundle::layout_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 31,  108 => 30,  103 => 23,  100 => 22,  92 => 24,  90 => 22,  85 => 19,  82 => 18,  77 => 15,  74 => 14,  46 => 10,  42 => 7,  35 => 4,  32 => 3,);
    }
}
