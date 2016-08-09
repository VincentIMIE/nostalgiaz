<?php

/* base.html.twig */
class __TwigTemplate_b0245620a26f86f80fb6d733f50f3754e02642e82b3a0f2ad16b3acd6a40f24f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f867456f091fa2c18ccd3fa2802c89cc7d18e19e4f19d13218cbd205382b521 = $this->env->getExtension("native_profiler");
        $__internal_1f867456f091fa2c18ccd3fa2802c89cc7d18e19e4f19d13218cbd205382b521->enter($__internal_1f867456f091fa2c18ccd3fa2802c89cc7d18e19e4f19d13218cbd205382b521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_1f867456f091fa2c18ccd3fa2802c89cc7d18e19e4f19d13218cbd205382b521->leave($__internal_1f867456f091fa2c18ccd3fa2802c89cc7d18e19e4f19d13218cbd205382b521_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d9d46f13ccd0509d93266432fd1f97fae48e59445198f664973764b7213f4da = $this->env->getExtension("native_profiler");
        $__internal_1d9d46f13ccd0509d93266432fd1f97fae48e59445198f664973764b7213f4da->enter($__internal_1d9d46f13ccd0509d93266432fd1f97fae48e59445198f664973764b7213f4da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1d9d46f13ccd0509d93266432fd1f97fae48e59445198f664973764b7213f4da->leave($__internal_1d9d46f13ccd0509d93266432fd1f97fae48e59445198f664973764b7213f4da_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e5e39581f9776e08a695493630f7b844fa69cc9d1cda951bf2ef539967def06a = $this->env->getExtension("native_profiler");
        $__internal_e5e39581f9776e08a695493630f7b844fa69cc9d1cda951bf2ef539967def06a->enter($__internal_e5e39581f9776e08a695493630f7b844fa69cc9d1cda951bf2ef539967def06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e5e39581f9776e08a695493630f7b844fa69cc9d1cda951bf2ef539967def06a->leave($__internal_e5e39581f9776e08a695493630f7b844fa69cc9d1cda951bf2ef539967def06a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7dd3190b501fb4b2c953921f458a1732494440e6fdac2ed0ca4878942731b8d9 = $this->env->getExtension("native_profiler");
        $__internal_7dd3190b501fb4b2c953921f458a1732494440e6fdac2ed0ca4878942731b8d9->enter($__internal_7dd3190b501fb4b2c953921f458a1732494440e6fdac2ed0ca4878942731b8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7dd3190b501fb4b2c953921f458a1732494440e6fdac2ed0ca4878942731b8d9->leave($__internal_7dd3190b501fb4b2c953921f458a1732494440e6fdac2ed0ca4878942731b8d9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_77a394b3f1d70b3fb2a9fc6685ae99bbc67771239998aafca5caddd58e4dc0a4 = $this->env->getExtension("native_profiler");
        $__internal_77a394b3f1d70b3fb2a9fc6685ae99bbc67771239998aafca5caddd58e4dc0a4->enter($__internal_77a394b3f1d70b3fb2a9fc6685ae99bbc67771239998aafca5caddd58e4dc0a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_77a394b3f1d70b3fb2a9fc6685ae99bbc67771239998aafca5caddd58e4dc0a4->leave($__internal_77a394b3f1d70b3fb2a9fc6685ae99bbc67771239998aafca5caddd58e4dc0a4_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
