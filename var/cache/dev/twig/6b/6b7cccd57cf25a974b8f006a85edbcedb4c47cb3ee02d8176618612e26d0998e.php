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
        $__internal_0131c0c96764217b03b2d369554f5081bc7af5f8861d4a343e15e0943e9b6788 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0131c0c96764217b03b2d369554f5081bc7af5f8861d4a343e15e0943e9b6788->enter($__internal_0131c0c96764217b03b2d369554f5081bc7af5f8861d4a343e15e0943e9b6788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_26f501d90424fde166a381c9b63a1ff64d41fd5fc6e18dd8c04e701725d8ef73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f501d90424fde166a381c9b63a1ff64d41fd5fc6e18dd8c04e701725d8ef73->enter($__internal_26f501d90424fde166a381c9b63a1ff64d41fd5fc6e18dd8c04e701725d8ef73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0131c0c96764217b03b2d369554f5081bc7af5f8861d4a343e15e0943e9b6788->leave($__internal_0131c0c96764217b03b2d369554f5081bc7af5f8861d4a343e15e0943e9b6788_prof);

        
        $__internal_26f501d90424fde166a381c9b63a1ff64d41fd5fc6e18dd8c04e701725d8ef73->leave($__internal_26f501d90424fde166a381c9b63a1ff64d41fd5fc6e18dd8c04e701725d8ef73_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c4f3b576a756c963c469dfd8a1802af9155573aeb6e9fc2cc867bcf8ce24ebf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4f3b576a756c963c469dfd8a1802af9155573aeb6e9fc2cc867bcf8ce24ebf4->enter($__internal_c4f3b576a756c963c469dfd8a1802af9155573aeb6e9fc2cc867bcf8ce24ebf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_063f4985f58d5bf4742d20067c3df0f26dc5cbf8d6744a65dca7beb5481bce93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_063f4985f58d5bf4742d20067c3df0f26dc5cbf8d6744a65dca7beb5481bce93->enter($__internal_063f4985f58d5bf4742d20067c3df0f26dc5cbf8d6744a65dca7beb5481bce93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_063f4985f58d5bf4742d20067c3df0f26dc5cbf8d6744a65dca7beb5481bce93->leave($__internal_063f4985f58d5bf4742d20067c3df0f26dc5cbf8d6744a65dca7beb5481bce93_prof);

        
        $__internal_c4f3b576a756c963c469dfd8a1802af9155573aeb6e9fc2cc867bcf8ce24ebf4->leave($__internal_c4f3b576a756c963c469dfd8a1802af9155573aeb6e9fc2cc867bcf8ce24ebf4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a54257e5ec8bdd0d13fdb56c0aa2e10e66c6f2fb7c90f6da44b14902ac155fc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a54257e5ec8bdd0d13fdb56c0aa2e10e66c6f2fb7c90f6da44b14902ac155fc5->enter($__internal_a54257e5ec8bdd0d13fdb56c0aa2e10e66c6f2fb7c90f6da44b14902ac155fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c9f5bea65a9fac00c123648e2da355b52b7114fdb7ec973b4a80e9de597ebf6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9f5bea65a9fac00c123648e2da355b52b7114fdb7ec973b4a80e9de597ebf6e->enter($__internal_c9f5bea65a9fac00c123648e2da355b52b7114fdb7ec973b4a80e9de597ebf6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c9f5bea65a9fac00c123648e2da355b52b7114fdb7ec973b4a80e9de597ebf6e->leave($__internal_c9f5bea65a9fac00c123648e2da355b52b7114fdb7ec973b4a80e9de597ebf6e_prof);

        
        $__internal_a54257e5ec8bdd0d13fdb56c0aa2e10e66c6f2fb7c90f6da44b14902ac155fc5->leave($__internal_a54257e5ec8bdd0d13fdb56c0aa2e10e66c6f2fb7c90f6da44b14902ac155fc5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_47ffef060bc152c0a1e79e5e36e9b0b1563b04dc26964a62aa39ad417ff767d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47ffef060bc152c0a1e79e5e36e9b0b1563b04dc26964a62aa39ad417ff767d2->enter($__internal_47ffef060bc152c0a1e79e5e36e9b0b1563b04dc26964a62aa39ad417ff767d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d4b6363230df0244dff6d50573967ae28034354bb2e57043063c93c3fe49b577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4b6363230df0244dff6d50573967ae28034354bb2e57043063c93c3fe49b577->enter($__internal_d4b6363230df0244dff6d50573967ae28034354bb2e57043063c93c3fe49b577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d4b6363230df0244dff6d50573967ae28034354bb2e57043063c93c3fe49b577->leave($__internal_d4b6363230df0244dff6d50573967ae28034354bb2e57043063c93c3fe49b577_prof);

        
        $__internal_47ffef060bc152c0a1e79e5e36e9b0b1563b04dc26964a62aa39ad417ff767d2->leave($__internal_47ffef060bc152c0a1e79e5e36e9b0b1563b04dc26964a62aa39ad417ff767d2_prof);

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
