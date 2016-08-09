<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ccaef15371039a1143010d39e5ee5f2e9b2ac8d5eb329a7d328e36b161c3c18c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_95572bfc8901d43ee1dfe4f2aeaf4f010e15d239c5268508625ff04529bb9107 = $this->env->getExtension("native_profiler");
        $__internal_95572bfc8901d43ee1dfe4f2aeaf4f010e15d239c5268508625ff04529bb9107->enter($__internal_95572bfc8901d43ee1dfe4f2aeaf4f010e15d239c5268508625ff04529bb9107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95572bfc8901d43ee1dfe4f2aeaf4f010e15d239c5268508625ff04529bb9107->leave($__internal_95572bfc8901d43ee1dfe4f2aeaf4f010e15d239c5268508625ff04529bb9107_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1d682968ca784bf0ef6de89d8c37f56752862fbdb4426d7e1405ded1dfee9f74 = $this->env->getExtension("native_profiler");
        $__internal_1d682968ca784bf0ef6de89d8c37f56752862fbdb4426d7e1405ded1dfee9f74->enter($__internal_1d682968ca784bf0ef6de89d8c37f56752862fbdb4426d7e1405ded1dfee9f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1d682968ca784bf0ef6de89d8c37f56752862fbdb4426d7e1405ded1dfee9f74->leave($__internal_1d682968ca784bf0ef6de89d8c37f56752862fbdb4426d7e1405ded1dfee9f74_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2ec13a9528a68b4aeb1a652278940f6586ddc94a89e4976e7b8dc1376962dc03 = $this->env->getExtension("native_profiler");
        $__internal_2ec13a9528a68b4aeb1a652278940f6586ddc94a89e4976e7b8dc1376962dc03->enter($__internal_2ec13a9528a68b4aeb1a652278940f6586ddc94a89e4976e7b8dc1376962dc03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2ec13a9528a68b4aeb1a652278940f6586ddc94a89e4976e7b8dc1376962dc03->leave($__internal_2ec13a9528a68b4aeb1a652278940f6586ddc94a89e4976e7b8dc1376962dc03_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b0bfb02732109d80cf971f40c59c73c9d6e4fc86c40c2f79c873786549b593a3 = $this->env->getExtension("native_profiler");
        $__internal_b0bfb02732109d80cf971f40c59c73c9d6e4fc86c40c2f79c873786549b593a3->enter($__internal_b0bfb02732109d80cf971f40c59c73c9d6e4fc86c40c2f79c873786549b593a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b0bfb02732109d80cf971f40c59c73c9d6e4fc86c40c2f79c873786549b593a3->leave($__internal_b0bfb02732109d80cf971f40c59c73c9d6e4fc86c40c2f79c873786549b593a3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
