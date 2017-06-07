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
        $__internal_e5f9a011318dbbcadc1653d18b9a87e8c603c3531e1cb5df7d839d3c47856694 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5f9a011318dbbcadc1653d18b9a87e8c603c3531e1cb5df7d839d3c47856694->enter($__internal_e5f9a011318dbbcadc1653d18b9a87e8c603c3531e1cb5df7d839d3c47856694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_4c3312949bf8b510b3c1b79ee6bcb932745fa2bcca927f71d7c2e95711c467cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c3312949bf8b510b3c1b79ee6bcb932745fa2bcca927f71d7c2e95711c467cf->enter($__internal_4c3312949bf8b510b3c1b79ee6bcb932745fa2bcca927f71d7c2e95711c467cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5f9a011318dbbcadc1653d18b9a87e8c603c3531e1cb5df7d839d3c47856694->leave($__internal_e5f9a011318dbbcadc1653d18b9a87e8c603c3531e1cb5df7d839d3c47856694_prof);

        
        $__internal_4c3312949bf8b510b3c1b79ee6bcb932745fa2bcca927f71d7c2e95711c467cf->leave($__internal_4c3312949bf8b510b3c1b79ee6bcb932745fa2bcca927f71d7c2e95711c467cf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ac48b67f733f1d85389271f454c3edde8c9f95f08605dc0a16ceff39ffa080a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac48b67f733f1d85389271f454c3edde8c9f95f08605dc0a16ceff39ffa080a0->enter($__internal_ac48b67f733f1d85389271f454c3edde8c9f95f08605dc0a16ceff39ffa080a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cf33cca180b47f69ed0a5d273fc9c5fd31c4765b14979d43d673d3ed3f38ffd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf33cca180b47f69ed0a5d273fc9c5fd31c4765b14979d43d673d3ed3f38ffd7->enter($__internal_cf33cca180b47f69ed0a5d273fc9c5fd31c4765b14979d43d673d3ed3f38ffd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cf33cca180b47f69ed0a5d273fc9c5fd31c4765b14979d43d673d3ed3f38ffd7->leave($__internal_cf33cca180b47f69ed0a5d273fc9c5fd31c4765b14979d43d673d3ed3f38ffd7_prof);

        
        $__internal_ac48b67f733f1d85389271f454c3edde8c9f95f08605dc0a16ceff39ffa080a0->leave($__internal_ac48b67f733f1d85389271f454c3edde8c9f95f08605dc0a16ceff39ffa080a0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dad8d9da32289232967da0d59622e1115546e5fbf0b179a2ed175b9487e4f38c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dad8d9da32289232967da0d59622e1115546e5fbf0b179a2ed175b9487e4f38c->enter($__internal_dad8d9da32289232967da0d59622e1115546e5fbf0b179a2ed175b9487e4f38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a71096c2e4cb4245525e6268ce7048fee480320ce213e6c63bddaf12c5a045d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a71096c2e4cb4245525e6268ce7048fee480320ce213e6c63bddaf12c5a045d6->enter($__internal_a71096c2e4cb4245525e6268ce7048fee480320ce213e6c63bddaf12c5a045d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a71096c2e4cb4245525e6268ce7048fee480320ce213e6c63bddaf12c5a045d6->leave($__internal_a71096c2e4cb4245525e6268ce7048fee480320ce213e6c63bddaf12c5a045d6_prof);

        
        $__internal_dad8d9da32289232967da0d59622e1115546e5fbf0b179a2ed175b9487e4f38c->leave($__internal_dad8d9da32289232967da0d59622e1115546e5fbf0b179a2ed175b9487e4f38c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ea4d74d5c928d75194df86f57b89fb464c4c8bc46e41cdd6d209e5ad87620910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea4d74d5c928d75194df86f57b89fb464c4c8bc46e41cdd6d209e5ad87620910->enter($__internal_ea4d74d5c928d75194df86f57b89fb464c4c8bc46e41cdd6d209e5ad87620910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8c8f93ac625596793bf43a26f58ea204ffda8d77f5ac224d5e19f01567165d51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c8f93ac625596793bf43a26f58ea204ffda8d77f5ac224d5e19f01567165d51->enter($__internal_8c8f93ac625596793bf43a26f58ea204ffda8d77f5ac224d5e19f01567165d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8c8f93ac625596793bf43a26f58ea204ffda8d77f5ac224d5e19f01567165d51->leave($__internal_8c8f93ac625596793bf43a26f58ea204ffda8d77f5ac224d5e19f01567165d51_prof);

        
        $__internal_ea4d74d5c928d75194df86f57b89fb464c4c8bc46e41cdd6d209e5ad87620910->leave($__internal_ea4d74d5c928d75194df86f57b89fb464c4c8bc46e41cdd6d209e5ad87620910_prof);

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
