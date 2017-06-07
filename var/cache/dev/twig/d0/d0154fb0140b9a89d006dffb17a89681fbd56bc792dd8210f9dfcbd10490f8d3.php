<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_15247b897b42379b1e3aa331aad2f031225d862385dfd49831cefb8723db4133 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_899581ee5505c65ebff253709ffc7d49a6df655319e955c2bff5aaefd10ea6e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_899581ee5505c65ebff253709ffc7d49a6df655319e955c2bff5aaefd10ea6e0->enter($__internal_899581ee5505c65ebff253709ffc7d49a6df655319e955c2bff5aaefd10ea6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_8af375660497311575f51fb91ba28cc58e7c8afff074cb2f80ccfd9e25bb9eb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8af375660497311575f51fb91ba28cc58e7c8afff074cb2f80ccfd9e25bb9eb2->enter($__internal_8af375660497311575f51fb91ba28cc58e7c8afff074cb2f80ccfd9e25bb9eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_899581ee5505c65ebff253709ffc7d49a6df655319e955c2bff5aaefd10ea6e0->leave($__internal_899581ee5505c65ebff253709ffc7d49a6df655319e955c2bff5aaefd10ea6e0_prof);

        
        $__internal_8af375660497311575f51fb91ba28cc58e7c8afff074cb2f80ccfd9e25bb9eb2->leave($__internal_8af375660497311575f51fb91ba28cc58e7c8afff074cb2f80ccfd9e25bb9eb2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f8947641fad2a3074ac73d4b1963383810fe19627922f5c79aa3d780ea4ddcb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8947641fad2a3074ac73d4b1963383810fe19627922f5c79aa3d780ea4ddcb5->enter($__internal_f8947641fad2a3074ac73d4b1963383810fe19627922f5c79aa3d780ea4ddcb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6da379134691da6d87cfc53acf7db820eb1e92bc148aa360df0e2fa616769678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6da379134691da6d87cfc53acf7db820eb1e92bc148aa360df0e2fa616769678->enter($__internal_6da379134691da6d87cfc53acf7db820eb1e92bc148aa360df0e2fa616769678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6da379134691da6d87cfc53acf7db820eb1e92bc148aa360df0e2fa616769678->leave($__internal_6da379134691da6d87cfc53acf7db820eb1e92bc148aa360df0e2fa616769678_prof);

        
        $__internal_f8947641fad2a3074ac73d4b1963383810fe19627922f5c79aa3d780ea4ddcb5->leave($__internal_f8947641fad2a3074ac73d4b1963383810fe19627922f5c79aa3d780ea4ddcb5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b4857839ccd1a71dcdeae36ecd9ba4a638498dc9b54660fbde1c4a47bcea0e55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4857839ccd1a71dcdeae36ecd9ba4a638498dc9b54660fbde1c4a47bcea0e55->enter($__internal_b4857839ccd1a71dcdeae36ecd9ba4a638498dc9b54660fbde1c4a47bcea0e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4e867263ef211de37a346ae2e302bd4e2784d5069e56bc83dfbf9509dd2e2c09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e867263ef211de37a346ae2e302bd4e2784d5069e56bc83dfbf9509dd2e2c09->enter($__internal_4e867263ef211de37a346ae2e302bd4e2784d5069e56bc83dfbf9509dd2e2c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4e867263ef211de37a346ae2e302bd4e2784d5069e56bc83dfbf9509dd2e2c09->leave($__internal_4e867263ef211de37a346ae2e302bd4e2784d5069e56bc83dfbf9509dd2e2c09_prof);

        
        $__internal_b4857839ccd1a71dcdeae36ecd9ba4a638498dc9b54660fbde1c4a47bcea0e55->leave($__internal_b4857839ccd1a71dcdeae36ecd9ba4a638498dc9b54660fbde1c4a47bcea0e55_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_181d66e21e881b3e0b3583d52be970bba4ef1d3982cd5c7f24a985eca4da50cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_181d66e21e881b3e0b3583d52be970bba4ef1d3982cd5c7f24a985eca4da50cb->enter($__internal_181d66e21e881b3e0b3583d52be970bba4ef1d3982cd5c7f24a985eca4da50cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c4bf7a27631cdd0f516a917f31e8056697c79fa4bd157473f54e3134e5d23941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4bf7a27631cdd0f516a917f31e8056697c79fa4bd157473f54e3134e5d23941->enter($__internal_c4bf7a27631cdd0f516a917f31e8056697c79fa4bd157473f54e3134e5d23941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c4bf7a27631cdd0f516a917f31e8056697c79fa4bd157473f54e3134e5d23941->leave($__internal_c4bf7a27631cdd0f516a917f31e8056697c79fa4bd157473f54e3134e5d23941_prof);

        
        $__internal_181d66e21e881b3e0b3583d52be970bba4ef1d3982cd5c7f24a985eca4da50cb->leave($__internal_181d66e21e881b3e0b3583d52be970bba4ef1d3982cd5c7f24a985eca4da50cb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
