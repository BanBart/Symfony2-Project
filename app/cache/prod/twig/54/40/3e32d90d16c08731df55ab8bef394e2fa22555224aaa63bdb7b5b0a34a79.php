<?php

/* ::base.html.twig */
class __TwigTemplate_54403e32d90d16c08731df55ab8bef394e2fa22555224aaa63bdb7b5b0a34a79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'slider' => array($this, 'block_slider'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\" charset=\"utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " - Line Of Work</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        
        ";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        echo "                     

        ";
        // line 23
        $this->displayBlock('slider', $context, $blocks);
        // line 24
        echo "        <div class=\"container\">
            <div class=\"row\">
                
                    ";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        echo "  
                
                    ";
        // line 29
        $this->displayBlock('footer', $context, $blocks);
        echo "    
                               
            </div>
        </div>
         
        ";
        // line 34
        $this->displayBlock('javascripts', $context, $blocks);
        // line 42
        echo "         
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Homepage";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            ";
        // line 13
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bca6200_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bca6200_0") : $this->env->getExtension('assets')->getAssetUrl("css/bca6200_part_1.css");
            // line 14
            echo "                <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"/>
            ";
        } else {
            // asset "bca6200"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bca6200") : $this->env->getExtension('assets')->getAssetUrl("css/bca6200.css");
            echo "                <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"/>
            ";
        }
        unset($context["asset_url"]);
        // line 16
        echo "        ";
    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
    }

    // line 23
    public function block_slider($context, array $blocks = array())
    {
    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
    }

    // line 29
    public function block_footer($context, array $blocks = array())
    {
    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        // line 35
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b298a9a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b298a9a_0") : $this->env->getExtension('assets')->getAssetUrl("js/b298a9a_part_1.js");
            // line 39
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
            ";
            // asset "b298a9a_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b298a9a_1") : $this->env->getExtension('assets')->getAssetUrl("js/b298a9a_part_2.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
            ";
            // asset "b298a9a_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b298a9a_2") : $this->env->getExtension('assets')->getAssetUrl("js/b298a9a_custom_3.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
            ";
            // asset "b298a9a_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b298a9a_3") : $this->env->getExtension('assets')->getAssetUrl("js/b298a9a_router_4.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "b298a9a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b298a9a") : $this->env->getExtension('assets')->getAssetUrl("js/b298a9a.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 41
        echo "            <script src=\"";
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 41,  147 => 39,  142 => 35,  139 => 34,  134 => 29,  129 => 27,  124 => 23,  119 => 21,  115 => 16,  101 => 14,  97 => 13,  93 => 11,  90 => 10,  84 => 5,  77 => 42,  75 => 34,  67 => 29,  62 => 27,  57 => 24,  55 => 23,  50 => 21,  42 => 17,  40 => 10,  32 => 5,  26 => 1,);
    }
}
