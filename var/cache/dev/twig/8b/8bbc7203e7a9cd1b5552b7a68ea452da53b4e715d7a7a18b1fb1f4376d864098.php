<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_482eb11824ea61c3ddff2de8166d0cf0e087d9d1959c7f5e740c9fa096a07a84 extends Twig_Template
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
        $__internal_1ee9090c60bd9c880a37e575234a6f06642f3985de04a98f609ffd1877c52804 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ee9090c60bd9c880a37e575234a6f06642f3985de04a98f609ffd1877c52804->enter($__internal_1ee9090c60bd9c880a37e575234a6f06642f3985de04a98f609ffd1877c52804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_50cbc5c494710d2c32b3901fa197b46500394f07169b39a33db07327c2d78a60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50cbc5c494710d2c32b3901fa197b46500394f07169b39a33db07327c2d78a60->enter($__internal_50cbc5c494710d2c32b3901fa197b46500394f07169b39a33db07327c2d78a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ee9090c60bd9c880a37e575234a6f06642f3985de04a98f609ffd1877c52804->leave($__internal_1ee9090c60bd9c880a37e575234a6f06642f3985de04a98f609ffd1877c52804_prof);

        
        $__internal_50cbc5c494710d2c32b3901fa197b46500394f07169b39a33db07327c2d78a60->leave($__internal_50cbc5c494710d2c32b3901fa197b46500394f07169b39a33db07327c2d78a60_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f33efb288453f5038a5de5788065245c5c665b8fe904d9d44415c9631945c653 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f33efb288453f5038a5de5788065245c5c665b8fe904d9d44415c9631945c653->enter($__internal_f33efb288453f5038a5de5788065245c5c665b8fe904d9d44415c9631945c653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0f0ea0573f6c8d7dfc1ce69b620a852cd46748f8c72cc6a9a066a2f105e1ff93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f0ea0573f6c8d7dfc1ce69b620a852cd46748f8c72cc6a9a066a2f105e1ff93->enter($__internal_0f0ea0573f6c8d7dfc1ce69b620a852cd46748f8c72cc6a9a066a2f105e1ff93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0f0ea0573f6c8d7dfc1ce69b620a852cd46748f8c72cc6a9a066a2f105e1ff93->leave($__internal_0f0ea0573f6c8d7dfc1ce69b620a852cd46748f8c72cc6a9a066a2f105e1ff93_prof);

        
        $__internal_f33efb288453f5038a5de5788065245c5c665b8fe904d9d44415c9631945c653->leave($__internal_f33efb288453f5038a5de5788065245c5c665b8fe904d9d44415c9631945c653_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_47f2310b13ae06c28bd18571fbbe480fb13dcd5c7dc16c96bd7c881eb4c8727c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47f2310b13ae06c28bd18571fbbe480fb13dcd5c7dc16c96bd7c881eb4c8727c->enter($__internal_47f2310b13ae06c28bd18571fbbe480fb13dcd5c7dc16c96bd7c881eb4c8727c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9c2a1dd714685cb3e73828f0beea5daa588ed779b68e2e0130f3d600f1d4af43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c2a1dd714685cb3e73828f0beea5daa588ed779b68e2e0130f3d600f1d4af43->enter($__internal_9c2a1dd714685cb3e73828f0beea5daa588ed779b68e2e0130f3d600f1d4af43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_9c2a1dd714685cb3e73828f0beea5daa588ed779b68e2e0130f3d600f1d4af43->leave($__internal_9c2a1dd714685cb3e73828f0beea5daa588ed779b68e2e0130f3d600f1d4af43_prof);

        
        $__internal_47f2310b13ae06c28bd18571fbbe480fb13dcd5c7dc16c96bd7c881eb4c8727c->leave($__internal_47f2310b13ae06c28bd18571fbbe480fb13dcd5c7dc16c96bd7c881eb4c8727c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1771cf5b2f76a5a8ab3f22fcf5fedfec2cea2f5474daeae3203e90406af72f65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1771cf5b2f76a5a8ab3f22fcf5fedfec2cea2f5474daeae3203e90406af72f65->enter($__internal_1771cf5b2f76a5a8ab3f22fcf5fedfec2cea2f5474daeae3203e90406af72f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_452a0621eff13ff4b3dbf85893dd55d51d454c1aff5bbf0de52856395ed8c704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_452a0621eff13ff4b3dbf85893dd55d51d454c1aff5bbf0de52856395ed8c704->enter($__internal_452a0621eff13ff4b3dbf85893dd55d51d454c1aff5bbf0de52856395ed8c704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_452a0621eff13ff4b3dbf85893dd55d51d454c1aff5bbf0de52856395ed8c704->leave($__internal_452a0621eff13ff4b3dbf85893dd55d51d454c1aff5bbf0de52856395ed8c704_prof);

        
        $__internal_1771cf5b2f76a5a8ab3f22fcf5fedfec2cea2f5474daeae3203e90406af72f65->leave($__internal_1771cf5b2f76a5a8ab3f22fcf5fedfec2cea2f5474daeae3203e90406af72f65_prof);

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
