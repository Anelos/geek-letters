<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_b3271d29682b2ae14e556716415a1d8a2c5b06e73d397cae69ce573a2b3eca05 extends Twig_Template
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
        $__internal_5b87e0bcd14749100cade4ea092316f845ac965661ee7c81df9fde1ecdc25454 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b87e0bcd14749100cade4ea092316f845ac965661ee7c81df9fde1ecdc25454->enter($__internal_5b87e0bcd14749100cade4ea092316f845ac965661ee7c81df9fde1ecdc25454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_30e53167053c2ed0a3189d343ab6c97721defd8d7cef3a2d8eacc0d084f8f929 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30e53167053c2ed0a3189d343ab6c97721defd8d7cef3a2d8eacc0d084f8f929->enter($__internal_30e53167053c2ed0a3189d343ab6c97721defd8d7cef3a2d8eacc0d084f8f929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b87e0bcd14749100cade4ea092316f845ac965661ee7c81df9fde1ecdc25454->leave($__internal_5b87e0bcd14749100cade4ea092316f845ac965661ee7c81df9fde1ecdc25454_prof);

        
        $__internal_30e53167053c2ed0a3189d343ab6c97721defd8d7cef3a2d8eacc0d084f8f929->leave($__internal_30e53167053c2ed0a3189d343ab6c97721defd8d7cef3a2d8eacc0d084f8f929_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_67de0a5f55c75e9947261ba04c831d855f8819a93d31e56af7a91e28820fb726 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67de0a5f55c75e9947261ba04c831d855f8819a93d31e56af7a91e28820fb726->enter($__internal_67de0a5f55c75e9947261ba04c831d855f8819a93d31e56af7a91e28820fb726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_09497ea851ea17c2a53b14d95a6ef0bd1d7ce026a836e82ddf300a577ee862a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09497ea851ea17c2a53b14d95a6ef0bd1d7ce026a836e82ddf300a577ee862a2->enter($__internal_09497ea851ea17c2a53b14d95a6ef0bd1d7ce026a836e82ddf300a577ee862a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_09497ea851ea17c2a53b14d95a6ef0bd1d7ce026a836e82ddf300a577ee862a2->leave($__internal_09497ea851ea17c2a53b14d95a6ef0bd1d7ce026a836e82ddf300a577ee862a2_prof);

        
        $__internal_67de0a5f55c75e9947261ba04c831d855f8819a93d31e56af7a91e28820fb726->leave($__internal_67de0a5f55c75e9947261ba04c831d855f8819a93d31e56af7a91e28820fb726_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c89c2fdc86d64972c74a9c7ac79b792a7ff484af49b85d38d4cc43d9e71bced7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c89c2fdc86d64972c74a9c7ac79b792a7ff484af49b85d38d4cc43d9e71bced7->enter($__internal_c89c2fdc86d64972c74a9c7ac79b792a7ff484af49b85d38d4cc43d9e71bced7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a1710c8fff2f914e3790168c6ded403388e26aef25e55ac09b20fcdfc0387e2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1710c8fff2f914e3790168c6ded403388e26aef25e55ac09b20fcdfc0387e2d->enter($__internal_a1710c8fff2f914e3790168c6ded403388e26aef25e55ac09b20fcdfc0387e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a1710c8fff2f914e3790168c6ded403388e26aef25e55ac09b20fcdfc0387e2d->leave($__internal_a1710c8fff2f914e3790168c6ded403388e26aef25e55ac09b20fcdfc0387e2d_prof);

        
        $__internal_c89c2fdc86d64972c74a9c7ac79b792a7ff484af49b85d38d4cc43d9e71bced7->leave($__internal_c89c2fdc86d64972c74a9c7ac79b792a7ff484af49b85d38d4cc43d9e71bced7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b8a13b3b365cf7887b65f0df1db3f6f71ddd6c556afa0d1970d001e3f04f849a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8a13b3b365cf7887b65f0df1db3f6f71ddd6c556afa0d1970d001e3f04f849a->enter($__internal_b8a13b3b365cf7887b65f0df1db3f6f71ddd6c556afa0d1970d001e3f04f849a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f282dcd306a21289583915267435a124d963a4b16b261d908fc4c9803628adc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f282dcd306a21289583915267435a124d963a4b16b261d908fc4c9803628adc2->enter($__internal_f282dcd306a21289583915267435a124d963a4b16b261d908fc4c9803628adc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f282dcd306a21289583915267435a124d963a4b16b261d908fc4c9803628adc2->leave($__internal_f282dcd306a21289583915267435a124d963a4b16b261d908fc4c9803628adc2_prof);

        
        $__internal_b8a13b3b365cf7887b65f0df1db3f6f71ddd6c556afa0d1970d001e3f04f849a->leave($__internal_b8a13b3b365cf7887b65f0df1db3f6f71ddd6c556afa0d1970d001e3f04f849a_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
