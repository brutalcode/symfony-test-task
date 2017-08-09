<?php

/* elevator/index.html.twig */
class __TwigTemplate_288b1b80966ca2985f3838c1be60523e054583298def81270f870dd781853e68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "elevator/index.html.twig", 1);
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
        $__internal_43341ae9a77badb6ae90b0ad15c52bc701a1e44db468b2faf166f021db87c2d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43341ae9a77badb6ae90b0ad15c52bc701a1e44db468b2faf166f021db87c2d2->enter($__internal_43341ae9a77badb6ae90b0ad15c52bc701a1e44db468b2faf166f021db87c2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "elevator/index.html.twig"));

        $__internal_b5191a433ddbe568f2356db7783359036a0fe8439ad54981c5e18ca2aa54b196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5191a433ddbe568f2356db7783359036a0fe8439ad54981c5e18ca2aa54b196->enter($__internal_b5191a433ddbe568f2356db7783359036a0fe8439ad54981c5e18ca2aa54b196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "elevator/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43341ae9a77badb6ae90b0ad15c52bc701a1e44db468b2faf166f021db87c2d2->leave($__internal_43341ae9a77badb6ae90b0ad15c52bc701a1e44db468b2faf166f021db87c2d2_prof);

        
        $__internal_b5191a433ddbe568f2356db7783359036a0fe8439ad54981c5e18ca2aa54b196->leave($__internal_b5191a433ddbe568f2356db7783359036a0fe8439ad54981c5e18ca2aa54b196_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e17cd4a0c89127b0b53cea92623b23582dcfeb678e9343b8c80fae0ff0749590 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e17cd4a0c89127b0b53cea92623b23582dcfeb678e9343b8c80fae0ff0749590->enter($__internal_e17cd4a0c89127b0b53cea92623b23582dcfeb678e9343b8c80fae0ff0749590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a7d4c3968016acb04fa850b8c29a2751635dfe98fd8e32f507ffa020888f163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a7d4c3968016acb04fa850b8c29a2751635dfe98fd8e32f507ffa020888f163->enter($__internal_1a7d4c3968016acb04fa850b8c29a2751635dfe98fd8e32f507ffa020888f163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1a7d4c3968016acb04fa850b8c29a2751635dfe98fd8e32f507ffa020888f163->leave($__internal_1a7d4c3968016acb04fa850b8c29a2751635dfe98fd8e32f507ffa020888f163_prof);

        
        $__internal_e17cd4a0c89127b0b53cea92623b23582dcfeb678e9343b8c80fae0ff0749590->leave($__internal_e17cd4a0c89127b0b53cea92623b23582dcfeb678e9343b8c80fae0ff0749590_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_65cef2ce33de82bc8300e3f616250e71cd84cf909c21483cd4d0517028a701fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65cef2ce33de82bc8300e3f616250e71cd84cf909c21483cd4d0517028a701fd->enter($__internal_65cef2ce33de82bc8300e3f616250e71cd84cf909c21483cd4d0517028a701fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_90ec5f0f87dd26a4ce91db7831850b44c41908fc10bd7704b343d9db7a75f5e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90ec5f0f87dd26a4ce91db7831850b44c41908fc10bd7704b343d9db7a75f5e8->enter($__internal_90ec5f0f87dd26a4ce91db7831850b44c41908fc10bd7704b343d9db7a75f5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_90ec5f0f87dd26a4ce91db7831850b44c41908fc10bd7704b343d9db7a75f5e8->leave($__internal_90ec5f0f87dd26a4ce91db7831850b44c41908fc10bd7704b343d9db7a75f5e8_prof);

        
        $__internal_65cef2ce33de82bc8300e3f616250e71cd84cf909c21483cd4d0517028a701fd->leave($__internal_65cef2ce33de82bc8300e3f616250e71cd84cf909c21483cd4d0517028a701fd_prof);

    }

    public function getTemplateName()
    {
        return "elevator/index.html.twig";
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
", "elevator/index.html.twig", "/var/www/html/my_project_name/app/Resources/views/elevator/index.html.twig");
    }
}
