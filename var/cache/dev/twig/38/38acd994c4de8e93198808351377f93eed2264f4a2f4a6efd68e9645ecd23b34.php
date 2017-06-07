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
        $__internal_00e899757a0b81adff8feb79ac4b94211e24a5b4cdd9e6818c618a642c2b4980 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00e899757a0b81adff8feb79ac4b94211e24a5b4cdd9e6818c618a642c2b4980->enter($__internal_00e899757a0b81adff8feb79ac4b94211e24a5b4cdd9e6818c618a642c2b4980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_a3c8084b0f93f4742d0dd7ca1b23f0dc44d5f6832873ef0f28c285bd081dd704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c8084b0f93f4742d0dd7ca1b23f0dc44d5f6832873ef0f28c285bd081dd704->enter($__internal_a3c8084b0f93f4742d0dd7ca1b23f0dc44d5f6832873ef0f28c285bd081dd704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00e899757a0b81adff8feb79ac4b94211e24a5b4cdd9e6818c618a642c2b4980->leave($__internal_00e899757a0b81adff8feb79ac4b94211e24a5b4cdd9e6818c618a642c2b4980_prof);

        
        $__internal_a3c8084b0f93f4742d0dd7ca1b23f0dc44d5f6832873ef0f28c285bd081dd704->leave($__internal_a3c8084b0f93f4742d0dd7ca1b23f0dc44d5f6832873ef0f28c285bd081dd704_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9f44ee70f9a7019c12c3ffac1194ebf37cb0bbda53b14be3d276eb8f1bfee3c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f44ee70f9a7019c12c3ffac1194ebf37cb0bbda53b14be3d276eb8f1bfee3c9->enter($__internal_9f44ee70f9a7019c12c3ffac1194ebf37cb0bbda53b14be3d276eb8f1bfee3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9241776ce28fa14500bd7adaa6b84107a24c093967dcbe65266ebf462fd692b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9241776ce28fa14500bd7adaa6b84107a24c093967dcbe65266ebf462fd692b7->enter($__internal_9241776ce28fa14500bd7adaa6b84107a24c093967dcbe65266ebf462fd692b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9241776ce28fa14500bd7adaa6b84107a24c093967dcbe65266ebf462fd692b7->leave($__internal_9241776ce28fa14500bd7adaa6b84107a24c093967dcbe65266ebf462fd692b7_prof);

        
        $__internal_9f44ee70f9a7019c12c3ffac1194ebf37cb0bbda53b14be3d276eb8f1bfee3c9->leave($__internal_9f44ee70f9a7019c12c3ffac1194ebf37cb0bbda53b14be3d276eb8f1bfee3c9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_783673c9a3649302b73add23b32199747f356de371878e5147eb275446748dc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_783673c9a3649302b73add23b32199747f356de371878e5147eb275446748dc0->enter($__internal_783673c9a3649302b73add23b32199747f356de371878e5147eb275446748dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6c4e4561f2a18b0f85b16486b7d4799b2450d470e9daba4b72547b057cf1b9a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c4e4561f2a18b0f85b16486b7d4799b2450d470e9daba4b72547b057cf1b9a1->enter($__internal_6c4e4561f2a18b0f85b16486b7d4799b2450d470e9daba4b72547b057cf1b9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_6c4e4561f2a18b0f85b16486b7d4799b2450d470e9daba4b72547b057cf1b9a1->leave($__internal_6c4e4561f2a18b0f85b16486b7d4799b2450d470e9daba4b72547b057cf1b9a1_prof);

        
        $__internal_783673c9a3649302b73add23b32199747f356de371878e5147eb275446748dc0->leave($__internal_783673c9a3649302b73add23b32199747f356de371878e5147eb275446748dc0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8033a7fbc56e5ccdeb3c291303310f7cc5535e795f92b33f8e0e8e49d7155a4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8033a7fbc56e5ccdeb3c291303310f7cc5535e795f92b33f8e0e8e49d7155a4e->enter($__internal_8033a7fbc56e5ccdeb3c291303310f7cc5535e795f92b33f8e0e8e49d7155a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_60a493a1664a7e1fd416ad6207055fb05729cda8248407ed37b0f0973d5f275f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60a493a1664a7e1fd416ad6207055fb05729cda8248407ed37b0f0973d5f275f->enter($__internal_60a493a1664a7e1fd416ad6207055fb05729cda8248407ed37b0f0973d5f275f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_60a493a1664a7e1fd416ad6207055fb05729cda8248407ed37b0f0973d5f275f->leave($__internal_60a493a1664a7e1fd416ad6207055fb05729cda8248407ed37b0f0973d5f275f_prof);

        
        $__internal_8033a7fbc56e5ccdeb3c291303310f7cc5535e795f92b33f8e0e8e49d7155a4e->leave($__internal_8033a7fbc56e5ccdeb3c291303310f7cc5535e795f92b33f8e0e8e49d7155a4e_prof);

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
