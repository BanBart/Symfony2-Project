<?php

/* ProjectLineOfWorkBundle:Jquery:test.html.twig */
class __TwigTemplate_f22b69e252780ec6f3cffc49b588bd7c9893d0f55db5aad17c17409422a37cc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "

<body>
<div id=\"divArea\" style=\"background-color: silver; width: 100px; height: 100px;\">


    
    
    ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo " 
</body>

        ";
    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 2
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            ";
        // line 4
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f44913a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f44913a_0") : $this->env->getExtension('assets')->getAssetUrl("css/f44913a_part_1.css");
            // line 8
            echo "                <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"/>
            ";
            // asset "f44913a_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f44913a_1") : $this->env->getExtension('assets')->getAssetUrl("css/f44913a_jquery_2.css");
            echo "                <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"/>
            ";
        } else {
            // asset "f44913a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f44913a") : $this->env->getExtension('assets')->getAssetUrl("css/f44913a.css");
            echo "                <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"/>
            ";
        }
        unset($context["asset_url"]);
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        // line 20
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a7dbfb5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a7dbfb5_0") : $this->env->getExtension('assets')->getAssetUrl("js/a7dbfb5_part_1.js");
            // line 23
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
            ";
            // asset "a7dbfb5_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a7dbfb5_1") : $this->env->getExtension('assets')->getAssetUrl("js/a7dbfb5_part_2.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
            ";
            // asset "a7dbfb5_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a7dbfb5_2") : $this->env->getExtension('assets')->getAssetUrl("js/a7dbfb5_jquery_3.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "a7dbfb5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a7dbfb5") : $this->env->getExtension('assets')->getAssetUrl("js/a7dbfb5.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 25
        echo "    ";
    }

    public function getTemplateName()
    {
        return "ProjectLineOfWorkBundle:Jquery:test.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  109 => 25,  83 => 23,  78 => 20,  75 => 19,  53 => 8,  49 => 4,  45 => 2,  42 => 1,  35 => 25,  33 => 19,  23 => 11,  21 => 1,);
    }
}
