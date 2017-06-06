<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_b3271d29682b2ae14e556716415a1d8a2c5b06e73d397cae69ce573a2b3eca05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_4e1747022a1862c15aeda6bad45dad0b4c0132635dd1d36778738a6a2ba23cc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e1747022a1862c15aeda6bad45dad0b4c0132635dd1d36778738a6a2ba23cc3->enter($__internal_4e1747022a1862c15aeda6bad45dad0b4c0132635dd1d36778738a6a2ba23cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_eb6c9f5a97f6a3055c6db6f32085a4169ea06d547a3001320966235d788feab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb6c9f5a97f6a3055c6db6f32085a4169ea06d547a3001320966235d788feab4->enter($__internal_eb6c9f5a97f6a3055c6db6f32085a4169ea06d547a3001320966235d788feab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e1747022a1862c15aeda6bad45dad0b4c0132635dd1d36778738a6a2ba23cc3->leave($__internal_4e1747022a1862c15aeda6bad45dad0b4c0132635dd1d36778738a6a2ba23cc3_prof);

        
        $__internal_eb6c9f5a97f6a3055c6db6f32085a4169ea06d547a3001320966235d788feab4->leave($__internal_eb6c9f5a97f6a3055c6db6f32085a4169ea06d547a3001320966235d788feab4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3a13ebc3a11a67d3722c11cdce22208d6417a06344dd08406f29020b1755e160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a13ebc3a11a67d3722c11cdce22208d6417a06344dd08406f29020b1755e160->enter($__internal_3a13ebc3a11a67d3722c11cdce22208d6417a06344dd08406f29020b1755e160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b34af46789fb83b4d3ee4f58c6dd47abe3ed71ff1f2b6a57476c4ebf168c75e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b34af46789fb83b4d3ee4f58c6dd47abe3ed71ff1f2b6a57476c4ebf168c75e6->enter($__internal_b34af46789fb83b4d3ee4f58c6dd47abe3ed71ff1f2b6a57476c4ebf168c75e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b34af46789fb83b4d3ee4f58c6dd47abe3ed71ff1f2b6a57476c4ebf168c75e6->leave($__internal_b34af46789fb83b4d3ee4f58c6dd47abe3ed71ff1f2b6a57476c4ebf168c75e6_prof);

        
        $__internal_3a13ebc3a11a67d3722c11cdce22208d6417a06344dd08406f29020b1755e160->leave($__internal_3a13ebc3a11a67d3722c11cdce22208d6417a06344dd08406f29020b1755e160_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e045407b52d337d9e44d488ea1cbd0caf3a18e4ba535c1be84984a9ad49ffcda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e045407b52d337d9e44d488ea1cbd0caf3a18e4ba535c1be84984a9ad49ffcda->enter($__internal_e045407b52d337d9e44d488ea1cbd0caf3a18e4ba535c1be84984a9ad49ffcda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_630b9e1cdb2e5a5499e98360c364884b19395bfb3c29447a847d2403c4c1d1be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_630b9e1cdb2e5a5499e98360c364884b19395bfb3c29447a847d2403c4c1d1be->enter($__internal_630b9e1cdb2e5a5499e98360c364884b19395bfb3c29447a847d2403c4c1d1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_630b9e1cdb2e5a5499e98360c364884b19395bfb3c29447a847d2403c4c1d1be->leave($__internal_630b9e1cdb2e5a5499e98360c364884b19395bfb3c29447a847d2403c4c1d1be_prof);

        
        $__internal_e045407b52d337d9e44d488ea1cbd0caf3a18e4ba535c1be84984a9ad49ffcda->leave($__internal_e045407b52d337d9e44d488ea1cbd0caf3a18e4ba535c1be84984a9ad49ffcda_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_400fd003aa0d36b72f5808d0c177c5e980f21c82efa8f5ef8b5a51b2eb57bb1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_400fd003aa0d36b72f5808d0c177c5e980f21c82efa8f5ef8b5a51b2eb57bb1d->enter($__internal_400fd003aa0d36b72f5808d0c177c5e980f21c82efa8f5ef8b5a51b2eb57bb1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_588d41907f8084e50449590fe35c6fe4919c1529f52538b77c5fcff3d019848c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_588d41907f8084e50449590fe35c6fe4919c1529f52538b77c5fcff3d019848c->enter($__internal_588d41907f8084e50449590fe35c6fe4919c1529f52538b77c5fcff3d019848c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_588d41907f8084e50449590fe35c6fe4919c1529f52538b77c5fcff3d019848c->leave($__internal_588d41907f8084e50449590fe35c6fe4919c1529f52538b77c5fcff3d019848c_prof);

        
        $__internal_400fd003aa0d36b72f5808d0c177c5e980f21c82efa8f5ef8b5a51b2eb57bb1d->leave($__internal_400fd003aa0d36b72f5808d0c177c5e980f21c82efa8f5ef8b5a51b2eb57bb1d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
