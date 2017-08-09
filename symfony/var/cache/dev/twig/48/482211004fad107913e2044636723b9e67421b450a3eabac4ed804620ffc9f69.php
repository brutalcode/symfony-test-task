<?php

/* base.html.twig */
class __TwigTemplate_42a4a1dc6b6ff71d8d79cf6382ba36fc18b265bfb50fe94e70c9087c6dab2dc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd4345683e41ec62dc3074c4cf0d86425f5d5e71be721027ac24cd9a25f2abe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd4345683e41ec62dc3074c4cf0d86425f5d5e71be721027ac24cd9a25f2abe4->enter($__internal_dd4345683e41ec62dc3074c4cf0d86425f5d5e71be721027ac24cd9a25f2abe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_819719c27a64b6f4e3b9f631c32f409f8321d409da40213accf2687998bdd0c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_819719c27a64b6f4e3b9f631c32f409f8321d409da40213accf2687998bdd0c5->enter($__internal_819719c27a64b6f4e3b9f631c32f409f8321d409da40213accf2687998bdd0c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_dd4345683e41ec62dc3074c4cf0d86425f5d5e71be721027ac24cd9a25f2abe4->leave($__internal_dd4345683e41ec62dc3074c4cf0d86425f5d5e71be721027ac24cd9a25f2abe4_prof);

        
        $__internal_819719c27a64b6f4e3b9f631c32f409f8321d409da40213accf2687998bdd0c5->leave($__internal_819719c27a64b6f4e3b9f631c32f409f8321d409da40213accf2687998bdd0c5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_845b917e075c964d6cb6318af98b73ec526d03d800618367e5e56268d212be57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_845b917e075c964d6cb6318af98b73ec526d03d800618367e5e56268d212be57->enter($__internal_845b917e075c964d6cb6318af98b73ec526d03d800618367e5e56268d212be57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_982e8f1cd463707f9c0f86a2d8d9529c6fbe75515b056dc12c7c0b3db3c0471f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_982e8f1cd463707f9c0f86a2d8d9529c6fbe75515b056dc12c7c0b3db3c0471f->enter($__internal_982e8f1cd463707f9c0f86a2d8d9529c6fbe75515b056dc12c7c0b3db3c0471f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_982e8f1cd463707f9c0f86a2d8d9529c6fbe75515b056dc12c7c0b3db3c0471f->leave($__internal_982e8f1cd463707f9c0f86a2d8d9529c6fbe75515b056dc12c7c0b3db3c0471f_prof);

        
        $__internal_845b917e075c964d6cb6318af98b73ec526d03d800618367e5e56268d212be57->leave($__internal_845b917e075c964d6cb6318af98b73ec526d03d800618367e5e56268d212be57_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_66b33015c3c8281d1f24ee76c068221ed37e783839c312081967737be83a176b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66b33015c3c8281d1f24ee76c068221ed37e783839c312081967737be83a176b->enter($__internal_66b33015c3c8281d1f24ee76c068221ed37e783839c312081967737be83a176b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fd93d1dca58829b5f2c73ba16f1f989be5a2b1bede17cb5a045f2f35c5ef4d32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd93d1dca58829b5f2c73ba16f1f989be5a2b1bede17cb5a045f2f35c5ef4d32->enter($__internal_fd93d1dca58829b5f2c73ba16f1f989be5a2b1bede17cb5a045f2f35c5ef4d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fd93d1dca58829b5f2c73ba16f1f989be5a2b1bede17cb5a045f2f35c5ef4d32->leave($__internal_fd93d1dca58829b5f2c73ba16f1f989be5a2b1bede17cb5a045f2f35c5ef4d32_prof);

        
        $__internal_66b33015c3c8281d1f24ee76c068221ed37e783839c312081967737be83a176b->leave($__internal_66b33015c3c8281d1f24ee76c068221ed37e783839c312081967737be83a176b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_50a35edccc038d95fb42428fb71d89c7f46e3d99014461fcc14dc66d68241546 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50a35edccc038d95fb42428fb71d89c7f46e3d99014461fcc14dc66d68241546->enter($__internal_50a35edccc038d95fb42428fb71d89c7f46e3d99014461fcc14dc66d68241546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_46e840650ef312cd774de054b8f3cc7ebb8945eabac4f09406dcd43dcbdc1b18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e840650ef312cd774de054b8f3cc7ebb8945eabac4f09406dcd43dcbdc1b18->enter($__internal_46e840650ef312cd774de054b8f3cc7ebb8945eabac4f09406dcd43dcbdc1b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_46e840650ef312cd774de054b8f3cc7ebb8945eabac4f09406dcd43dcbdc1b18->leave($__internal_46e840650ef312cd774de054b8f3cc7ebb8945eabac4f09406dcd43dcbdc1b18_prof);

        
        $__internal_50a35edccc038d95fb42428fb71d89c7f46e3d99014461fcc14dc66d68241546->leave($__internal_50a35edccc038d95fb42428fb71d89c7f46e3d99014461fcc14dc66d68241546_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bd9cf2740eb974c7b589af1f010795f07f9eca77ed8d7cf97a7e2166cc27ac01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd9cf2740eb974c7b589af1f010795f07f9eca77ed8d7cf97a7e2166cc27ac01->enter($__internal_bd9cf2740eb974c7b589af1f010795f07f9eca77ed8d7cf97a7e2166cc27ac01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c9cd34ba89847958440813a6dd6e11628992e490f089b4b2005362143e6bad35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9cd34ba89847958440813a6dd6e11628992e490f089b4b2005362143e6bad35->enter($__internal_c9cd34ba89847958440813a6dd6e11628992e490f089b4b2005362143e6bad35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c9cd34ba89847958440813a6dd6e11628992e490f089b4b2005362143e6bad35->leave($__internal_c9cd34ba89847958440813a6dd6e11628992e490f089b4b2005362143e6bad35_prof);

        
        $__internal_bd9cf2740eb974c7b589af1f010795f07f9eca77ed8d7cf97a7e2166cc27ac01->leave($__internal_bd9cf2740eb974c7b589af1f010795f07f9eca77ed8d7cf97a7e2166cc27ac01_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/my_project_name/app/Resources/views/base.html.twig");
    }
}
