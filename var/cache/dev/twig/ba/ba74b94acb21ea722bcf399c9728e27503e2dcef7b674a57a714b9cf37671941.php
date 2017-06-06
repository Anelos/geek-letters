<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_ae29ea8643f14411134c8be9183329d86493ee1bc98d0276e9cc3211f64476de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_4edc3ad63fc0fa8a8297e1c38f2cf774497f2bc3add734f2ca9fbbfe600a1194 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4edc3ad63fc0fa8a8297e1c38f2cf774497f2bc3add734f2ca9fbbfe600a1194->enter($__internal_4edc3ad63fc0fa8a8297e1c38f2cf774497f2bc3add734f2ca9fbbfe600a1194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_ceb60e44cb1fd5803785c6c38e5933563bd472368683834415a8651f3d20f349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceb60e44cb1fd5803785c6c38e5933563bd472368683834415a8651f3d20f349->enter($__internal_ceb60e44cb1fd5803785c6c38e5933563bd472368683834415a8651f3d20f349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4edc3ad63fc0fa8a8297e1c38f2cf774497f2bc3add734f2ca9fbbfe600a1194->leave($__internal_4edc3ad63fc0fa8a8297e1c38f2cf774497f2bc3add734f2ca9fbbfe600a1194_prof);

        
        $__internal_ceb60e44cb1fd5803785c6c38e5933563bd472368683834415a8651f3d20f349->leave($__internal_ceb60e44cb1fd5803785c6c38e5933563bd472368683834415a8651f3d20f349_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_41c3813a203e3e400034d94d7a23154f14d3bcd7c7c8db5d35e493ba57b2451b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41c3813a203e3e400034d94d7a23154f14d3bcd7c7c8db5d35e493ba57b2451b->enter($__internal_41c3813a203e3e400034d94d7a23154f14d3bcd7c7c8db5d35e493ba57b2451b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_272847cba7993085e5bdcd55f4411c7e5a9926c48afc3b5bfab8137b7f2211c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_272847cba7993085e5bdcd55f4411c7e5a9926c48afc3b5bfab8137b7f2211c4->enter($__internal_272847cba7993085e5bdcd55f4411c7e5a9926c48afc3b5bfab8137b7f2211c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_272847cba7993085e5bdcd55f4411c7e5a9926c48afc3b5bfab8137b7f2211c4->leave($__internal_272847cba7993085e5bdcd55f4411c7e5a9926c48afc3b5bfab8137b7f2211c4_prof);

        
        $__internal_41c3813a203e3e400034d94d7a23154f14d3bcd7c7c8db5d35e493ba57b2451b->leave($__internal_41c3813a203e3e400034d94d7a23154f14d3bcd7c7c8db5d35e493ba57b2451b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
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
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
