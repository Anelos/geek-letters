<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_15247b897b42379b1e3aa331aad2f031225d862385dfd49831cefb8723db4133 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_7afac9d852b7d58e2c2d5951ba31e8f9a2b15f728641988deb93f155daaf19d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7afac9d852b7d58e2c2d5951ba31e8f9a2b15f728641988deb93f155daaf19d9->enter($__internal_7afac9d852b7d58e2c2d5951ba31e8f9a2b15f728641988deb93f155daaf19d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_eed8846fc33983ec63d79b3302e9614f5d455ae530e9bde6351d296f30b07e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eed8846fc33983ec63d79b3302e9614f5d455ae530e9bde6351d296f30b07e7c->enter($__internal_eed8846fc33983ec63d79b3302e9614f5d455ae530e9bde6351d296f30b07e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7afac9d852b7d58e2c2d5951ba31e8f9a2b15f728641988deb93f155daaf19d9->leave($__internal_7afac9d852b7d58e2c2d5951ba31e8f9a2b15f728641988deb93f155daaf19d9_prof);

        
        $__internal_eed8846fc33983ec63d79b3302e9614f5d455ae530e9bde6351d296f30b07e7c->leave($__internal_eed8846fc33983ec63d79b3302e9614f5d455ae530e9bde6351d296f30b07e7c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bc03fa1d1a4d25b17335daf828c2f751e4298813481ecd39f50a3d4a37e22930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc03fa1d1a4d25b17335daf828c2f751e4298813481ecd39f50a3d4a37e22930->enter($__internal_bc03fa1d1a4d25b17335daf828c2f751e4298813481ecd39f50a3d4a37e22930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b6960d60ef5fb4f0a518c1fa1a3ddd5b6e8c810a81cca51d0ebf54724d74e5d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6960d60ef5fb4f0a518c1fa1a3ddd5b6e8c810a81cca51d0ebf54724d74e5d7->enter($__internal_b6960d60ef5fb4f0a518c1fa1a3ddd5b6e8c810a81cca51d0ebf54724d74e5d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b6960d60ef5fb4f0a518c1fa1a3ddd5b6e8c810a81cca51d0ebf54724d74e5d7->leave($__internal_b6960d60ef5fb4f0a518c1fa1a3ddd5b6e8c810a81cca51d0ebf54724d74e5d7_prof);

        
        $__internal_bc03fa1d1a4d25b17335daf828c2f751e4298813481ecd39f50a3d4a37e22930->leave($__internal_bc03fa1d1a4d25b17335daf828c2f751e4298813481ecd39f50a3d4a37e22930_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a5ce226bd1acb60fc46ec5e119e520199d131f522c7db21afa513160dafcc4e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5ce226bd1acb60fc46ec5e119e520199d131f522c7db21afa513160dafcc4e2->enter($__internal_a5ce226bd1acb60fc46ec5e119e520199d131f522c7db21afa513160dafcc4e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dae7cb54e7248caa21dd5d48006f0f668fa31d69744433d744ebaf392eacb130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dae7cb54e7248caa21dd5d48006f0f668fa31d69744433d744ebaf392eacb130->enter($__internal_dae7cb54e7248caa21dd5d48006f0f668fa31d69744433d744ebaf392eacb130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dae7cb54e7248caa21dd5d48006f0f668fa31d69744433d744ebaf392eacb130->leave($__internal_dae7cb54e7248caa21dd5d48006f0f668fa31d69744433d744ebaf392eacb130_prof);

        
        $__internal_a5ce226bd1acb60fc46ec5e119e520199d131f522c7db21afa513160dafcc4e2->leave($__internal_a5ce226bd1acb60fc46ec5e119e520199d131f522c7db21afa513160dafcc4e2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a3600baafe2cb7dfd3d933223d0b6972b73d178e2ecc14a8dbd0b02a2b8d1e71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3600baafe2cb7dfd3d933223d0b6972b73d178e2ecc14a8dbd0b02a2b8d1e71->enter($__internal_a3600baafe2cb7dfd3d933223d0b6972b73d178e2ecc14a8dbd0b02a2b8d1e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d6e73ca3da9d5936cc46384bf1fb1aa478bb41d8e9ffb2196bb5932327428744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6e73ca3da9d5936cc46384bf1fb1aa478bb41d8e9ffb2196bb5932327428744->enter($__internal_d6e73ca3da9d5936cc46384bf1fb1aa478bb41d8e9ffb2196bb5932327428744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d6e73ca3da9d5936cc46384bf1fb1aa478bb41d8e9ffb2196bb5932327428744->leave($__internal_d6e73ca3da9d5936cc46384bf1fb1aa478bb41d8e9ffb2196bb5932327428744_prof);

        
        $__internal_a3600baafe2cb7dfd3d933223d0b6972b73d178e2ecc14a8dbd0b02a2b8d1e71->leave($__internal_a3600baafe2cb7dfd3d933223d0b6972b73d178e2ecc14a8dbd0b02a2b8d1e71_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
