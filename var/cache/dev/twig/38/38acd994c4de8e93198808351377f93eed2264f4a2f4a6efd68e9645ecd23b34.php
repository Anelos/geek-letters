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
        $__internal_345f77833a7ea6b481c64262757db5953236bc6f736c6a49fb2b74e973ce13e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_345f77833a7ea6b481c64262757db5953236bc6f736c6a49fb2b74e973ce13e8->enter($__internal_345f77833a7ea6b481c64262757db5953236bc6f736c6a49fb2b74e973ce13e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_92c3916444cf0514ffc8cd068b69dee1564c71385e6b79495d42ccfe52f92b99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92c3916444cf0514ffc8cd068b69dee1564c71385e6b79495d42ccfe52f92b99->enter($__internal_92c3916444cf0514ffc8cd068b69dee1564c71385e6b79495d42ccfe52f92b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_345f77833a7ea6b481c64262757db5953236bc6f736c6a49fb2b74e973ce13e8->leave($__internal_345f77833a7ea6b481c64262757db5953236bc6f736c6a49fb2b74e973ce13e8_prof);

        
        $__internal_92c3916444cf0514ffc8cd068b69dee1564c71385e6b79495d42ccfe52f92b99->leave($__internal_92c3916444cf0514ffc8cd068b69dee1564c71385e6b79495d42ccfe52f92b99_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2875d406c6d96e7aeae1bc045a8dd34b05d0a5de2986ddc3c1341cced477c8f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2875d406c6d96e7aeae1bc045a8dd34b05d0a5de2986ddc3c1341cced477c8f9->enter($__internal_2875d406c6d96e7aeae1bc045a8dd34b05d0a5de2986ddc3c1341cced477c8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_237cbf03b628d5a6b4ca99c460cc20bf6cb29543058da7e5558cd4efc8a84bf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_237cbf03b628d5a6b4ca99c460cc20bf6cb29543058da7e5558cd4efc8a84bf6->enter($__internal_237cbf03b628d5a6b4ca99c460cc20bf6cb29543058da7e5558cd4efc8a84bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_237cbf03b628d5a6b4ca99c460cc20bf6cb29543058da7e5558cd4efc8a84bf6->leave($__internal_237cbf03b628d5a6b4ca99c460cc20bf6cb29543058da7e5558cd4efc8a84bf6_prof);

        
        $__internal_2875d406c6d96e7aeae1bc045a8dd34b05d0a5de2986ddc3c1341cced477c8f9->leave($__internal_2875d406c6d96e7aeae1bc045a8dd34b05d0a5de2986ddc3c1341cced477c8f9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0b5edb167215a05a5a84760823dbedd8538c76f776fdb454eba75f8ea99d70a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b5edb167215a05a5a84760823dbedd8538c76f776fdb454eba75f8ea99d70a8->enter($__internal_0b5edb167215a05a5a84760823dbedd8538c76f776fdb454eba75f8ea99d70a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_912f024f655bdee5034937c328afb01cf9f7fa0dc87f8a1856191d9180a7b29e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_912f024f655bdee5034937c328afb01cf9f7fa0dc87f8a1856191d9180a7b29e->enter($__internal_912f024f655bdee5034937c328afb01cf9f7fa0dc87f8a1856191d9180a7b29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_912f024f655bdee5034937c328afb01cf9f7fa0dc87f8a1856191d9180a7b29e->leave($__internal_912f024f655bdee5034937c328afb01cf9f7fa0dc87f8a1856191d9180a7b29e_prof);

        
        $__internal_0b5edb167215a05a5a84760823dbedd8538c76f776fdb454eba75f8ea99d70a8->leave($__internal_0b5edb167215a05a5a84760823dbedd8538c76f776fdb454eba75f8ea99d70a8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c330ab3bfd889be82569419af7f8b01f6d74b68770b1a0bc2a02099555ece1aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c330ab3bfd889be82569419af7f8b01f6d74b68770b1a0bc2a02099555ece1aa->enter($__internal_c330ab3bfd889be82569419af7f8b01f6d74b68770b1a0bc2a02099555ece1aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3cc0bd23ea5359bf936ec7ec55b4076f8f2ce9d65f6d034d1e1a20397b7c1be3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cc0bd23ea5359bf936ec7ec55b4076f8f2ce9d65f6d034d1e1a20397b7c1be3->enter($__internal_3cc0bd23ea5359bf936ec7ec55b4076f8f2ce9d65f6d034d1e1a20397b7c1be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_3cc0bd23ea5359bf936ec7ec55b4076f8f2ce9d65f6d034d1e1a20397b7c1be3->leave($__internal_3cc0bd23ea5359bf936ec7ec55b4076f8f2ce9d65f6d034d1e1a20397b7c1be3_prof);

        
        $__internal_c330ab3bfd889be82569419af7f8b01f6d74b68770b1a0bc2a02099555ece1aa->leave($__internal_c330ab3bfd889be82569419af7f8b01f6d74b68770b1a0bc2a02099555ece1aa_prof);

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
