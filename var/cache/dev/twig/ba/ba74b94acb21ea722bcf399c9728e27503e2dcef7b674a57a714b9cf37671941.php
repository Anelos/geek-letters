<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_ae29ea8643f14411134c8be9183329d86493ee1bc98d0276e9cc3211f64476de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d8e65c9fe6959d1399328bc584f29b175728b756eb1bfcf9df45964f7a08747 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d8e65c9fe6959d1399328bc584f29b175728b756eb1bfcf9df45964f7a08747->enter($__internal_1d8e65c9fe6959d1399328bc584f29b175728b756eb1bfcf9df45964f7a08747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_e3502a9bcb71db770a4d90fd0ba4eab58ed1cc588c24901ab4894ad88b0cb1bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3502a9bcb71db770a4d90fd0ba4eab58ed1cc588c24901ab4894ad88b0cb1bb->enter($__internal_e3502a9bcb71db770a4d90fd0ba4eab58ed1cc588c24901ab4894ad88b0cb1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d8e65c9fe6959d1399328bc584f29b175728b756eb1bfcf9df45964f7a08747->leave($__internal_1d8e65c9fe6959d1399328bc584f29b175728b756eb1bfcf9df45964f7a08747_prof);

        
        $__internal_e3502a9bcb71db770a4d90fd0ba4eab58ed1cc588c24901ab4894ad88b0cb1bb->leave($__internal_e3502a9bcb71db770a4d90fd0ba4eab58ed1cc588c24901ab4894ad88b0cb1bb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_72a23e5b35c002a695fa51c72adb50567bf66d4e3cae403197790fc77d83f5c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72a23e5b35c002a695fa51c72adb50567bf66d4e3cae403197790fc77d83f5c3->enter($__internal_72a23e5b35c002a695fa51c72adb50567bf66d4e3cae403197790fc77d83f5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_472dea33e8b4105ad2e575000d182060aac1386c2c42f169ce3ea83942d611da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_472dea33e8b4105ad2e575000d182060aac1386c2c42f169ce3ea83942d611da->enter($__internal_472dea33e8b4105ad2e575000d182060aac1386c2c42f169ce3ea83942d611da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_472dea33e8b4105ad2e575000d182060aac1386c2c42f169ce3ea83942d611da->leave($__internal_472dea33e8b4105ad2e575000d182060aac1386c2c42f169ce3ea83942d611da_prof);

        
        $__internal_72a23e5b35c002a695fa51c72adb50567bf66d4e3cae403197790fc77d83f5c3->leave($__internal_72a23e5b35c002a695fa51c72adb50567bf66d4e3cae403197790fc77d83f5c3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
