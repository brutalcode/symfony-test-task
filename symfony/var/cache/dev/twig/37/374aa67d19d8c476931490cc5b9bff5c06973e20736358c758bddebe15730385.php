<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_26ccac28e93129ff9e6e9e9adb3ed8294de69de07b64920873d38af5a8edd929 extends Twig_Template
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
        $__internal_876a2a9d029cb3450d11bd3a4d4636eafd9b3628b845320b3d15a583f7665fba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_876a2a9d029cb3450d11bd3a4d4636eafd9b3628b845320b3d15a583f7665fba->enter($__internal_876a2a9d029cb3450d11bd3a4d4636eafd9b3628b845320b3d15a583f7665fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e2010efe254368d1f718f2f915f66ebbc844f2ce831309c6122754c11b464b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2010efe254368d1f718f2f915f66ebbc844f2ce831309c6122754c11b464b05->enter($__internal_e2010efe254368d1f718f2f915f66ebbc844f2ce831309c6122754c11b464b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_876a2a9d029cb3450d11bd3a4d4636eafd9b3628b845320b3d15a583f7665fba->leave($__internal_876a2a9d029cb3450d11bd3a4d4636eafd9b3628b845320b3d15a583f7665fba_prof);

        
        $__internal_e2010efe254368d1f718f2f915f66ebbc844f2ce831309c6122754c11b464b05->leave($__internal_e2010efe254368d1f718f2f915f66ebbc844f2ce831309c6122754c11b464b05_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_93be57d13be81f154eb244c554951f0cf94a41a7b68a0cbf99868ffd5e6439b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93be57d13be81f154eb244c554951f0cf94a41a7b68a0cbf99868ffd5e6439b3->enter($__internal_93be57d13be81f154eb244c554951f0cf94a41a7b68a0cbf99868ffd5e6439b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1905d2a02bf9db374df6efbdb2afd63fef321389160a66f39940eac22f18ceeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1905d2a02bf9db374df6efbdb2afd63fef321389160a66f39940eac22f18ceeb->enter($__internal_1905d2a02bf9db374df6efbdb2afd63fef321389160a66f39940eac22f18ceeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1905d2a02bf9db374df6efbdb2afd63fef321389160a66f39940eac22f18ceeb->leave($__internal_1905d2a02bf9db374df6efbdb2afd63fef321389160a66f39940eac22f18ceeb_prof);

        
        $__internal_93be57d13be81f154eb244c554951f0cf94a41a7b68a0cbf99868ffd5e6439b3->leave($__internal_93be57d13be81f154eb244c554951f0cf94a41a7b68a0cbf99868ffd5e6439b3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_733806da64220e9d0f1d17e2e9c0abf03331fb4b3476081fff4f650a0b765f6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_733806da64220e9d0f1d17e2e9c0abf03331fb4b3476081fff4f650a0b765f6d->enter($__internal_733806da64220e9d0f1d17e2e9c0abf03331fb4b3476081fff4f650a0b765f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5424c7e7bf80191421b9a4f59d2b5e2e96e4a22b153b8a90d977fa073a387434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5424c7e7bf80191421b9a4f59d2b5e2e96e4a22b153b8a90d977fa073a387434->enter($__internal_5424c7e7bf80191421b9a4f59d2b5e2e96e4a22b153b8a90d977fa073a387434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5424c7e7bf80191421b9a4f59d2b5e2e96e4a22b153b8a90d977fa073a387434->leave($__internal_5424c7e7bf80191421b9a4f59d2b5e2e96e4a22b153b8a90d977fa073a387434_prof);

        
        $__internal_733806da64220e9d0f1d17e2e9c0abf03331fb4b3476081fff4f650a0b765f6d->leave($__internal_733806da64220e9d0f1d17e2e9c0abf03331fb4b3476081fff4f650a0b765f6d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ee9ead16e2c19cde11a39001848302a805a9235cc2184dd1656abd2544c2461 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ee9ead16e2c19cde11a39001848302a805a9235cc2184dd1656abd2544c2461->enter($__internal_4ee9ead16e2c19cde11a39001848302a805a9235cc2184dd1656abd2544c2461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ce0c39d7f4fb7e666ee80a4938e48b3713941d81d96c5971e977b58600c46fc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce0c39d7f4fb7e666ee80a4938e48b3713941d81d96c5971e977b58600c46fc3->enter($__internal_ce0c39d7f4fb7e666ee80a4938e48b3713941d81d96c5971e977b58600c46fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ce0c39d7f4fb7e666ee80a4938e48b3713941d81d96c5971e977b58600c46fc3->leave($__internal_ce0c39d7f4fb7e666ee80a4938e48b3713941d81d96c5971e977b58600c46fc3_prof);

        
        $__internal_4ee9ead16e2c19cde11a39001848302a805a9235cc2184dd1656abd2544c2461->leave($__internal_4ee9ead16e2c19cde11a39001848302a805a9235cc2184dd1656abd2544c2461_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
