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
        $__internal_3b4a486e7639401ea03dcc71361f799083989c538b066be80042bb58524a19d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b4a486e7639401ea03dcc71361f799083989c538b066be80042bb58524a19d4->enter($__internal_3b4a486e7639401ea03dcc71361f799083989c538b066be80042bb58524a19d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_ddb7f6fa008f63c6cb7e3fedcb4aa974a47ec3cee0ad77b78e76672ad85d0679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddb7f6fa008f63c6cb7e3fedcb4aa974a47ec3cee0ad77b78e76672ad85d0679->enter($__internal_ddb7f6fa008f63c6cb7e3fedcb4aa974a47ec3cee0ad77b78e76672ad85d0679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b4a486e7639401ea03dcc71361f799083989c538b066be80042bb58524a19d4->leave($__internal_3b4a486e7639401ea03dcc71361f799083989c538b066be80042bb58524a19d4_prof);

        
        $__internal_ddb7f6fa008f63c6cb7e3fedcb4aa974a47ec3cee0ad77b78e76672ad85d0679->leave($__internal_ddb7f6fa008f63c6cb7e3fedcb4aa974a47ec3cee0ad77b78e76672ad85d0679_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d92f718cfe3ff4b96d90d808d7f4b5b6728f9dba542b97144d9aab584b34f75f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d92f718cfe3ff4b96d90d808d7f4b5b6728f9dba542b97144d9aab584b34f75f->enter($__internal_d92f718cfe3ff4b96d90d808d7f4b5b6728f9dba542b97144d9aab584b34f75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e47e988b35a717c2f1938e50cdf0d96d1fce461abef073d017f999d30d974371 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e47e988b35a717c2f1938e50cdf0d96d1fce461abef073d017f999d30d974371->enter($__internal_e47e988b35a717c2f1938e50cdf0d96d1fce461abef073d017f999d30d974371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e47e988b35a717c2f1938e50cdf0d96d1fce461abef073d017f999d30d974371->leave($__internal_e47e988b35a717c2f1938e50cdf0d96d1fce461abef073d017f999d30d974371_prof);

        
        $__internal_d92f718cfe3ff4b96d90d808d7f4b5b6728f9dba542b97144d9aab584b34f75f->leave($__internal_d92f718cfe3ff4b96d90d808d7f4b5b6728f9dba542b97144d9aab584b34f75f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e672dfa8c3e7905b8ca90161702bad07bdc60c3e77922ad42bb2e8d0adb33268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e672dfa8c3e7905b8ca90161702bad07bdc60c3e77922ad42bb2e8d0adb33268->enter($__internal_e672dfa8c3e7905b8ca90161702bad07bdc60c3e77922ad42bb2e8d0adb33268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_aef2fd2894d2093bc54e218e35de99bd1c8d6fbb11268ea94efd1bc1a88e1d8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aef2fd2894d2093bc54e218e35de99bd1c8d6fbb11268ea94efd1bc1a88e1d8b->enter($__internal_aef2fd2894d2093bc54e218e35de99bd1c8d6fbb11268ea94efd1bc1a88e1d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_aef2fd2894d2093bc54e218e35de99bd1c8d6fbb11268ea94efd1bc1a88e1d8b->leave($__internal_aef2fd2894d2093bc54e218e35de99bd1c8d6fbb11268ea94efd1bc1a88e1d8b_prof);

        
        $__internal_e672dfa8c3e7905b8ca90161702bad07bdc60c3e77922ad42bb2e8d0adb33268->leave($__internal_e672dfa8c3e7905b8ca90161702bad07bdc60c3e77922ad42bb2e8d0adb33268_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_acfd5ca1e18372f721d661009d4f62b3c970290d6c05cc05cbf45d012bf66b10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acfd5ca1e18372f721d661009d4f62b3c970290d6c05cc05cbf45d012bf66b10->enter($__internal_acfd5ca1e18372f721d661009d4f62b3c970290d6c05cc05cbf45d012bf66b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ca9fb5c20132df0533b63ca4af1a44434c1666621934e437e29a66c3babe7b5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca9fb5c20132df0533b63ca4af1a44434c1666621934e437e29a66c3babe7b5a->enter($__internal_ca9fb5c20132df0533b63ca4af1a44434c1666621934e437e29a66c3babe7b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ca9fb5c20132df0533b63ca4af1a44434c1666621934e437e29a66c3babe7b5a->leave($__internal_ca9fb5c20132df0533b63ca4af1a44434c1666621934e437e29a66c3babe7b5a_prof);

        
        $__internal_acfd5ca1e18372f721d661009d4f62b3c970290d6c05cc05cbf45d012bf66b10->leave($__internal_acfd5ca1e18372f721d661009d4f62b3c970290d6c05cc05cbf45d012bf66b10_prof);

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
