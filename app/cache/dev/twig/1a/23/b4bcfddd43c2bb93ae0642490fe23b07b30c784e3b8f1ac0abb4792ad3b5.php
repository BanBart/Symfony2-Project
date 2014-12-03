<?php

/* ProjectLineOfWorkBundle:Components:slider.html.twig */
class __TwigTemplate_1a23b4bcfddd43c2bb93ae0642490fe23b07b30c784e3b8f1ac0abb4792ad3b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"slider\">
    <div class=\"container\">
        <div class=\"row\">           
            <div class=\"col-lg-12\">
                <ul class='nav navbar-nav'>
                    ";
        // line 7
        echo "                    <li class='active'><a href=\"#\">Latest job offers</a></li>                              
                </ul>
            </div>

            <div class=\"clearfix visible-lg-block\"></div>
            <div class=\"border-bottom \"></div>
            <div class=\"col-lg-12 slider-carousel\">
                <div class=\"row\">
                            ";
        // line 15
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ProjectLineOfWorkBundle:Job:latestJobs"));
        echo "
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ProjectLineOfWorkBundle:Components:slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 15,  26 => 7,  19 => 1,);
    }
}
