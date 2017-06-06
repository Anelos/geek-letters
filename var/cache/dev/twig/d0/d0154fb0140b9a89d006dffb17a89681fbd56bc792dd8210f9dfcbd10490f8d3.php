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
        $__internal_624b18e4d0c6b3476f4f6e978ffac0aa454a3a46195d88d86a7d94f6717a24b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_624b18e4d0c6b3476f4f6e978ffac0aa454a3a46195d88d86a7d94f6717a24b3->enter($__internal_624b18e4d0c6b3476f4f6e978ffac0aa454a3a46195d88d86a7d94f6717a24b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_ff9eb14251dbf6465967ab501bcea9d9d82ae0abf67b79f7769bec38d08ce745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff9eb14251dbf6465967ab501bcea9d9d82ae0abf67b79f7769bec38d08ce745->enter($__internal_ff9eb14251dbf6465967ab501bcea9d9d82ae0abf67b79f7769bec38d08ce745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_624b18e4d0c6b3476f4f6e978ffac0aa454a3a46195d88d86a7d94f6717a24b3->leave($__internal_624b18e4d0c6b3476f4f6e978ffac0aa454a3a46195d88d86a7d94f6717a24b3_prof);

        
        $__internal_ff9eb14251dbf6465967ab501bcea9d9d82ae0abf67b79f7769bec38d08ce745->leave($__internal_ff9eb14251dbf6465967ab501bcea9d9d82ae0abf67b79f7769bec38d08ce745_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f34ce3d46603c75e12617890f8815bc55e652ee846c9417df312ca6320b54015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f34ce3d46603c75e12617890f8815bc55e652ee846c9417df312ca6320b54015->enter($__internal_f34ce3d46603c75e12617890f8815bc55e652ee846c9417df312ca6320b54015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fe0174b2f47eab049fde136d0374505e6c4a2b6bba40eca0b0156695146a0cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe0174b2f47eab049fde136d0374505e6c4a2b6bba40eca0b0156695146a0cbe->enter($__internal_fe0174b2f47eab049fde136d0374505e6c4a2b6bba40eca0b0156695146a0cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fe0174b2f47eab049fde136d0374505e6c4a2b6bba40eca0b0156695146a0cbe->leave($__internal_fe0174b2f47eab049fde136d0374505e6c4a2b6bba40eca0b0156695146a0cbe_prof);

        
        $__internal_f34ce3d46603c75e12617890f8815bc55e652ee846c9417df312ca6320b54015->leave($__internal_f34ce3d46603c75e12617890f8815bc55e652ee846c9417df312ca6320b54015_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5d9bcdf81bd55d9bd6f3d5b42cc0a6f4d930c74329f114bb7da29dc315812526 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d9bcdf81bd55d9bd6f3d5b42cc0a6f4d930c74329f114bb7da29dc315812526->enter($__internal_5d9bcdf81bd55d9bd6f3d5b42cc0a6f4d930c74329f114bb7da29dc315812526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4154b7dec28164500ca7e8911aab092a569cf060e851452760a31cc1e803a88e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4154b7dec28164500ca7e8911aab092a569cf060e851452760a31cc1e803a88e->enter($__internal_4154b7dec28164500ca7e8911aab092a569cf060e851452760a31cc1e803a88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4154b7dec28164500ca7e8911aab092a569cf060e851452760a31cc1e803a88e->leave($__internal_4154b7dec28164500ca7e8911aab092a569cf060e851452760a31cc1e803a88e_prof);

        
        $__internal_5d9bcdf81bd55d9bd6f3d5b42cc0a6f4d930c74329f114bb7da29dc315812526->leave($__internal_5d9bcdf81bd55d9bd6f3d5b42cc0a6f4d930c74329f114bb7da29dc315812526_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ffacab71c4c06fd504ac5f6caec31d8a3a98da2ef928ef3842ff22c5359a4e4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffacab71c4c06fd504ac5f6caec31d8a3a98da2ef928ef3842ff22c5359a4e4d->enter($__internal_ffacab71c4c06fd504ac5f6caec31d8a3a98da2ef928ef3842ff22c5359a4e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0bf79f931e1797d0b1de7948251c45f06d4220a74200f33dd6283c8bb51693a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bf79f931e1797d0b1de7948251c45f06d4220a74200f33dd6283c8bb51693a1->enter($__internal_0bf79f931e1797d0b1de7948251c45f06d4220a74200f33dd6283c8bb51693a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0bf79f931e1797d0b1de7948251c45f06d4220a74200f33dd6283c8bb51693a1->leave($__internal_0bf79f931e1797d0b1de7948251c45f06d4220a74200f33dd6283c8bb51693a1_prof);

        
        $__internal_ffacab71c4c06fd504ac5f6caec31d8a3a98da2ef928ef3842ff22c5359a4e4d->leave($__internal_ffacab71c4c06fd504ac5f6caec31d8a3a98da2ef928ef3842ff22c5359a4e4d_prof);

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
