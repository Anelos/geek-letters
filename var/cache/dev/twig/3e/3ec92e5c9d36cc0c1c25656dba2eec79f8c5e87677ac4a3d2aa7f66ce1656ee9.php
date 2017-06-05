<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_0027655d6ea8f6d92d6a277a3eab53075fcea1ef520354e7bbecb0a9209f59da extends Twig_Template
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
        $__internal_237fa252d807b8b622cf6624258ec51bf33c3cd4060506b983d959902b9d7b4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_237fa252d807b8b622cf6624258ec51bf33c3cd4060506b983d959902b9d7b4e->enter($__internal_237fa252d807b8b622cf6624258ec51bf33c3cd4060506b983d959902b9d7b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_f18f1d2f75298059374c96283739b441b7e15015522721fb19739444de5e99e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f18f1d2f75298059374c96283739b441b7e15015522721fb19739444de5e99e5->enter($__internal_f18f1d2f75298059374c96283739b441b7e15015522721fb19739444de5e99e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_237fa252d807b8b622cf6624258ec51bf33c3cd4060506b983d959902b9d7b4e->leave($__internal_237fa252d807b8b622cf6624258ec51bf33c3cd4060506b983d959902b9d7b4e_prof);

        
        $__internal_f18f1d2f75298059374c96283739b441b7e15015522721fb19739444de5e99e5->leave($__internal_f18f1d2f75298059374c96283739b441b7e15015522721fb19739444de5e99e5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3bbe6cbd319b10ca2ce7a38c9ef46319e7e5422d7416efeb785111b1c9690eb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bbe6cbd319b10ca2ce7a38c9ef46319e7e5422d7416efeb785111b1c9690eb6->enter($__internal_3bbe6cbd319b10ca2ce7a38c9ef46319e7e5422d7416efeb785111b1c9690eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c49bb23326cf0e7d3bfdacc144886250ff3b33d159d5ca4b5c7d015a8f372b07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c49bb23326cf0e7d3bfdacc144886250ff3b33d159d5ca4b5c7d015a8f372b07->enter($__internal_c49bb23326cf0e7d3bfdacc144886250ff3b33d159d5ca4b5c7d015a8f372b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_c49bb23326cf0e7d3bfdacc144886250ff3b33d159d5ca4b5c7d015a8f372b07->leave($__internal_c49bb23326cf0e7d3bfdacc144886250ff3b33d159d5ca4b5c7d015a8f372b07_prof);

        
        $__internal_3bbe6cbd319b10ca2ce7a38c9ef46319e7e5422d7416efeb785111b1c9690eb6->leave($__internal_3bbe6cbd319b10ca2ce7a38c9ef46319e7e5422d7416efeb785111b1c9690eb6_prof);

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
