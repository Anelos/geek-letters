<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_b3271d29682b2ae14e556716415a1d8a2c5b06e73d397cae69ce573a2b3eca05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_2386cc783ece1e47a9fd7bf741a5b2c54f79c2e3903d11ed2b071c2b2f96db42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2386cc783ece1e47a9fd7bf741a5b2c54f79c2e3903d11ed2b071c2b2f96db42->enter($__internal_2386cc783ece1e47a9fd7bf741a5b2c54f79c2e3903d11ed2b071c2b2f96db42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_952450c87760669e56e9650966aa5d1c9b12358f47e90771eb74f20267dc0960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_952450c87760669e56e9650966aa5d1c9b12358f47e90771eb74f20267dc0960->enter($__internal_952450c87760669e56e9650966aa5d1c9b12358f47e90771eb74f20267dc0960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2386cc783ece1e47a9fd7bf741a5b2c54f79c2e3903d11ed2b071c2b2f96db42->leave($__internal_2386cc783ece1e47a9fd7bf741a5b2c54f79c2e3903d11ed2b071c2b2f96db42_prof);

        
        $__internal_952450c87760669e56e9650966aa5d1c9b12358f47e90771eb74f20267dc0960->leave($__internal_952450c87760669e56e9650966aa5d1c9b12358f47e90771eb74f20267dc0960_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4f09689f41ed35dc24dcc08df04c5e203edf175124f232de711cc7ad7f8c7254 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f09689f41ed35dc24dcc08df04c5e203edf175124f232de711cc7ad7f8c7254->enter($__internal_4f09689f41ed35dc24dcc08df04c5e203edf175124f232de711cc7ad7f8c7254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2a009d935b04ea058e341cdcb450ccdbf6b3ae5412856e4f3bc854426829a588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a009d935b04ea058e341cdcb450ccdbf6b3ae5412856e4f3bc854426829a588->enter($__internal_2a009d935b04ea058e341cdcb450ccdbf6b3ae5412856e4f3bc854426829a588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_2a009d935b04ea058e341cdcb450ccdbf6b3ae5412856e4f3bc854426829a588->leave($__internal_2a009d935b04ea058e341cdcb450ccdbf6b3ae5412856e4f3bc854426829a588_prof);

        
        $__internal_4f09689f41ed35dc24dcc08df04c5e203edf175124f232de711cc7ad7f8c7254->leave($__internal_4f09689f41ed35dc24dcc08df04c5e203edf175124f232de711cc7ad7f8c7254_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f1a995c3d740e16c54e907f630cf7e4e364e81ffcc60971cb27a0c814c098426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1a995c3d740e16c54e907f630cf7e4e364e81ffcc60971cb27a0c814c098426->enter($__internal_f1a995c3d740e16c54e907f630cf7e4e364e81ffcc60971cb27a0c814c098426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_97d56e285817a48db725df72a4c617af9d6ca155190c8d73fce8f0be2dbead13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97d56e285817a48db725df72a4c617af9d6ca155190c8d73fce8f0be2dbead13->enter($__internal_97d56e285817a48db725df72a4c617af9d6ca155190c8d73fce8f0be2dbead13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_97d56e285817a48db725df72a4c617af9d6ca155190c8d73fce8f0be2dbead13->leave($__internal_97d56e285817a48db725df72a4c617af9d6ca155190c8d73fce8f0be2dbead13_prof);

        
        $__internal_f1a995c3d740e16c54e907f630cf7e4e364e81ffcc60971cb27a0c814c098426->leave($__internal_f1a995c3d740e16c54e907f630cf7e4e364e81ffcc60971cb27a0c814c098426_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_740e7acbec9671344a61dacb3da1592384f17aa6ef1c4371ac083a8cc0890409 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_740e7acbec9671344a61dacb3da1592384f17aa6ef1c4371ac083a8cc0890409->enter($__internal_740e7acbec9671344a61dacb3da1592384f17aa6ef1c4371ac083a8cc0890409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_77042e27c0e20a2f5ad2062426a80818407e11ef2832503125e10ec7d2634bad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77042e27c0e20a2f5ad2062426a80818407e11ef2832503125e10ec7d2634bad->enter($__internal_77042e27c0e20a2f5ad2062426a80818407e11ef2832503125e10ec7d2634bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_77042e27c0e20a2f5ad2062426a80818407e11ef2832503125e10ec7d2634bad->leave($__internal_77042e27c0e20a2f5ad2062426a80818407e11ef2832503125e10ec7d2634bad_prof);

        
        $__internal_740e7acbec9671344a61dacb3da1592384f17aa6ef1c4371ac083a8cc0890409->leave($__internal_740e7acbec9671344a61dacb3da1592384f17aa6ef1c4371ac083a8cc0890409_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
