<?php

/* ProjectLineOfWorkBundle:Components:content.html.twig */
class __TwigTemplate_6d04a064ebe9a1091d6f136eb4129cd77b480cb9534ff038ccd428f753f7c91e extends Twig_Template
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
        echo "<div class=\"clearfix visible-lg-block\"></div>
                
                <div class=\"col-lg-4\">
                    <div class=\"contact-block\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <div class=\"square\">
                                    ";
        // line 8
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4f057c4_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f057c4_0") : $this->env->getExtension('assets')->getAssetUrl("images/4f057c4_icon-contact-block_1.png");
            // line 9
            echo "                                        <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" alt=\"Example\" />
                                    ";
        } else {
            // asset "4f057c4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f057c4") : $this->env->getExtension('assets')->getAssetUrl("images/4f057c4.png");
            echo "                                        <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" alt=\"Example\" />
                                    ";
        }
        unset($context["asset_url"]);
        // line 11
        echo "                                </div>
                            </div>
                            <div class=\"col-lg-8 text-right\">
                                <h3>Contact</h3>
                                <p>11-111 City, ul.Random<br>
                                tel: +48 999 99 99 </p>
                                
                            </div>
                            <div class=\"clearfix visible-lg-block\"></div>
                            <div class=\"col-lg-4\">
                                <form action=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("project_line_of_work_contact");
        echo "\">
                                    <button type='submit' class=\"btn custom-button form-control\">Form</button>
                                </form>                             
                            </div>
                            <div class=\"col-lg-8\">
                                <input type=\"text\" class='form-control custom-form  text-right' value='lineofwork@gmail.com' readonly />
                            </div>
                        </div>                        
                    </div>
                    <div class=\"feedback\">
                        <div class=\"row\">
                            <div class=\"col-lg-10 text-right\">
                                <div class=\"feedback\">
                                    <h4>Our Feedback</h4>
                                </div>
                                ";
        // line 36
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ProjectLineOfWorkBundle:Feedback:selectOneFeedback"));
        echo "        
                            </div>
                            <div class=\"col-lg-2 feedback-icon\">
                                
                                    ";
        // line 40
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e2795d3_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e2795d3_0") : $this->env->getExtension('assets')->getAssetUrl("images/e2795d3_feedback-icon_1.png");
            // line 41
            echo "                                        <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" alt=\"Example\" />
                                    ";
        } else {
            // asset "e2795d3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e2795d3") : $this->env->getExtension('assets')->getAssetUrl("images/e2795d3.png");
            echo "                                        <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" alt=\"Example\" />
                                    ";
        }
        unset($context["asset_url"]);
        // line 43
        echo "                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 border-r-l\">
                    <div class=\"advertisement-block\">
                        <div class='commercial'>
                        ";
        // line 51
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ProjectLineOfWorkBundle:Page:commercial"));
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"newsletter-block\">
                        <div class=\"row\">
                            <div class=\"col-lg-8\">
                                <h3>Newsletter</h3>
                                <p>Would you like to recive everyday emails with latest jobs?</p>
                                
                            </div>
                            <div class=\"col-lg-4\">
                                <div class=\"square\">
                                    ";
        // line 65
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "87f6d18_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_87f6d18_0") : $this->env->getExtension('assets')->getAssetUrl("images/87f6d18_icon-newsletter-block_1.png");
            // line 66
            echo "                                        <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" alt=\"Example\" />
                                    ";
        } else {
            // asset "87f6d18"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_87f6d18") : $this->env->getExtension('assets')->getAssetUrl("images/87f6d18.png");
            echo "                                        <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" alt=\"Example\" />
                                    ";
        }
        unset($context["asset_url"]);
        // line 68
        echo "                                </div>                                       
                            </div>
                            <div class=\"clearfix visible-lg-block\"></div>
                            <div class=\"col-lg-8\">
                                <input type=\"text\" class='form-control custom-form' placeholder='Write your email.' />
                            </div>
                            <div class=\"col-lg-4\">
                                <button type='submit' class=\"btn custom-button form-control\">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"hint\">
                        <div class=\"row\">
                            <div class=\"col-lg-2 info-icon\">
                                
                                    ";
        // line 83
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "181dbef_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_181dbef_0") : $this->env->getExtension('assets')->getAssetUrl("images/181dbef_info-icon_1.png");
            // line 84
            echo "                                        <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" alt=\"Example\" />
                                    ";
        } else {
            // asset "181dbef"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_181dbef") : $this->env->getExtension('assets')->getAssetUrl("images/181dbef.png");
            echo "                                        <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" alt=\"Example\" />
                                    ";
        }
        unset($context["asset_url"]);
        // line 86
        echo "                               
                            </div>
                            <div class=\"col-lg-10\">
                                <div class=\"feedback\">
                                    <h4>Did you know?</h4>
                                </div>
                                ";
        // line 92
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ProjectLineOfWorkBundle:Page:oddity"));
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"clearfix visible-lg-block\"></div>
                <div class=\"border-bottom\"></div>
                
";
    }

    public function getTemplateName()
    {
        return "ProjectLineOfWorkBundle:Components:content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 92,  181 => 86,  167 => 84,  163 => 83,  146 => 68,  132 => 66,  128 => 65,  111 => 51,  101 => 43,  87 => 41,  83 => 40,  76 => 36,  58 => 21,  46 => 11,  32 => 9,  28 => 8,  19 => 1,);
    }
}
