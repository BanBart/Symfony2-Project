<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_3cb55efc1f0c2e8195672d3ec9aa573c72acc4a1a9b96ef9d00ef798127c2d57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "        <form id='loginForm' action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class='form-inline'>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
            
            <label for=\"username\" class='sr-only'>Username/Email:</label>
            <input type=\"text\" id=\"username\" name=\"_username\" class='form-control custom-form input-sm' placeholder='Username/Email' />
            
            <label for=\"password\" class='sr-only'>Password:</label>
            <input type=\"password\" id=\"password\" name=\"_password\" class='form-control custom-form input-sm' placeholder='Password' />
            ";
        // line 13
        echo "            
            <button type='submit' id=\"_submit\" name=\"_submit\" class='btn btn-sm custom-button has-spinner'>
                <span class=\"spinner\"><i class=\"glyphicon gly glyphicon-refresh\"></i></span>
                Login</button>                                            
        </form>         
        ";
        // line 18
        $this->displayParentBlock("fos_user_content", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 18,  46 => 13,  36 => 5,  31 => 4,  28 => 3,);
    }
}
