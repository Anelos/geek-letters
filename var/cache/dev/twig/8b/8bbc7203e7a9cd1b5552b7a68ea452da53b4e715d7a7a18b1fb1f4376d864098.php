<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_482eb11824ea61c3ddff2de8166d0cf0e087d9d1959c7f5e740c9fa096a07a84 extends Twig_Template
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
        $__internal_6adb5d6205f624515645f379ec95c8c4b8907517baf5bbaf4b288dd1d6cb87f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6adb5d6205f624515645f379ec95c8c4b8907517baf5bbaf4b288dd1d6cb87f8->enter($__internal_6adb5d6205f624515645f379ec95c8c4b8907517baf5bbaf4b288dd1d6cb87f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_28643e395743493f7bef914cb76abaa3ee158404e7da86df3a7767bcc8294602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28643e395743493f7bef914cb76abaa3ee158404e7da86df3a7767bcc8294602->enter($__internal_28643e395743493f7bef914cb76abaa3ee158404e7da86df3a7767bcc8294602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6adb5d6205f624515645f379ec95c8c4b8907517baf5bbaf4b288dd1d6cb87f8->leave($__internal_6adb5d6205f624515645f379ec95c8c4b8907517baf5bbaf4b288dd1d6cb87f8_prof);

        
        $__internal_28643e395743493f7bef914cb76abaa3ee158404e7da86df3a7767bcc8294602->leave($__internal_28643e395743493f7bef914cb76abaa3ee158404e7da86df3a7767bcc8294602_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cbdecc715bc435630e0a866739423bf147e164fecefe5ad8d70590b50ca05b6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbdecc715bc435630e0a866739423bf147e164fecefe5ad8d70590b50ca05b6a->enter($__internal_cbdecc715bc435630e0a866739423bf147e164fecefe5ad8d70590b50ca05b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e6240c0999c1ec61ff45024528134d7e0679d51bda6903a5011416274f3e7f45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6240c0999c1ec61ff45024528134d7e0679d51bda6903a5011416274f3e7f45->enter($__internal_e6240c0999c1ec61ff45024528134d7e0679d51bda6903a5011416274f3e7f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e6240c0999c1ec61ff45024528134d7e0679d51bda6903a5011416274f3e7f45->leave($__internal_e6240c0999c1ec61ff45024528134d7e0679d51bda6903a5011416274f3e7f45_prof);

        
        $__internal_cbdecc715bc435630e0a866739423bf147e164fecefe5ad8d70590b50ca05b6a->leave($__internal_cbdecc715bc435630e0a866739423bf147e164fecefe5ad8d70590b50ca05b6a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_032998447bf49ce323eb62df06bf8c7186c1d81715d83dd33ccb94a543059867 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_032998447bf49ce323eb62df06bf8c7186c1d81715d83dd33ccb94a543059867->enter($__internal_032998447bf49ce323eb62df06bf8c7186c1d81715d83dd33ccb94a543059867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3bfa242760754b149a97d4a2d0b6b7d410d2af9f87b1daca803730aa82566744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bfa242760754b149a97d4a2d0b6b7d410d2af9f87b1daca803730aa82566744->enter($__internal_3bfa242760754b149a97d4a2d0b6b7d410d2af9f87b1daca803730aa82566744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_3bfa242760754b149a97d4a2d0b6b7d410d2af9f87b1daca803730aa82566744->leave($__internal_3bfa242760754b149a97d4a2d0b6b7d410d2af9f87b1daca803730aa82566744_prof);

        
        $__internal_032998447bf49ce323eb62df06bf8c7186c1d81715d83dd33ccb94a543059867->leave($__internal_032998447bf49ce323eb62df06bf8c7186c1d81715d83dd33ccb94a543059867_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_da41f359e992a0582024258d930f63d25361adc3d1c5ac9aa28ec0b6cd00cc56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da41f359e992a0582024258d930f63d25361adc3d1c5ac9aa28ec0b6cd00cc56->enter($__internal_da41f359e992a0582024258d930f63d25361adc3d1c5ac9aa28ec0b6cd00cc56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ecf2761f2cbd1a983e98524339e6c80f7a351d7793cc5eb604064c4527836b98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf2761f2cbd1a983e98524339e6c80f7a351d7793cc5eb604064c4527836b98->enter($__internal_ecf2761f2cbd1a983e98524339e6c80f7a351d7793cc5eb604064c4527836b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ecf2761f2cbd1a983e98524339e6c80f7a351d7793cc5eb604064c4527836b98->leave($__internal_ecf2761f2cbd1a983e98524339e6c80f7a351d7793cc5eb604064c4527836b98_prof);

        
        $__internal_da41f359e992a0582024258d930f63d25361adc3d1c5ac9aa28ec0b6cd00cc56->leave($__internal_da41f359e992a0582024258d930f63d25361adc3d1c5ac9aa28ec0b6cd00cc56_prof);

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
