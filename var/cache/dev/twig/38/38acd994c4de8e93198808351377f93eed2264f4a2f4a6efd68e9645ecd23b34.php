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
        $__internal_c7614d704548eb648f8e1ca9395e4643cb445585d9ce2ec5945552239575fa37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7614d704548eb648f8e1ca9395e4643cb445585d9ce2ec5945552239575fa37->enter($__internal_c7614d704548eb648f8e1ca9395e4643cb445585d9ce2ec5945552239575fa37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_19f3bf546828d92c92a79df85687ff89be7bb42511e38079ff308dcab61c8c26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f3bf546828d92c92a79df85687ff89be7bb42511e38079ff308dcab61c8c26->enter($__internal_19f3bf546828d92c92a79df85687ff89be7bb42511e38079ff308dcab61c8c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7614d704548eb648f8e1ca9395e4643cb445585d9ce2ec5945552239575fa37->leave($__internal_c7614d704548eb648f8e1ca9395e4643cb445585d9ce2ec5945552239575fa37_prof);

        
        $__internal_19f3bf546828d92c92a79df85687ff89be7bb42511e38079ff308dcab61c8c26->leave($__internal_19f3bf546828d92c92a79df85687ff89be7bb42511e38079ff308dcab61c8c26_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_269de9b1f3041e072834f16ca2142e8547ccea8b736fea893b2734fee161135a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_269de9b1f3041e072834f16ca2142e8547ccea8b736fea893b2734fee161135a->enter($__internal_269de9b1f3041e072834f16ca2142e8547ccea8b736fea893b2734fee161135a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_30c240f0cf916abf08de56eda6c16f3b6423659f06449ec055027bc2396f1762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30c240f0cf916abf08de56eda6c16f3b6423659f06449ec055027bc2396f1762->enter($__internal_30c240f0cf916abf08de56eda6c16f3b6423659f06449ec055027bc2396f1762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_30c240f0cf916abf08de56eda6c16f3b6423659f06449ec055027bc2396f1762->leave($__internal_30c240f0cf916abf08de56eda6c16f3b6423659f06449ec055027bc2396f1762_prof);

        
        $__internal_269de9b1f3041e072834f16ca2142e8547ccea8b736fea893b2734fee161135a->leave($__internal_269de9b1f3041e072834f16ca2142e8547ccea8b736fea893b2734fee161135a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6abcc7f7a3e2764d9912e38812023dd922a28be4170f5f08c3ff575514b0ef71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6abcc7f7a3e2764d9912e38812023dd922a28be4170f5f08c3ff575514b0ef71->enter($__internal_6abcc7f7a3e2764d9912e38812023dd922a28be4170f5f08c3ff575514b0ef71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_00429c7cb4413c2e4deaa700b3642680f23c89b0063cf525a9da7bfa2b84d854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00429c7cb4413c2e4deaa700b3642680f23c89b0063cf525a9da7bfa2b84d854->enter($__internal_00429c7cb4413c2e4deaa700b3642680f23c89b0063cf525a9da7bfa2b84d854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_00429c7cb4413c2e4deaa700b3642680f23c89b0063cf525a9da7bfa2b84d854->leave($__internal_00429c7cb4413c2e4deaa700b3642680f23c89b0063cf525a9da7bfa2b84d854_prof);

        
        $__internal_6abcc7f7a3e2764d9912e38812023dd922a28be4170f5f08c3ff575514b0ef71->leave($__internal_6abcc7f7a3e2764d9912e38812023dd922a28be4170f5f08c3ff575514b0ef71_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6f283d06204d690b21dfc3cd2208a27d409e98353f882a92a67f8961677b85a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f283d06204d690b21dfc3cd2208a27d409e98353f882a92a67f8961677b85a2->enter($__internal_6f283d06204d690b21dfc3cd2208a27d409e98353f882a92a67f8961677b85a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2e8493685a2a9617f88d69702c120cd09e1277838ae89a8822aae350ea11ab29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e8493685a2a9617f88d69702c120cd09e1277838ae89a8822aae350ea11ab29->enter($__internal_2e8493685a2a9617f88d69702c120cd09e1277838ae89a8822aae350ea11ab29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_2e8493685a2a9617f88d69702c120cd09e1277838ae89a8822aae350ea11ab29->leave($__internal_2e8493685a2a9617f88d69702c120cd09e1277838ae89a8822aae350ea11ab29_prof);

        
        $__internal_6f283d06204d690b21dfc3cd2208a27d409e98353f882a92a67f8961677b85a2->leave($__internal_6f283d06204d690b21dfc3cd2208a27d409e98353f882a92a67f8961677b85a2_prof);

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
