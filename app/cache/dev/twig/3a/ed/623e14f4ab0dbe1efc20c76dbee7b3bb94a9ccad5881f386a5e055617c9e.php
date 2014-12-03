<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_3aed623e14f4ab0dbe1efc20c76dbee7b3bb94a9ccad5881f386a5e055617c9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'register' => array($this, 'block_register'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate(((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "fos_user_security_login")) ? ("ProjectLineOfWorkBundle::layout_login.html.twig") : ("ProjectLineOfWorkBundle::layout_null.html.twig")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_register($context, array $blocks = array())
    {
        // line 4
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            echo " 
    <div>
        <p class=\"navbar-text custom-navbar-text\">Logged in as:<a href=\"";
            // line 6
            echo $this->env->getExtension('routing')->getPath("project_line_of_work_user_profile");
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a></p>
        <form action=\"";
            // line 7
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
            <button type=\"submit\" class=\"btn custom-button btn-sm\">Logout</button>
        </form>
    </div> 
";
        } else {
            // line 12
            echo "            ";
            $this->displayBlock('fos_user_content', $context, $blocks);
            // line 24
            echo "  
     
";
        }
    }

    // line 12
    public function block_fos_user_content($context, array $blocks = array())
    {
        echo "           
            <div class=\"clearfix visible-lg-block\"></div>
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div id=\"failedLogin\" class=\"hidden\">
                        <p class='text-danger'>Incorrect login or password!</p>
                        <p><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Forgot a password?    </a>
                             <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Register</a></p>
                    </div>
                </div>
                
            </div>
          ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 19,  69 => 18,  59 => 12,  52 => 24,  49 => 12,  41 => 7,  35 => 6,  30 => 4,  27 => 3,);
    }
}
