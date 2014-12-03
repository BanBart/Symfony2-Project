<?php

/* ProjectLineOfWorkBundle:Job:show.html.twig */
class __TwigTemplate_33afbf53e120f8fc54e9b795ae96cd3bd84f7ca511b4e73895100076fb387387 extends Twig_Template
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

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"col-lg-8 col-lg-offset-2 body-header\">
            <h2>Job</h2>
    </div>
    <div class=\"col-lg-8 col-lg-offset-2\">
        <div class=\"row\">          
            <div class=\"col-lg-12\">
                <table class=\"table\">
                    <tbody>
                        <tr>
                            <th>Type</th>
                            <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Company</th>
                            <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "company", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Logo</th>
                            <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "logo", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Url</th>
                            <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "url", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Position</th>
                            <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Location</th>
                            <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "location", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>How_to_apply</th>
                            <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "howtoapply", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Created_at</th>
                            <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdat", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class=\"col-lg-2\">
                <form action=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
        echo "\">
                    <button type='submit' class='btn custom-button'>Back</button>
                </form>
            </div>
            <div class=\"col-lg-2 col-lg-2 col-lg-offset-8\">
                <form action=\"#\">
                    <button type='submit' class='btn custom-button pull-right'>Apply</button>
                </form>
            </div>
            
        </div>
        
    </div>  
";
    }

    public function getTemplateName()
    {
        return "ProjectLineOfWorkBundle:Job:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 56,  106 => 50,  99 => 46,  92 => 42,  85 => 38,  78 => 34,  71 => 30,  64 => 26,  57 => 22,  50 => 18,  43 => 14,  31 => 4,  28 => 3,);
    }
}
