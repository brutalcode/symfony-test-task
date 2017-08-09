<?php

/* elevator/elevator-result.html.twig */
class __TwigTemplate_cab1af711f0af4591ddcd384c4e2ab7feb3fd54330c69c07e0aa1883a1f78af0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "elevator/elevator-result.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78014b53237eb2adbbe2c1938be505da308c657e233c0cf5652490b6306e98d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78014b53237eb2adbbe2c1938be505da308c657e233c0cf5652490b6306e98d1->enter($__internal_78014b53237eb2adbbe2c1938be505da308c657e233c0cf5652490b6306e98d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "elevator/elevator-result.html.twig"));

        $__internal_91d4f959e541f9b8bc645e98344f3befd877522b72fe69d1ed4358ffb89eba24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91d4f959e541f9b8bc645e98344f3befd877522b72fe69d1ed4358ffb89eba24->enter($__internal_91d4f959e541f9b8bc645e98344f3befd877522b72fe69d1ed4358ffb89eba24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "elevator/elevator-result.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78014b53237eb2adbbe2c1938be505da308c657e233c0cf5652490b6306e98d1->leave($__internal_78014b53237eb2adbbe2c1938be505da308c657e233c0cf5652490b6306e98d1_prof);

        
        $__internal_91d4f959e541f9b8bc645e98344f3befd877522b72fe69d1ed4358ffb89eba24->leave($__internal_91d4f959e541f9b8bc645e98344f3befd877522b72fe69d1ed4358ffb89eba24_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_dca4cdc95f14607e720400901538dc05bd4aaabe0af576db40d6f731ad086e57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dca4cdc95f14607e720400901538dc05bd4aaabe0af576db40d6f731ad086e57->enter($__internal_dca4cdc95f14607e720400901538dc05bd4aaabe0af576db40d6f731ad086e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_20971042e439f73a75058898554491557c96744552c8457fbff3208522b51571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20971042e439f73a75058898554491557c96744552c8457fbff3208522b51571->enter($__internal_20971042e439f73a75058898554491557c96744552c8457fbff3208522b51571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>";
        echo twig_escape_filter($this->env, (isset($context["best_elevator_key"]) ? $context["best_elevator_key"] : $this->getContext($context, "best_elevator_key")), "html", null, true);
        echo "</h1>
";
        
        $__internal_20971042e439f73a75058898554491557c96744552c8457fbff3208522b51571->leave($__internal_20971042e439f73a75058898554491557c96744552c8457fbff3208522b51571_prof);

        
        $__internal_dca4cdc95f14607e720400901538dc05bd4aaabe0af576db40d6f731ad086e57->leave($__internal_dca4cdc95f14607e720400901538dc05bd4aaabe0af576db40d6f731ad086e57_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f059229816f3053682e33ed4dba6a3901ea657a42a50c787efded674ac11c610 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f059229816f3053682e33ed4dba6a3901ea657a42a50c787efded674ac11c610->enter($__internal_f059229816f3053682e33ed4dba6a3901ea657a42a50c787efded674ac11c610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8fb97091816655813f62a531f274937edbf84008d3ce1c65f684b7574dcd653c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fb97091816655813f62a531f274937edbf84008d3ce1c65f684b7574dcd653c->enter($__internal_8fb97091816655813f62a531f274937edbf84008d3ce1c65f684b7574dcd653c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    <style>
        body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
        h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
        h1 { font-size: 36px; }
        h2 { font-size: 21px; margin-bottom: 1em; }
        p { margin: 0 0 1em 0; }
        a { color: #0000F0; }
        a:hover { text-decoration: none; }
        code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
        #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
        #container { padding: 2em; }
        #welcome, #status { margin-bottom: 2em; }
        #welcome h1 span { display: block; font-size: 75%; }
        #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
        #icon-book { display: none; }

        @media (min-width: 768px) {
            #wrapper { width: 80%; margin: 2em auto; }
            #icon-book { display: inline-block; }
            #status a, #next a { display: block; }

            @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
            @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
            .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
        }
    </style>
";
        
        $__internal_8fb97091816655813f62a531f274937edbf84008d3ce1c65f684b7574dcd653c->leave($__internal_8fb97091816655813f62a531f274937edbf84008d3ce1c65f684b7574dcd653c_prof);

        
        $__internal_f059229816f3053682e33ed4dba6a3901ea657a42a50c787efded674ac11c610->leave($__internal_f059229816f3053682e33ed4dba6a3901ea657a42a50c787efded674ac11c610_prof);

    }

    public function getTemplateName()
    {
        return "elevator/elevator-result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <h1>{{ best_elevator_key }}</h1>
{% endblock %}
{% block stylesheets %}
    <style>
        body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
        h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
        h1 { font-size: 36px; }
        h2 { font-size: 21px; margin-bottom: 1em; }
        p { margin: 0 0 1em 0; }
        a { color: #0000F0; }
        a:hover { text-decoration: none; }
        code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
        #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
        #container { padding: 2em; }
        #welcome, #status { margin-bottom: 2em; }
        #welcome h1 span { display: block; font-size: 75%; }
        #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
        #icon-book { display: none; }

        @media (min-width: 768px) {
            #wrapper { width: 80%; margin: 2em auto; }
            #icon-book { display: inline-block; }
            #status a, #next a { display: block; }

            @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
            @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
            .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
        }
    </style>
{% endblock %}
", "elevator/elevator-result.html.twig", "/var/www/html/my_project_name/app/Resources/views/elevator/elevator-result.html.twig");
    }
}
