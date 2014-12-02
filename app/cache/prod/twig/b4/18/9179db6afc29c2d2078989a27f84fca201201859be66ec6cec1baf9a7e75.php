<?php

/* ProjectLineOfWorkBundle:Phrase:show.html.twig */
class __TwigTemplate_b4189179db6afc29c2d2078989a27f84fca201201859be66ec6cec1baf9a7e75 extends Twig_Template
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
        echo "<div class=\"col-lg-12 phrase\">
    <div class=\"row\">                             
        <div class=\"col-lg-2 col-lg-offset-1\">
            <div class=\"number\">
                ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["phrases"]) ? $context["phrases"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["phrase"]) {
            // line 6
            echo "                    <h1 class='";
            echo (($this->getAttribute($context["loop"], "first", array())) ? ("phrase-active-number") : ("phrase-normal-number"));
            echo "'> 
                        ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["phrase"], "mainheader", array()), "html", null, true);
            echo "
                    </h1>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phrase'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "            </div>
        </div>
        <div class=\"col-lg-9 catchy\">
            ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["phrases"]) ? $context["phrases"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["phrase"]) {
            // line 14
            echo "            <div class='";
            echo (($this->getAttribute($context["loop"], "first", array())) ? ("phrase-active-slogan") : ("phrase-normal-slogan"));
            echo "'> 
                <h3>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["phrase"], "mediumheader", array()), "html", null, true);
            echo "</h3>
                <p>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["phrase"], "mediumparagraph", array()), "html", null, true);
            echo "</p>
            </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phrase'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </div>
        <div class=\"clearfix visible-lg-block\"></div>
        <div class=\"col-lg-10 col-lg-offset-1\">
            <div class=\"border-bottom\"></div>
        </div>
        <div class=\"col-lg-9 col-lg-offset-3 bottom-phrase\">
            ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["phrases"]) ? $context["phrases"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["phrase"]) {
            // line 26
            echo "                <p class='";
            echo (($this->getAttribute($context["loop"], "first", array())) ? ("phrase-active-bottom") : ("phrase-normal-bottom"));
            echo "'> 
                    ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["phrase"], "bottomparagraph", array()), "html", null, true);
            echo "
                </p>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phrase'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ProjectLineOfWorkBundle:Phrase:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 30,  142 => 27,  137 => 26,  120 => 25,  112 => 19,  95 => 16,  91 => 15,  86 => 14,  69 => 13,  64 => 10,  47 => 7,  42 => 6,  25 => 5,  19 => 1,);
    }
}
