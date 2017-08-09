<?php

/* default/time-task.html.twig */
class __TwigTemplate_9c447fcb439b47ce20fd62a59b09bb98da3bb2a7b1d126ac9b5d0e119e950b6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/time-task.html.twig", 1);
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
        $__internal_ddf49ccae3c099a6feac7c0a9ae7d55dcae9464d4e92ba39e37df9c8c7f2687e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddf49ccae3c099a6feac7c0a9ae7d55dcae9464d4e92ba39e37df9c8c7f2687e->enter($__internal_ddf49ccae3c099a6feac7c0a9ae7d55dcae9464d4e92ba39e37df9c8c7f2687e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/time-task.html.twig"));

        $__internal_678a62ab6bd35a4e08a3600ad8c3291706d770056d0daa94738137bb8252764d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_678a62ab6bd35a4e08a3600ad8c3291706d770056d0daa94738137bb8252764d->enter($__internal_678a62ab6bd35a4e08a3600ad8c3291706d770056d0daa94738137bb8252764d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/time-task.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddf49ccae3c099a6feac7c0a9ae7d55dcae9464d4e92ba39e37df9c8c7f2687e->leave($__internal_ddf49ccae3c099a6feac7c0a9ae7d55dcae9464d4e92ba39e37df9c8c7f2687e_prof);

        
        $__internal_678a62ab6bd35a4e08a3600ad8c3291706d770056d0daa94738137bb8252764d->leave($__internal_678a62ab6bd35a4e08a3600ad8c3291706d770056d0daa94738137bb8252764d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_95f3864ce13ee25eb128ce859318521ac729ef7744be12c10fb009da17e8a7df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95f3864ce13ee25eb128ce859318521ac729ef7744be12c10fb009da17e8a7df->enter($__internal_95f3864ce13ee25eb128ce859318521ac729ef7744be12c10fb009da17e8a7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6c9666572135d06650a6aa8e06b0ad96503bced6c6ee2ba2151435d1ce1d92b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c9666572135d06650a6aa8e06b0ad96503bced6c6ee2ba2151435d1ce1d92b4->enter($__internal_6c9666572135d06650a6aa8e06b0ad96503bced6c6ee2ba2151435d1ce1d92b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_6c9666572135d06650a6aa8e06b0ad96503bced6c6ee2ba2151435d1ce1d92b4->leave($__internal_6c9666572135d06650a6aa8e06b0ad96503bced6c6ee2ba2151435d1ce1d92b4_prof);

        
        $__internal_95f3864ce13ee25eb128ce859318521ac729ef7744be12c10fb009da17e8a7df->leave($__internal_95f3864ce13ee25eb128ce859318521ac729ef7744be12c10fb009da17e8a7df_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3a82157c308a7dc8c868aae59807171cd0cc68ba8d76beccde00a349fb3cd3bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a82157c308a7dc8c868aae59807171cd0cc68ba8d76beccde00a349fb3cd3bd->enter($__internal_3a82157c308a7dc8c868aae59807171cd0cc68ba8d76beccde00a349fb3cd3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_453bf91a8989f53687d013d62180070b50cd32f5d3e5f4a97641a9d82d19f560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_453bf91a8989f53687d013d62180070b50cd32f5d3e5f4a97641a9d82d19f560->enter($__internal_453bf91a8989f53687d013d62180070b50cd32f5d3e5f4a97641a9d82d19f560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
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
        
        $__internal_453bf91a8989f53687d013d62180070b50cd32f5d3e5f4a97641a9d82d19f560->leave($__internal_453bf91a8989f53687d013d62180070b50cd32f5d3e5f4a97641a9d82d19f560_prof);

        
        $__internal_3a82157c308a7dc8c868aae59807171cd0cc68ba8d76beccde00a349fb3cd3bd->leave($__internal_3a82157c308a7dc8c868aae59807171cd0cc68ba8d76beccde00a349fb3cd3bd_prof);

    }

    public function getTemplateName()
    {
        return "default/time-task.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 8,  71 => 7,  59 => 5,  55 => 4,  50 => 3,  41 => 2,  11 => 1,);
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
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
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
", "default/time-task.html.twig", "/var/www/html/my_project_name/app/Resources/views/default/time-task.html.twig");
    }
}
