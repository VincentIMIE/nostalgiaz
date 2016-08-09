<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_7f06af470f2e403dd5925c29529d59b8695314fb7850d96c2aa60ea2a6c4cc95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0bc579d540cdd2f86c308039cdf402a4f0b5421462109c290cd570cbd35f9bc8 = $this->env->getExtension("native_profiler");
        $__internal_0bc579d540cdd2f86c308039cdf402a4f0b5421462109c290cd570cbd35f9bc8->enter($__internal_0bc579d540cdd2f86c308039cdf402a4f0b5421462109c290cd570cbd35f9bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bc579d540cdd2f86c308039cdf402a4f0b5421462109c290cd570cbd35f9bc8->leave($__internal_0bc579d540cdd2f86c308039cdf402a4f0b5421462109c290cd570cbd35f9bc8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_51e271d6cb79c83fa20151788f2a0d5199f7697bf71a4675d90f0eb01d75a7ef = $this->env->getExtension("native_profiler");
        $__internal_51e271d6cb79c83fa20151788f2a0d5199f7697bf71a4675d90f0eb01d75a7ef->enter($__internal_51e271d6cb79c83fa20151788f2a0d5199f7697bf71a4675d90f0eb01d75a7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_51e271d6cb79c83fa20151788f2a0d5199f7697bf71a4675d90f0eb01d75a7ef->leave($__internal_51e271d6cb79c83fa20151788f2a0d5199f7697bf71a4675d90f0eb01d75a7ef_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ba0b704521b80d3dbad42139bfc5e6558a6bf67ea0b1b1f1a18dd7eb5b7f4d0e = $this->env->getExtension("native_profiler");
        $__internal_ba0b704521b80d3dbad42139bfc5e6558a6bf67ea0b1b1f1a18dd7eb5b7f4d0e->enter($__internal_ba0b704521b80d3dbad42139bfc5e6558a6bf67ea0b1b1f1a18dd7eb5b7f4d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ba0b704521b80d3dbad42139bfc5e6558a6bf67ea0b1b1f1a18dd7eb5b7f4d0e->leave($__internal_ba0b704521b80d3dbad42139bfc5e6558a6bf67ea0b1b1f1a18dd7eb5b7f4d0e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bebff7bde15b32516fc741eef77d44bcf0b5b4f57e5d4b91fda955fafaeafa35 = $this->env->getExtension("native_profiler");
        $__internal_bebff7bde15b32516fc741eef77d44bcf0b5b4f57e5d4b91fda955fafaeafa35->enter($__internal_bebff7bde15b32516fc741eef77d44bcf0b5b4f57e5d4b91fda955fafaeafa35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_bebff7bde15b32516fc741eef77d44bcf0b5b4f57e5d4b91fda955fafaeafa35->leave($__internal_bebff7bde15b32516fc741eef77d44bcf0b5b4f57e5d4b91fda955fafaeafa35_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
