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
        $__internal_a2febbde95dd945378eb00a4bb37a161f17bd6aaa2962b958843db57bf77082b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2febbde95dd945378eb00a4bb37a161f17bd6aaa2962b958843db57bf77082b->enter($__internal_a2febbde95dd945378eb00a4bb37a161f17bd6aaa2962b958843db57bf77082b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_7afcd4c87876756a94b21f1b9cbe067efb1d1b662a363adab6183035c9bab58c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7afcd4c87876756a94b21f1b9cbe067efb1d1b662a363adab6183035c9bab58c->enter($__internal_7afcd4c87876756a94b21f1b9cbe067efb1d1b662a363adab6183035c9bab58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2febbde95dd945378eb00a4bb37a161f17bd6aaa2962b958843db57bf77082b->leave($__internal_a2febbde95dd945378eb00a4bb37a161f17bd6aaa2962b958843db57bf77082b_prof);

        
        $__internal_7afcd4c87876756a94b21f1b9cbe067efb1d1b662a363adab6183035c9bab58c->leave($__internal_7afcd4c87876756a94b21f1b9cbe067efb1d1b662a363adab6183035c9bab58c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5bdc71dd04df8ce26fdb01fc3ff1002ddcf551ea5edcac7e74dc0b92e0260350 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bdc71dd04df8ce26fdb01fc3ff1002ddcf551ea5edcac7e74dc0b92e0260350->enter($__internal_5bdc71dd04df8ce26fdb01fc3ff1002ddcf551ea5edcac7e74dc0b92e0260350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3a9db8e618c48ad917c63b5f90a2dd186ab9013073041bde36758c898ad29589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a9db8e618c48ad917c63b5f90a2dd186ab9013073041bde36758c898ad29589->enter($__internal_3a9db8e618c48ad917c63b5f90a2dd186ab9013073041bde36758c898ad29589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3a9db8e618c48ad917c63b5f90a2dd186ab9013073041bde36758c898ad29589->leave($__internal_3a9db8e618c48ad917c63b5f90a2dd186ab9013073041bde36758c898ad29589_prof);

        
        $__internal_5bdc71dd04df8ce26fdb01fc3ff1002ddcf551ea5edcac7e74dc0b92e0260350->leave($__internal_5bdc71dd04df8ce26fdb01fc3ff1002ddcf551ea5edcac7e74dc0b92e0260350_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_96d1a35b2518c1043558a8642cc7385aaff48b1aa87d288c2bdb9be0aa2014ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96d1a35b2518c1043558a8642cc7385aaff48b1aa87d288c2bdb9be0aa2014ff->enter($__internal_96d1a35b2518c1043558a8642cc7385aaff48b1aa87d288c2bdb9be0aa2014ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5c9182e1ae6426a340bbb4a852f35e5e628669958981db4ecad83cd006297e2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c9182e1ae6426a340bbb4a852f35e5e628669958981db4ecad83cd006297e2f->enter($__internal_5c9182e1ae6426a340bbb4a852f35e5e628669958981db4ecad83cd006297e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_5c9182e1ae6426a340bbb4a852f35e5e628669958981db4ecad83cd006297e2f->leave($__internal_5c9182e1ae6426a340bbb4a852f35e5e628669958981db4ecad83cd006297e2f_prof);

        
        $__internal_96d1a35b2518c1043558a8642cc7385aaff48b1aa87d288c2bdb9be0aa2014ff->leave($__internal_96d1a35b2518c1043558a8642cc7385aaff48b1aa87d288c2bdb9be0aa2014ff_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b2f52fde4f0ac955a8ea17b09f4f496b30964fa22a5e0d7464fc12434f026ae0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2f52fde4f0ac955a8ea17b09f4f496b30964fa22a5e0d7464fc12434f026ae0->enter($__internal_b2f52fde4f0ac955a8ea17b09f4f496b30964fa22a5e0d7464fc12434f026ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0f6e19ae224a285ce12d37d79202561a73ef64fa218639f65be4a3e6a358fc0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f6e19ae224a285ce12d37d79202561a73ef64fa218639f65be4a3e6a358fc0f->enter($__internal_0f6e19ae224a285ce12d37d79202561a73ef64fa218639f65be4a3e6a358fc0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_0f6e19ae224a285ce12d37d79202561a73ef64fa218639f65be4a3e6a358fc0f->leave($__internal_0f6e19ae224a285ce12d37d79202561a73ef64fa218639f65be4a3e6a358fc0f_prof);

        
        $__internal_b2f52fde4f0ac955a8ea17b09f4f496b30964fa22a5e0d7464fc12434f026ae0->leave($__internal_b2f52fde4f0ac955a8ea17b09f4f496b30964fa22a5e0d7464fc12434f026ae0_prof);

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
