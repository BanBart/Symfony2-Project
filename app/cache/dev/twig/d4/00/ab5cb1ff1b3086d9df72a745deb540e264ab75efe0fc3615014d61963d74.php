<?php

/* ProjectLineOfWorkBundle:Form:fields.html.twig */
class __TwigTemplate_d400ab5cb1ff1b3086d9df72a745deb540e264ab75efe0fc3615014d61963d74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'button_widget' => array($this, 'block_button_widget'),
            'form_start' => array($this, 'block_form_start'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'form_errors' => array($this, 'block_form_errors'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('button_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('form_start', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('form_row', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('form_label', $context, $blocks);
        // line 50
        echo "
";
        // line 51
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 54
        echo "
";
        // line 55
        $this->displayBlock('form_errors', $context, $blocks);
        // line 68
        echo "
";
        // line 69
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
    }

    // line 1
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 2
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 3
        echo "<input class='form-control custom-form' type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ((!twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";
    }

    // line 6
    public function block_button_widget($context, array $blocks = array())
    {
        // line 7
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 8
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
        }
        // line 10
        echo "<button class='btn custom-button pull-right' type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "</button>";
    }

    // line 13
    public function block_form_start($context, array $blocks = array())
    {
        // line 14
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
        // line 15
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 16
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method"));
        } else {
            // line 18
            $context["form_method"] = "POST";
        }
        // line 20
        echo "<form name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "name", array()), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method"))), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
        echo "\"";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 21
        if (((isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method")) != (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) {
            // line 22
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "html", null, true);
            echo "\" />";
        }
    }

    // line 26
    public function block_form_row($context, array $blocks = array())
    {
        // line 27
        echo "<div class=\"form-grup\">";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 33
        echo "</div>";
    }

    // line 36
    public function block_form_label($context, array $blocks = array())
    {
        // line 37
        if ((!((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false))) {
            // line 38
            if ((!(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")))) {
                // line 39
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            }
            // line 41
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 42
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 44
            echo "        ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 45
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
            // line 47
            echo "<label ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "</label>";
        }
    }

    // line 51
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 52
        echo "<textarea class='form-control custom-form' ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
    }

    // line 55
    public function block_form_errors($context, array $blocks = array())
    {
        // line 56
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 57
            echo "    <span class=\"help-inline\">
        ";
            // line 58
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 59
                echo "            ";
                echo twig_escape_filter($this->env, (((null === $this->getAttribute($context["error"], "messagePluralization", array()))) ? ($this->env->getExtension('translator')->trans($this->getAttribute($context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "validators")) : ($this->env->getExtension('translator')->transchoice($this->getAttribute($context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messagePluralization", array()), $this->getAttribute($context["error"], "messageParameters", array()), "validators"))), "html", null, true);
                // line 63
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "    </span>
    ";
        }
    }

    // line 69
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 70
        ob_start();
        echo "     
                <input type=\"checkbox\" ";
        // line 71
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 75
    public function block_radio_widget($context, array $blocks = array())
    {
        // line 76
        ob_start();
        echo "  
            <input type=\"radio\" ";
        // line 77
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 81
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 82
        if (((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")))) && (!(isset($context["empty_value_in_choices"]) ? $context["empty_value_in_choices"] : $this->getContext($context, "empty_value_in_choices")))) && (!(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))))) {
            // line 83
            $context["required"] = false;
        }
        // line 85
        echo "<select class='form-control custom-form' ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">
        ";
        // line 86
        if ((!(null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value"))))) {
            // line 87
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "</option>";
        }
        // line 89
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 90
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 91
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 92
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) && (!(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")))))) {
                // line 93
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 96
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 97
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 98
        echo "</select>";
    }

    public function getTemplateName()
    {
        return "ProjectLineOfWorkBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  347 => 98,  345 => 97,  343 => 96,  337 => 93,  335 => 92,  333 => 91,  331 => 90,  329 => 89,  320 => 87,  318 => 86,  310 => 85,  307 => 83,  305 => 82,  302 => 81,  287 => 77,  283 => 76,  280 => 75,  265 => 71,  261 => 70,  258 => 69,  252 => 65,  245 => 63,  242 => 59,  238 => 58,  235 => 57,  232 => 56,  229 => 55,  221 => 52,  218 => 51,  198 => 47,  195 => 45,  192 => 44,  189 => 42,  186 => 41,  183 => 39,  181 => 38,  179 => 37,  176 => 36,  172 => 33,  170 => 31,  168 => 30,  166 => 28,  164 => 27,  161 => 26,  154 => 22,  152 => 21,  128 => 20,  125 => 18,  122 => 16,  120 => 15,  118 => 14,  115 => 13,  105 => 10,  102 => 8,  100 => 7,  97 => 6,  83 => 3,  81 => 2,  78 => 1,  74 => 81,  71 => 80,  69 => 75,  66 => 74,  64 => 69,  61 => 68,  59 => 55,  56 => 54,  54 => 51,  51 => 50,  49 => 36,  46 => 35,  44 => 26,  41 => 25,  39 => 13,  36 => 12,  34 => 6,  31 => 5,  29 => 1,);
    }
}
