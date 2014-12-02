<?php

/* ProjectLineOfWorkBundle::layout.html.twig */
class __TwigTemplate_abedf44288059cbdb36faeaa366dc5c3bfee2a15088a21b0773ed7cabf757e8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'alert' => array($this, 'block_alert'),
            'top_navigation_dropdown_menu' => array($this, 'block_top_navigation_dropdown_menu'),
            'phrase' => array($this, 'block_phrase'),
            'slider' => array($this, 'block_slider'),
            'body' => array($this, 'block_body'),
            'register' => array($this, 'block_register'),
            'main' => array($this, 'block_main'),
            'content' => array($this, 'block_content'),
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

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
    ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7f8d658_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7f8d658_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/7f8d658_part_1_custom_1.css");
            // line 9
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

    // line 13
    public function block_header($context, array $blocks = array())
    {
        // line 14
        echo "    <header id=\"mainHeader\">
            <div class=\"container\">
                <div class=\"row\">
        <nav id=\"myNavbar\" class=\"navbar navbar-primary\" role=\"navigation\">
            <div class=\"navbar-header\">
                <button type=\"button\" data-target=\"#navbarCollapse\" data-toggle=\"collapse\" class=\"navbar-toggle\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>         
            </div>
            <div class=\"col-lg-12 text-center top-line\">               
                    ";
        // line 27
        $this->displayBlock('alert', $context, $blocks);
        // line 47
        echo "            </div>
            <div class=\"clearfix visible-lg-block\"></div>
            <div id=\"top-menu\" class=\"col-lg-5 top-list\">
                <ul class=\"nav navbar-nav\">
                    <li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("project_line_of_work_homepage");
        echo "\">www.lineofwork.com</a></li>
                    ";
        // line 52
        $this->displayBlock('top_navigation_dropdown_menu', $context, $blocks);
        // line 53
        echo "                    <li class=\"";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "project_line_of_work_contact")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("project_line_of_work_contact");
        echo "\">Contact</a></li>
                    <li class=\"";
        // line 54
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "project_line_of_work_about")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("project_line_of_work_about");
        echo "\">About</a></li>
                </ul>
            </div>
            <div class=\"col-lg-5\">     
                <div class=\"login\">
                    ";
        // line 59
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Security:login"));
        echo "
                </div>      
            </div>
            <div id=\"lng\" class=\"col-lg-2 top-list\">
                <ul class=\"nav navbar-nav pull-right\">
                        <li class='";
        // line 64
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_locale"), "method") == "pl")) {
            echo " active ";
        }
        echo "'>
                            <a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_line_of_work_language", array("language" => "pl", "route" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"))), "html", null, true);
        echo "\">PL</a>
                        </li>
                        <li class=\"";
        // line 67
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_locale"), "method") == "en")) {
            echo " active ";
        }
        echo "\">
                            <a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_line_of_work_language", array("language" => "en", "route" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"))), "html", null, true);
        echo "\">ENG</a>
                        </li>
                                    
                </ul>
            </div>
            
            <div class=\"col-lg-8\">
                <div class=\"row\">
                    <div class=\"col-lg-12 logo\">
                        <a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("project_line_of_work_homepage");
        echo "\">
                        ";
        // line 78
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e1ed931_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1ed931_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/e1ed931_logo-lineofwork_1.png");
            // line 79
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"Example\" width='388' />
                        ";
        } else {
            // asset "e1ed931"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1ed931") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/e1ed931.png");
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"Example\" width='388' />
                        ";
        }
        unset($context["asset_url"]);
        // line 80
        echo " 
                        </a>
                    </div>
                    <div class=\"clearfix visible-lg-block\"></div>
                    ";
        // line 84
        $this->displayBlock('phrase', $context, $blocks);
        // line 87
        echo "                </div>
            </div>
            <div id=\"search\" class=\"col-lg-3 col-lg-offset-1\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <ul class=\"nav navbar-nav\">                                
                            <li class=\"active\"><a href=\"#\">JOBS</a></li>
                            ";
        // line 95
        echo "                        </ul>                                                        
                    </div>                     
                    <div class=\"clearfix visible-lg-block\"></div>
                    <div class=\"col-lg-12\">                      
                        ";
        // line 99
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ProjectLineOfWorkBundle:Page:search"));
        echo "                       
                    </div>
                </div>                 
            </div>                                               
            <div class=\"clearfix visible-lg-block\"></div>  
            <div id='menu' class=\"col-lg-12 medium-list\">
                <div class=\"row\">
                        <div class=\"col-lg-9\">
                <ul class=\"nav navbar-nav\">
                    
                    <li class='";
        // line 109
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "project_line_of_work_homepage")) {
            echo "active";
        }
        echo "'>
                        <a href='";
        // line 110
        echo $this->env->getExtension('routing')->getPath("project_line_of_work_homepage");
        echo "'>Home</a>
                    </li>
                    ";
        // line 113
        echo "                    <li class='";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "project_line_of_work_job")) {
            echo "active";
        }
        echo "'>
                        <a href='";
        // line 114
        echo $this->env->getExtension('routing')->getPath("project_line_of_work_job");
        echo "'>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Jobs", array(), "messages");
        echo "</a>
                    </li>
                    ";
        // line 117
        echo "                    <li class=\"dropdown\"><a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Categories", array(), "messages");
        // line 118
        echo "                        <b class=\"caret\"></b></a>
                            ";
        // line 119
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ProjectLineOfWorkBundle:Category:list"));
        echo "
                    </li>
                    <li><a href=\"#search\">";
        // line 121
        echo $this->env->getExtension('translator')->getTranslator()->trans("Search", array(), "messages");
        echo "</a></li>
                    ";
        // line 122
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 123
            echo "                        <li class='";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "project_line_of_work_user_profile")) {
                echo "active";
            }
            echo "'>
                            <a href=\"";
            // line 124
            echo $this->env->getExtension('routing')->getPath("project_line_of_work_user_profile");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Profile", array(), "messages");
            echo "</a>
                        </li>
                    ";
        } else {
            // line 127
            echo "                        <li class='";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "fos_user_registration_register")) {
                echo "active";
            }
            echo "'>
                            <a href=\"";
            // line 128
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Sign in", array(), "messages");
            echo "</a>
                        </li>
                    ";
        }
        // line 131
        echo "                </ul>                            
                        </div>
                <div class=\"col-lg-2 col-lg-offset-1\">
                    <form action=\"";
        // line 134
        echo $this->env->getExtension('routing')->getPath("project_line_of_work_job_new");
        echo "\">
                        <button type='submit' class='btn job-button'>Post a Job</button>
                    </form>
                    ";
        // line 140
        echo "                </div>
                    </div>

                
            </div>
            <div class=\"col-lg-12 medium-list-backdrop\"></div>
            <div class=\"clearfix visible-lg-block\"></div>                                                                                                                                                                                                  
        </nav>
             </div>
            </div>
        </header>
";
    }

    // line 27
    public function block_alert($context, array $blocks = array())
    {
        // line 28
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 29
            echo "                            <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                                <p><strong>Success!</strong>";
            // line 31
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</p>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 35
            echo "                            <div class=\"alert alert-info alert-dismissible\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                                <p><strong>Info!</strong>";
            // line 37
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</p>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "danger"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 41
            echo "                            <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                                <p><strong>Danger!</strong>";
            // line 43
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</p>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                    ";
    }

    // line 52
    public function block_top_navigation_dropdown_menu($context, array $blocks = array())
    {
    }

    // line 84
    public function block_phrase($context, array $blocks = array())
    {
        // line 85
        echo "                        ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ProjectLineOfWorkBundle:Phrase:show"));
        echo "                   
                    ";
    }

    // line 153
    public function block_slider($context, array $blocks = array())
    {
    }

    // line 155
    public function block_body($context, array $blocks = array())
    {
        // line 156
        echo "    <div class=\"col-lg-12 body\">
        <div class=\"row\">
            ";
        // line 158
        $this->displayBlock('register', $context, $blocks);
        // line 160
        echo "            ";
        $this->displayBlock('main', $context, $blocks);
        // line 162
        echo "      
            
        </div>
    </div>
    ";
        // line 166
        $this->displayBlock('content', $context, $blocks);
    }

    // line 158
    public function block_register($context, array $blocks = array())
    {
        // line 159
        echo "            ";
    }

    // line 160
    public function block_main($context, array $blocks = array())
    {
        // line 161
        echo "            ";
    }

    // line 166
    public function block_content($context, array $blocks = array())
    {
    }

    // line 169
    public function block_footer($context, array $blocks = array())
    {
        // line 170
        echo "    <footer>                               
                <div class=\"col-lg-12\">
                    
                    <div class=\"row bottom-first-footer\">
                        <div class=\"col-lg-4 text-center\">
                            <a href=\"tel:18475555555\">1-847-555-5555</a>
                        </div>
                        <div class=\"col-lg-4 text-center\">
                            <ul class='list-inline'>
                                <li class='";
        // line 179
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "project_line_of_work_homepage")) {
            echo "active";
        }
        echo "'>
                                    <a href='";
        // line 180
        echo $this->env->getExtension('routing')->getPath("project_line_of_work_homepage");
        echo "'>Home</a>
                                </li>
                                ";
        // line 183
        echo "                                <li class='";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "project_line_of_work_job")) {
            echo "active";
        }
        echo "'>
                                    <a href='";
        // line 184
        echo $this->env->getExtension('routing')->getPath("project_line_of_work_job");
        echo "'>Jobs</a>
                                </li>
                                ";
        // line 187
        echo "                                <li><a href=\"#search\">Search</a></li>
                                ";
        // line 188
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 189
            echo "                                    <li class='";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "project_line_of_work_user_profile")) {
                echo "active";
            }
            echo "'>
                                        <a href=\"";
            // line 190
            echo $this->env->getExtension('routing')->getPath("project_line_of_work_user_profile");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Profile", array(), "messages");
            echo "</a>
                                    </li>
                                ";
        } else {
            // line 193
            echo "                                    <li class='";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "fos_user_registration_register")) {
                echo "active";
            }
            echo "'>
                                        <a href=\"";
            // line 194
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Sign in</a>
                                    </li>
                                ";
        }
        // line 197
        echo "                            </ul>
                        </div>
                        <div class=\"col-lg-4 text-center\">
                            <a href=\"#mainHeader\">return to top</a>
                        </div>
                    </div>
                </div>
                <div class=\"clearfix visible-lg-block\"></div>               
                <div class=\"col-lg-3 col-lg-offset-1\">
                    <div class=\"border-bottom\"></div>
                    <div class=\"row copyright\">
                        <div class=\"col-lg-7 text-right copyright-text\">
                            <p class='p-cop'>&copy; 2014 LineOfWork</p>
                            <p class='p-res'>All rights reserved</p>
                        </div>
                        <div class=\"col-lg-5\">
                            <div class=\"logo-firm\">
                                ";
        // line 214
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1ff58af_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1ff58af_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/1ff58af_logo-small-lineofwork_1.png");
            // line 215
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"Example\" />
                                ";
        } else {
            // asset "1ff58af"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1ff58af") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/1ff58af.png");
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"Example\" />
                                ";
        }
        unset($context["asset_url"]);
        // line 217
        echo "                            </div>
                        </div>
                    </div>                   
                </div>
                <div class=\"col-lg-3 col-lg-offset-4\">
                    <div class=\"border-bottom\"></div>
                    <div class=\"row copyright-by\">
                        <div class=\"col-lg-5\">
                            <div class=\"logo-sakyhank\">
                                
                            </div>
                        </div>
                        <div class=\"col-lg-7 copyright-by-text\">
                            <p>design by <a>SakyHank</a></p>
                            <p>developed by <a>SakyHank</a></p>
                        </div>
                    </div>
                    
                </div>
            </footer>
";
    }

    public function getTemplateName()
    {
        return "ProjectLineOfWorkBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  555 => 217,  541 => 215,  537 => 214,  518 => 197,  512 => 194,  505 => 193,  497 => 190,  490 => 189,  488 => 188,  485 => 187,  480 => 184,  473 => 183,  468 => 180,  462 => 179,  451 => 170,  448 => 169,  443 => 166,  439 => 161,  436 => 160,  432 => 159,  429 => 158,  425 => 166,  419 => 162,  416 => 160,  414 => 158,  410 => 156,  407 => 155,  402 => 153,  395 => 85,  392 => 84,  387 => 52,  383 => 46,  374 => 43,  370 => 41,  365 => 40,  356 => 37,  352 => 35,  347 => 34,  338 => 31,  334 => 29,  329 => 28,  326 => 27,  311 => 140,  305 => 134,  300 => 131,  292 => 128,  285 => 127,  277 => 124,  270 => 123,  268 => 122,  264 => 121,  259 => 119,  256 => 118,  253 => 117,  246 => 114,  239 => 113,  234 => 110,  228 => 109,  215 => 99,  209 => 95,  200 => 87,  198 => 84,  192 => 80,  178 => 79,  174 => 78,  170 => 77,  158 => 68,  152 => 67,  147 => 65,  141 => 64,  133 => 59,  121 => 54,  112 => 53,  110 => 52,  106 => 51,  100 => 47,  98 => 27,  83 => 14,  80 => 13,  52 => 9,  48 => 6,  41 => 3,  38 => 2,);
    }
}
