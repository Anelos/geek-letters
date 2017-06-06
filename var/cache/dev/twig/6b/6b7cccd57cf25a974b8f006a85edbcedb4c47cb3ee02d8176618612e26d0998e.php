<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_cf9055c7967976c03235e395f5388f9230bd28ed36a039c697f43dc608bb2f2d extends Twig_Template
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
        $__internal_5c30ae446ff1aad7619e22327d1c0fa604772b2a48719cd3f76b2476e705798d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c30ae446ff1aad7619e22327d1c0fa604772b2a48719cd3f76b2476e705798d->enter($__internal_5c30ae446ff1aad7619e22327d1c0fa604772b2a48719cd3f76b2476e705798d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_433774da69b97ed6a4a6828160722fd6ed7b3007c9b3639cf00e458a59c67284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_433774da69b97ed6a4a6828160722fd6ed7b3007c9b3639cf00e458a59c67284->enter($__internal_433774da69b97ed6a4a6828160722fd6ed7b3007c9b3639cf00e458a59c67284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c30ae446ff1aad7619e22327d1c0fa604772b2a48719cd3f76b2476e705798d->leave($__internal_5c30ae446ff1aad7619e22327d1c0fa604772b2a48719cd3f76b2476e705798d_prof);

        
        $__internal_433774da69b97ed6a4a6828160722fd6ed7b3007c9b3639cf00e458a59c67284->leave($__internal_433774da69b97ed6a4a6828160722fd6ed7b3007c9b3639cf00e458a59c67284_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8da66ee40c1ab2329b064f36dfe7b6d05ffe4e84bd50e5cffb7b562a42181661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8da66ee40c1ab2329b064f36dfe7b6d05ffe4e84bd50e5cffb7b562a42181661->enter($__internal_8da66ee40c1ab2329b064f36dfe7b6d05ffe4e84bd50e5cffb7b562a42181661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1daa93a02c9d5c7b9246e7aae591d9d4ea60919526d3f3833fd0f8481d17f809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1daa93a02c9d5c7b9246e7aae591d9d4ea60919526d3f3833fd0f8481d17f809->enter($__internal_1daa93a02c9d5c7b9246e7aae591d9d4ea60919526d3f3833fd0f8481d17f809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1daa93a02c9d5c7b9246e7aae591d9d4ea60919526d3f3833fd0f8481d17f809->leave($__internal_1daa93a02c9d5c7b9246e7aae591d9d4ea60919526d3f3833fd0f8481d17f809_prof);

        
        $__internal_8da66ee40c1ab2329b064f36dfe7b6d05ffe4e84bd50e5cffb7b562a42181661->leave($__internal_8da66ee40c1ab2329b064f36dfe7b6d05ffe4e84bd50e5cffb7b562a42181661_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1fd775feefecfca94e672b082ba1dc214663e2e7845508732afe05a93d60dfe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fd775feefecfca94e672b082ba1dc214663e2e7845508732afe05a93d60dfe1->enter($__internal_1fd775feefecfca94e672b082ba1dc214663e2e7845508732afe05a93d60dfe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1e0f0b9b7d8826a603eba3495830b6dead1a31555095c473e222fea60ff2c455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e0f0b9b7d8826a603eba3495830b6dead1a31555095c473e222fea60ff2c455->enter($__internal_1e0f0b9b7d8826a603eba3495830b6dead1a31555095c473e222fea60ff2c455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1e0f0b9b7d8826a603eba3495830b6dead1a31555095c473e222fea60ff2c455->leave($__internal_1e0f0b9b7d8826a603eba3495830b6dead1a31555095c473e222fea60ff2c455_prof);

        
        $__internal_1fd775feefecfca94e672b082ba1dc214663e2e7845508732afe05a93d60dfe1->leave($__internal_1fd775feefecfca94e672b082ba1dc214663e2e7845508732afe05a93d60dfe1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b769c67219f634a30ba66b1590892374349375d8278810d7e6ad7d6af161d222 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b769c67219f634a30ba66b1590892374349375d8278810d7e6ad7d6af161d222->enter($__internal_b769c67219f634a30ba66b1590892374349375d8278810d7e6ad7d6af161d222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_14539413c76d8e2cf6cf85f1d74da0246e782690d758085d91944bd573d3951c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14539413c76d8e2cf6cf85f1d74da0246e782690d758085d91944bd573d3951c->enter($__internal_14539413c76d8e2cf6cf85f1d74da0246e782690d758085d91944bd573d3951c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_14539413c76d8e2cf6cf85f1d74da0246e782690d758085d91944bd573d3951c->leave($__internal_14539413c76d8e2cf6cf85f1d74da0246e782690d758085d91944bd573d3951c_prof);

        
        $__internal_b769c67219f634a30ba66b1590892374349375d8278810d7e6ad7d6af161d222->leave($__internal_b769c67219f634a30ba66b1590892374349375d8278810d7e6ad7d6af161d222_prof);

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
