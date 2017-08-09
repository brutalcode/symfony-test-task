<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_beb21384708b7fce70142673076643bf4701a2536699ef3f1150a9b33abd0d29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_259352bc002a0f30dfc2911902f6e1d16aba102e519cef60b4fff7b4630d6c08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_259352bc002a0f30dfc2911902f6e1d16aba102e519cef60b4fff7b4630d6c08->enter($__internal_259352bc002a0f30dfc2911902f6e1d16aba102e519cef60b4fff7b4630d6c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_e6ed5fdc9dd834a39240e939e322734383960baf3af438853a896bf67bbbd23e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6ed5fdc9dd834a39240e939e322734383960baf3af438853a896bf67bbbd23e->enter($__internal_e6ed5fdc9dd834a39240e939e322734383960baf3af438853a896bf67bbbd23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_259352bc002a0f30dfc2911902f6e1d16aba102e519cef60b4fff7b4630d6c08->leave($__internal_259352bc002a0f30dfc2911902f6e1d16aba102e519cef60b4fff7b4630d6c08_prof);

        
        $__internal_e6ed5fdc9dd834a39240e939e322734383960baf3af438853a896bf67bbbd23e->leave($__internal_e6ed5fdc9dd834a39240e939e322734383960baf3af438853a896bf67bbbd23e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_78cee5ef3e930adc6ae32e25fcfe7d5ce4fa9808347d21e390614b07bc42a397 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78cee5ef3e930adc6ae32e25fcfe7d5ce4fa9808347d21e390614b07bc42a397->enter($__internal_78cee5ef3e930adc6ae32e25fcfe7d5ce4fa9808347d21e390614b07bc42a397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4c1a77029e7560c8c0c27afc92c81b8a67449d09b5d188360eff6c10611b40ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c1a77029e7560c8c0c27afc92c81b8a67449d09b5d188360eff6c10611b40ea->enter($__internal_4c1a77029e7560c8c0c27afc92c81b8a67449d09b5d188360eff6c10611b40ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4c1a77029e7560c8c0c27afc92c81b8a67449d09b5d188360eff6c10611b40ea->leave($__internal_4c1a77029e7560c8c0c27afc92c81b8a67449d09b5d188360eff6c10611b40ea_prof);

        
        $__internal_78cee5ef3e930adc6ae32e25fcfe7d5ce4fa9808347d21e390614b07bc42a397->leave($__internal_78cee5ef3e930adc6ae32e25fcfe7d5ce4fa9808347d21e390614b07bc42a397_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_2f1bfca5a3011d97f7e73f065a0cbb24085fde53189d7608c2772991e9c5231d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f1bfca5a3011d97f7e73f065a0cbb24085fde53189d7608c2772991e9c5231d->enter($__internal_2f1bfca5a3011d97f7e73f065a0cbb24085fde53189d7608c2772991e9c5231d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d7b9cb1696e23eee7934da1bf2d7a09d981544ab46138eb3be3026b3b1773c0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7b9cb1696e23eee7934da1bf2d7a09d981544ab46138eb3be3026b3b1773c0d->enter($__internal_d7b9cb1696e23eee7934da1bf2d7a09d981544ab46138eb3be3026b3b1773c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d7b9cb1696e23eee7934da1bf2d7a09d981544ab46138eb3be3026b3b1773c0d->leave($__internal_d7b9cb1696e23eee7934da1bf2d7a09d981544ab46138eb3be3026b3b1773c0d_prof);

        
        $__internal_2f1bfca5a3011d97f7e73f065a0cbb24085fde53189d7608c2772991e9c5231d->leave($__internal_2f1bfca5a3011d97f7e73f065a0cbb24085fde53189d7608c2772991e9c5231d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_8273e78303a80afcc7600645d128271ea8533af7477c3edccbd2aa288109c699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8273e78303a80afcc7600645d128271ea8533af7477c3edccbd2aa288109c699->enter($__internal_8273e78303a80afcc7600645d128271ea8533af7477c3edccbd2aa288109c699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c7e68a53bba37d2dc1267daff1a94ab604d138151c8daad05c9ff5dee7401db8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7e68a53bba37d2dc1267daff1a94ab604d138151c8daad05c9ff5dee7401db8->enter($__internal_c7e68a53bba37d2dc1267daff1a94ab604d138151c8daad05c9ff5dee7401db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c7e68a53bba37d2dc1267daff1a94ab604d138151c8daad05c9ff5dee7401db8->leave($__internal_c7e68a53bba37d2dc1267daff1a94ab604d138151c8daad05c9ff5dee7401db8_prof);

        
        $__internal_8273e78303a80afcc7600645d128271ea8533af7477c3edccbd2aa288109c699->leave($__internal_8273e78303a80afcc7600645d128271ea8533af7477c3edccbd2aa288109c699_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
