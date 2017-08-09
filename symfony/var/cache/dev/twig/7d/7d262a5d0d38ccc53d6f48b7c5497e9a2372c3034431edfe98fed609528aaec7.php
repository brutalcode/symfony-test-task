<?php

/* default/week-number-result.html.twig */
class __TwigTemplate_a52b91eb7593e5258969e72eddb192a09bdf40ce80dd36402be69fed4efda309 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/week-number-result.html.twig", 1);
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
        $__internal_20be946432599b13f06327367bd446b2ce7737aefa8824b8359f0bdd5474ae65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20be946432599b13f06327367bd446b2ce7737aefa8824b8359f0bdd5474ae65->enter($__internal_20be946432599b13f06327367bd446b2ce7737aefa8824b8359f0bdd5474ae65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/week-number-result.html.twig"));

        $__internal_8f508f2c2868135123cef7a313b69fe250c3d1313e3a850f64759b182741964e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f508f2c2868135123cef7a313b69fe250c3d1313e3a850f64759b182741964e->enter($__internal_8f508f2c2868135123cef7a313b69fe250c3d1313e3a850f64759b182741964e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/week-number-result.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20be946432599b13f06327367bd446b2ce7737aefa8824b8359f0bdd5474ae65->leave($__internal_20be946432599b13f06327367bd446b2ce7737aefa8824b8359f0bdd5474ae65_prof);

        
        $__internal_8f508f2c2868135123cef7a313b69fe250c3d1313e3a850f64759b182741964e->leave($__internal_8f508f2c2868135123cef7a313b69fe250c3d1313e3a850f64759b182741964e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2c6d45be11da946f5dc57dbabf3b1be8c8dfb8dfdabeef5e08152a9b242ece0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2c6d45be11da946f5dc57dbabf3b1be8c8dfb8dfdabeef5e08152a9b242ece0->enter($__internal_b2c6d45be11da946f5dc57dbabf3b1be8c8dfb8dfdabeef5e08152a9b242ece0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ed9252ef5eba5cf4ed534b02cf68bc2064157533e80d7f8b244d39ca5aea705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ed9252ef5eba5cf4ed534b02cf68bc2064157533e80d7f8b244d39ca5aea705->enter($__internal_3ed9252ef5eba5cf4ed534b02cf68bc2064157533e80d7f8b244d39ca5aea705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>Number of week: ";
        echo twig_escape_filter($this->env, (isset($context["number_of_week"]) ? $context["number_of_week"] : $this->getContext($context, "number_of_week")), "html", null, true);
        echo "</h1>
";
        
        $__internal_3ed9252ef5eba5cf4ed534b02cf68bc2064157533e80d7f8b244d39ca5aea705->leave($__internal_3ed9252ef5eba5cf4ed534b02cf68bc2064157533e80d7f8b244d39ca5aea705_prof);

        
        $__internal_b2c6d45be11da946f5dc57dbabf3b1be8c8dfb8dfdabeef5e08152a9b242ece0->leave($__internal_b2c6d45be11da946f5dc57dbabf3b1be8c8dfb8dfdabeef5e08152a9b242ece0_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_800d7367c21691b6468d030564d12178dc9f39fa05c2a83989207f19f623c6bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_800d7367c21691b6468d030564d12178dc9f39fa05c2a83989207f19f623c6bc->enter($__internal_800d7367c21691b6468d030564d12178dc9f39fa05c2a83989207f19f623c6bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c510d1ba1ea22dc74dd50fa6dc4de78433346c6b1314a35d846172e65a08dde3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c510d1ba1ea22dc74dd50fa6dc4de78433346c6b1314a35d846172e65a08dde3->enter($__internal_c510d1ba1ea22dc74dd50fa6dc4de78433346c6b1314a35d846172e65a08dde3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c510d1ba1ea22dc74dd50fa6dc4de78433346c6b1314a35d846172e65a08dde3->leave($__internal_c510d1ba1ea22dc74dd50fa6dc4de78433346c6b1314a35d846172e65a08dde3_prof);

        
        $__internal_800d7367c21691b6468d030564d12178dc9f39fa05c2a83989207f19f623c6bc->leave($__internal_800d7367c21691b6468d030564d12178dc9f39fa05c2a83989207f19f623c6bc_prof);

    }

    public function getTemplateName()
    {
        return "default/week-number-result.html.twig";
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
    <h1>Number of week: {{ number_of_week }}</h1>
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
", "default/week-number-result.html.twig", "/var/www/html/my_project_name/app/Resources/views/default/week-number-result.html.twig");
    }
}
