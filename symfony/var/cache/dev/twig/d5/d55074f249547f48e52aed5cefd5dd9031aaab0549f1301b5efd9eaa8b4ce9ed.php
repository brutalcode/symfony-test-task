<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4c7b4289cb995b3ff6737044ed96bea61bb61f1d03ffc7d47b94b73dc8002b82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6e79f703203bc3e9c414cc56bb5ed9a2e6c14e192301a5c423375b88c51a986 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6e79f703203bc3e9c414cc56bb5ed9a2e6c14e192301a5c423375b88c51a986->enter($__internal_e6e79f703203bc3e9c414cc56bb5ed9a2e6c14e192301a5c423375b88c51a986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_ac74e476107f490ea6c448050be1288737a7fe633d9901f20d482c8930451262 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac74e476107f490ea6c448050be1288737a7fe633d9901f20d482c8930451262->enter($__internal_ac74e476107f490ea6c448050be1288737a7fe633d9901f20d482c8930451262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6e79f703203bc3e9c414cc56bb5ed9a2e6c14e192301a5c423375b88c51a986->leave($__internal_e6e79f703203bc3e9c414cc56bb5ed9a2e6c14e192301a5c423375b88c51a986_prof);

        
        $__internal_ac74e476107f490ea6c448050be1288737a7fe633d9901f20d482c8930451262->leave($__internal_ac74e476107f490ea6c448050be1288737a7fe633d9901f20d482c8930451262_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ba7391b4f60261f1f4ef6fd34566a960b6e258bf0066eb20bc179296b4283a98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba7391b4f60261f1f4ef6fd34566a960b6e258bf0066eb20bc179296b4283a98->enter($__internal_ba7391b4f60261f1f4ef6fd34566a960b6e258bf0066eb20bc179296b4283a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cb399372cd6f073a512a987bf923a02c2cd8b475613fcc9a53024a9de9b17a0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb399372cd6f073a512a987bf923a02c2cd8b475613fcc9a53024a9de9b17a0b->enter($__internal_cb399372cd6f073a512a987bf923a02c2cd8b475613fcc9a53024a9de9b17a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_cb399372cd6f073a512a987bf923a02c2cd8b475613fcc9a53024a9de9b17a0b->leave($__internal_cb399372cd6f073a512a987bf923a02c2cd8b475613fcc9a53024a9de9b17a0b_prof);

        
        $__internal_ba7391b4f60261f1f4ef6fd34566a960b6e258bf0066eb20bc179296b4283a98->leave($__internal_ba7391b4f60261f1f4ef6fd34566a960b6e258bf0066eb20bc179296b4283a98_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_8caa6b77a9b6a0d5f1fab7612596e4aad3f69f97f356682ef0d62715b50a85bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8caa6b77a9b6a0d5f1fab7612596e4aad3f69f97f356682ef0d62715b50a85bc->enter($__internal_8caa6b77a9b6a0d5f1fab7612596e4aad3f69f97f356682ef0d62715b50a85bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d05906f5f1aef46f8c8206f4df8ea529434af9146b480862935cfadce2563e80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d05906f5f1aef46f8c8206f4df8ea529434af9146b480862935cfadce2563e80->enter($__internal_d05906f5f1aef46f8c8206f4df8ea529434af9146b480862935cfadce2563e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d05906f5f1aef46f8c8206f4df8ea529434af9146b480862935cfadce2563e80->leave($__internal_d05906f5f1aef46f8c8206f4df8ea529434af9146b480862935cfadce2563e80_prof);

        
        $__internal_8caa6b77a9b6a0d5f1fab7612596e4aad3f69f97f356682ef0d62715b50a85bc->leave($__internal_8caa6b77a9b6a0d5f1fab7612596e4aad3f69f97f356682ef0d62715b50a85bc_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3de4b35e03f0f4e46a3664536f905861f229fc02c6a56be26f238f68d106972b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3de4b35e03f0f4e46a3664536f905861f229fc02c6a56be26f238f68d106972b->enter($__internal_3de4b35e03f0f4e46a3664536f905861f229fc02c6a56be26f238f68d106972b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_870e62f9082a76ea101a9050c83ee8feff8cd8a5e93acb4136382db408611430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_870e62f9082a76ea101a9050c83ee8feff8cd8a5e93acb4136382db408611430->enter($__internal_870e62f9082a76ea101a9050c83ee8feff8cd8a5e93acb4136382db408611430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_870e62f9082a76ea101a9050c83ee8feff8cd8a5e93acb4136382db408611430->leave($__internal_870e62f9082a76ea101a9050c83ee8feff8cd8a5e93acb4136382db408611430_prof);

        
        $__internal_3de4b35e03f0f4e46a3664536f905861f229fc02c6a56be26f238f68d106972b->leave($__internal_3de4b35e03f0f4e46a3664536f905861f229fc02c6a56be26f238f68d106972b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
