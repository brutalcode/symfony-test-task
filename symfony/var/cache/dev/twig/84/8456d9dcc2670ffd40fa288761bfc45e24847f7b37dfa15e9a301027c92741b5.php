<?php

/* default/week-number.html.twig */
class __TwigTemplate_c44604e35b958dc5007d61d926df407c5affa74c40f798345a660f3efda6b719 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/week-number.html.twig", 1);
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
        $__internal_9e543c3515412c9d33ae0d507bd39add9a0c88d63a73bb1f4b1a0c8eca58cdaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e543c3515412c9d33ae0d507bd39add9a0c88d63a73bb1f4b1a0c8eca58cdaf->enter($__internal_9e543c3515412c9d33ae0d507bd39add9a0c88d63a73bb1f4b1a0c8eca58cdaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/week-number.html.twig"));

        $__internal_e4853c15ea3de42f1095182b94586fe7d27a3ba95500de2644413697b59afd8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4853c15ea3de42f1095182b94586fe7d27a3ba95500de2644413697b59afd8c->enter($__internal_e4853c15ea3de42f1095182b94586fe7d27a3ba95500de2644413697b59afd8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/week-number.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e543c3515412c9d33ae0d507bd39add9a0c88d63a73bb1f4b1a0c8eca58cdaf->leave($__internal_9e543c3515412c9d33ae0d507bd39add9a0c88d63a73bb1f4b1a0c8eca58cdaf_prof);

        
        $__internal_e4853c15ea3de42f1095182b94586fe7d27a3ba95500de2644413697b59afd8c->leave($__internal_e4853c15ea3de42f1095182b94586fe7d27a3ba95500de2644413697b59afd8c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_158b4557103368ff8330f6a4342f646093a2bc4d2f8a86b68a066c98c5a29b52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_158b4557103368ff8330f6a4342f646093a2bc4d2f8a86b68a066c98c5a29b52->enter($__internal_158b4557103368ff8330f6a4342f646093a2bc4d2f8a86b68a066c98c5a29b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4815130e46ce63bdfcabaca07607e21d0ea8bfaf854a2de22cc05f05110ce76e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4815130e46ce63bdfcabaca07607e21d0ea8bfaf854a2de22cc05f05110ce76e->enter($__internal_4815130e46ce63bdfcabaca07607e21d0ea8bfaf854a2de22cc05f05110ce76e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4815130e46ce63bdfcabaca07607e21d0ea8bfaf854a2de22cc05f05110ce76e->leave($__internal_4815130e46ce63bdfcabaca07607e21d0ea8bfaf854a2de22cc05f05110ce76e_prof);

        
        $__internal_158b4557103368ff8330f6a4342f646093a2bc4d2f8a86b68a066c98c5a29b52->leave($__internal_158b4557103368ff8330f6a4342f646093a2bc4d2f8a86b68a066c98c5a29b52_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e44ee03bc71dec00fdd5f7a50fa20e168fb91300a76a11a6aab6e00357431844 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e44ee03bc71dec00fdd5f7a50fa20e168fb91300a76a11a6aab6e00357431844->enter($__internal_e44ee03bc71dec00fdd5f7a50fa20e168fb91300a76a11a6aab6e00357431844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ebc06f729c93277ce0ee13014a8c76b137d9c7119276c78f71c3f8a145c63984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebc06f729c93277ce0ee13014a8c76b137d9c7119276c78f71c3f8a145c63984->enter($__internal_ebc06f729c93277ce0ee13014a8c76b137d9c7119276c78f71c3f8a145c63984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ebc06f729c93277ce0ee13014a8c76b137d9c7119276c78f71c3f8a145c63984->leave($__internal_ebc06f729c93277ce0ee13014a8c76b137d9c7119276c78f71c3f8a145c63984_prof);

        
        $__internal_e44ee03bc71dec00fdd5f7a50fa20e168fb91300a76a11a6aab6e00357431844->leave($__internal_e44ee03bc71dec00fdd5f7a50fa20e168fb91300a76a11a6aab6e00357431844_prof);

    }

    public function getTemplateName()
    {
        return "default/week-number.html.twig";
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
", "default/week-number.html.twig", "/var/www/html/my_project_name/app/Resources/views/default/week-number.html.twig");
    }
}
