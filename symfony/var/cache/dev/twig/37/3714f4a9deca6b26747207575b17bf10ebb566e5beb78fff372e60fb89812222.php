<?php

/* default/new.html.twig */
class __TwigTemplate_2da911174bc7a723fe564297d14b13f2461e9826463b7195a5a72ba7bc05a377 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/new.html.twig", 1);
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
        $__internal_fb539e1f9d56da5630637edfac4070a20ff792f77a4ae5246d12da53b5d18dc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb539e1f9d56da5630637edfac4070a20ff792f77a4ae5246d12da53b5d18dc4->enter($__internal_fb539e1f9d56da5630637edfac4070a20ff792f77a4ae5246d12da53b5d18dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/new.html.twig"));

        $__internal_83992e807a789e7611ee71f623d6b4ba826ea20f02b5a4f83a710de5c939bc7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83992e807a789e7611ee71f623d6b4ba826ea20f02b5a4f83a710de5c939bc7a->enter($__internal_83992e807a789e7611ee71f623d6b4ba826ea20f02b5a4f83a710de5c939bc7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb539e1f9d56da5630637edfac4070a20ff792f77a4ae5246d12da53b5d18dc4->leave($__internal_fb539e1f9d56da5630637edfac4070a20ff792f77a4ae5246d12da53b5d18dc4_prof);

        
        $__internal_83992e807a789e7611ee71f623d6b4ba826ea20f02b5a4f83a710de5c939bc7a->leave($__internal_83992e807a789e7611ee71f623d6b4ba826ea20f02b5a4f83a710de5c939bc7a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0adc4ea33798f2e7f52b280fd3f21ed3b4000c20ccd58116792f60b5cc3c1caf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0adc4ea33798f2e7f52b280fd3f21ed3b4000c20ccd58116792f60b5cc3c1caf->enter($__internal_0adc4ea33798f2e7f52b280fd3f21ed3b4000c20ccd58116792f60b5cc3c1caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2dc86ce491fc0853b4555537b15155d1911fbe3f8f3cc53531784acee5b001c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dc86ce491fc0853b4555537b15155d1911fbe3f8f3cc53531784acee5b001c2->enter($__internal_2dc86ce491fc0853b4555537b15155d1911fbe3f8f3cc53531784acee5b001c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2dc86ce491fc0853b4555537b15155d1911fbe3f8f3cc53531784acee5b001c2->leave($__internal_2dc86ce491fc0853b4555537b15155d1911fbe3f8f3cc53531784acee5b001c2_prof);

        
        $__internal_0adc4ea33798f2e7f52b280fd3f21ed3b4000c20ccd58116792f60b5cc3c1caf->leave($__internal_0adc4ea33798f2e7f52b280fd3f21ed3b4000c20ccd58116792f60b5cc3c1caf_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c753978f213d6634e60f78d6915215ac53d7a00993a1df46c55e8691b3c97a13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c753978f213d6634e60f78d6915215ac53d7a00993a1df46c55e8691b3c97a13->enter($__internal_c753978f213d6634e60f78d6915215ac53d7a00993a1df46c55e8691b3c97a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_46c9a1beebf645712c7544cc270e5cd696e1dca172d042edb83ed2aba386c86e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46c9a1beebf645712c7544cc270e5cd696e1dca172d042edb83ed2aba386c86e->enter($__internal_46c9a1beebf645712c7544cc270e5cd696e1dca172d042edb83ed2aba386c86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_46c9a1beebf645712c7544cc270e5cd696e1dca172d042edb83ed2aba386c86e->leave($__internal_46c9a1beebf645712c7544cc270e5cd696e1dca172d042edb83ed2aba386c86e_prof);

        
        $__internal_c753978f213d6634e60f78d6915215ac53d7a00993a1df46c55e8691b3c97a13->leave($__internal_c753978f213d6634e60f78d6915215ac53d7a00993a1df46c55e8691b3c97a13_prof);

    }

    public function getTemplateName()
    {
        return "default/new.html.twig";
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
", "default/new.html.twig", "/var/www/html/my_project_name/app/Resources/views/default/new.html.twig");
    }
}
