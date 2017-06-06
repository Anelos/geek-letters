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
        $__internal_c8bfa2f21d7482e1c445bb39c1c70913188491b744163952a6de1c0ee1a44a0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8bfa2f21d7482e1c445bb39c1c70913188491b744163952a6de1c0ee1a44a0a->enter($__internal_c8bfa2f21d7482e1c445bb39c1c70913188491b744163952a6de1c0ee1a44a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_c2bc9c9e7b37e5d2a5cbc86142803b2d89c2fe0a697d1a1e1c3683fb09f0fbfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2bc9c9e7b37e5d2a5cbc86142803b2d89c2fe0a697d1a1e1c3683fb09f0fbfa->enter($__internal_c2bc9c9e7b37e5d2a5cbc86142803b2d89c2fe0a697d1a1e1c3683fb09f0fbfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8bfa2f21d7482e1c445bb39c1c70913188491b744163952a6de1c0ee1a44a0a->leave($__internal_c8bfa2f21d7482e1c445bb39c1c70913188491b744163952a6de1c0ee1a44a0a_prof);

        
        $__internal_c2bc9c9e7b37e5d2a5cbc86142803b2d89c2fe0a697d1a1e1c3683fb09f0fbfa->leave($__internal_c2bc9c9e7b37e5d2a5cbc86142803b2d89c2fe0a697d1a1e1c3683fb09f0fbfa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b6aa5bb0b21c97b3c57b7395436824bfc91c81e1ff87661ec88eee542892fbce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6aa5bb0b21c97b3c57b7395436824bfc91c81e1ff87661ec88eee542892fbce->enter($__internal_b6aa5bb0b21c97b3c57b7395436824bfc91c81e1ff87661ec88eee542892fbce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f66d5d8bb9346516cba51ff4049c733f40afdbbcf04622b30c72b77355eecedc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f66d5d8bb9346516cba51ff4049c733f40afdbbcf04622b30c72b77355eecedc->enter($__internal_f66d5d8bb9346516cba51ff4049c733f40afdbbcf04622b30c72b77355eecedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f66d5d8bb9346516cba51ff4049c733f40afdbbcf04622b30c72b77355eecedc->leave($__internal_f66d5d8bb9346516cba51ff4049c733f40afdbbcf04622b30c72b77355eecedc_prof);

        
        $__internal_b6aa5bb0b21c97b3c57b7395436824bfc91c81e1ff87661ec88eee542892fbce->leave($__internal_b6aa5bb0b21c97b3c57b7395436824bfc91c81e1ff87661ec88eee542892fbce_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_307dfe4f6930b24140e6b4ba6b9438e874b5aa263cd61cf2b8f9b48b884e9c89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_307dfe4f6930b24140e6b4ba6b9438e874b5aa263cd61cf2b8f9b48b884e9c89->enter($__internal_307dfe4f6930b24140e6b4ba6b9438e874b5aa263cd61cf2b8f9b48b884e9c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ecc1d035fe781127d0dbd486c2581b18f653cd5434a914364d9f0e922ebd8209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecc1d035fe781127d0dbd486c2581b18f653cd5434a914364d9f0e922ebd8209->enter($__internal_ecc1d035fe781127d0dbd486c2581b18f653cd5434a914364d9f0e922ebd8209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ecc1d035fe781127d0dbd486c2581b18f653cd5434a914364d9f0e922ebd8209->leave($__internal_ecc1d035fe781127d0dbd486c2581b18f653cd5434a914364d9f0e922ebd8209_prof);

        
        $__internal_307dfe4f6930b24140e6b4ba6b9438e874b5aa263cd61cf2b8f9b48b884e9c89->leave($__internal_307dfe4f6930b24140e6b4ba6b9438e874b5aa263cd61cf2b8f9b48b884e9c89_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7b32b983f73761f27b9f4e3517e321e2eee5efb012c27a4efbbe6acfdba96c18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b32b983f73761f27b9f4e3517e321e2eee5efb012c27a4efbbe6acfdba96c18->enter($__internal_7b32b983f73761f27b9f4e3517e321e2eee5efb012c27a4efbbe6acfdba96c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9c7288fb9acfb2e8236f9ca290a306ffdd58c44283efe8cde20c59507368a282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c7288fb9acfb2e8236f9ca290a306ffdd58c44283efe8cde20c59507368a282->enter($__internal_9c7288fb9acfb2e8236f9ca290a306ffdd58c44283efe8cde20c59507368a282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9c7288fb9acfb2e8236f9ca290a306ffdd58c44283efe8cde20c59507368a282->leave($__internal_9c7288fb9acfb2e8236f9ca290a306ffdd58c44283efe8cde20c59507368a282_prof);

        
        $__internal_7b32b983f73761f27b9f4e3517e321e2eee5efb012c27a4efbbe6acfdba96c18->leave($__internal_7b32b983f73761f27b9f4e3517e321e2eee5efb012c27a4efbbe6acfdba96c18_prof);

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
