<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_fc8d50b4ddaf604f422b05df6bd2514d63ecc83ac9533c9dcebb31515095dd1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_7ae7744aec10c5ff505c912b00887c243862f6ca75028fa50de90b5743552238 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ae7744aec10c5ff505c912b00887c243862f6ca75028fa50de90b5743552238->enter($__internal_7ae7744aec10c5ff505c912b00887c243862f6ca75028fa50de90b5743552238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_842a2c42d4f5701a05c56777bd03d7344118bff592d965abe37d01a5830a6e46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_842a2c42d4f5701a05c56777bd03d7344118bff592d965abe37d01a5830a6e46->enter($__internal_842a2c42d4f5701a05c56777bd03d7344118bff592d965abe37d01a5830a6e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ae7744aec10c5ff505c912b00887c243862f6ca75028fa50de90b5743552238->leave($__internal_7ae7744aec10c5ff505c912b00887c243862f6ca75028fa50de90b5743552238_prof);

        
        $__internal_842a2c42d4f5701a05c56777bd03d7344118bff592d965abe37d01a5830a6e46->leave($__internal_842a2c42d4f5701a05c56777bd03d7344118bff592d965abe37d01a5830a6e46_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3b0aed4bfcf5a0d4e78369331dbaf08b0b238ee1d246df0a21819dabc3b5ba99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b0aed4bfcf5a0d4e78369331dbaf08b0b238ee1d246df0a21819dabc3b5ba99->enter($__internal_3b0aed4bfcf5a0d4e78369331dbaf08b0b238ee1d246df0a21819dabc3b5ba99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0c33fd39d5c308f7445f09eacd645858f2fc88c54abb04c83e3ee807097f5ecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c33fd39d5c308f7445f09eacd645858f2fc88c54abb04c83e3ee807097f5ecc->enter($__internal_0c33fd39d5c308f7445f09eacd645858f2fc88c54abb04c83e3ee807097f5ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_0c33fd39d5c308f7445f09eacd645858f2fc88c54abb04c83e3ee807097f5ecc->leave($__internal_0c33fd39d5c308f7445f09eacd645858f2fc88c54abb04c83e3ee807097f5ecc_prof);

        
        $__internal_3b0aed4bfcf5a0d4e78369331dbaf08b0b238ee1d246df0a21819dabc3b5ba99->leave($__internal_3b0aed4bfcf5a0d4e78369331dbaf08b0b238ee1d246df0a21819dabc3b5ba99_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2d0ee3fbc6c88bc164987740182cae88b66fe7ad23e1326ad371b560f276959d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d0ee3fbc6c88bc164987740182cae88b66fe7ad23e1326ad371b560f276959d->enter($__internal_2d0ee3fbc6c88bc164987740182cae88b66fe7ad23e1326ad371b560f276959d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0ca0ad42805e9df7f385e77a9ecf05f79509a78ece5da64f482aa62db8e9ec0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ca0ad42805e9df7f385e77a9ecf05f79509a78ece5da64f482aa62db8e9ec0b->enter($__internal_0ca0ad42805e9df7f385e77a9ecf05f79509a78ece5da64f482aa62db8e9ec0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0ca0ad42805e9df7f385e77a9ecf05f79509a78ece5da64f482aa62db8e9ec0b->leave($__internal_0ca0ad42805e9df7f385e77a9ecf05f79509a78ece5da64f482aa62db8e9ec0b_prof);

        
        $__internal_2d0ee3fbc6c88bc164987740182cae88b66fe7ad23e1326ad371b560f276959d->leave($__internal_2d0ee3fbc6c88bc164987740182cae88b66fe7ad23e1326ad371b560f276959d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_00530323cc2a29271cf87af4f999f2119d0c497f56c57a199f1fb5d85ef46cb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00530323cc2a29271cf87af4f999f2119d0c497f56c57a199f1fb5d85ef46cb2->enter($__internal_00530323cc2a29271cf87af4f999f2119d0c497f56c57a199f1fb5d85ef46cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aa5de84b17356189f22742cc5b9ad3c7fbbd364f7e83964437a8666a6e8372e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa5de84b17356189f22742cc5b9ad3c7fbbd364f7e83964437a8666a6e8372e1->enter($__internal_aa5de84b17356189f22742cc5b9ad3c7fbbd364f7e83964437a8666a6e8372e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_aa5de84b17356189f22742cc5b9ad3c7fbbd364f7e83964437a8666a6e8372e1->leave($__internal_aa5de84b17356189f22742cc5b9ad3c7fbbd364f7e83964437a8666a6e8372e1_prof);

        
        $__internal_00530323cc2a29271cf87af4f999f2119d0c497f56c57a199f1fb5d85ef46cb2->leave($__internal_00530323cc2a29271cf87af4f999f2119d0c497f56c57a199f1fb5d85ef46cb2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
