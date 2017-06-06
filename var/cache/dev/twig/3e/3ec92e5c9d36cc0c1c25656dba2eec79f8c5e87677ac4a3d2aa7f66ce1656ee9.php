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
        $__internal_c69e24ad0b4667a907f8d18c2adc67287d5309c65eb41c82d6b2129a981ca7c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c69e24ad0b4667a907f8d18c2adc67287d5309c65eb41c82d6b2129a981ca7c0->enter($__internal_c69e24ad0b4667a907f8d18c2adc67287d5309c65eb41c82d6b2129a981ca7c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_802cf923e0e031fe27682e4dcfae6db7d4cfb9e1022e5a76620b0ead8605143a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_802cf923e0e031fe27682e4dcfae6db7d4cfb9e1022e5a76620b0ead8605143a->enter($__internal_802cf923e0e031fe27682e4dcfae6db7d4cfb9e1022e5a76620b0ead8605143a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c69e24ad0b4667a907f8d18c2adc67287d5309c65eb41c82d6b2129a981ca7c0->leave($__internal_c69e24ad0b4667a907f8d18c2adc67287d5309c65eb41c82d6b2129a981ca7c0_prof);

        
        $__internal_802cf923e0e031fe27682e4dcfae6db7d4cfb9e1022e5a76620b0ead8605143a->leave($__internal_802cf923e0e031fe27682e4dcfae6db7d4cfb9e1022e5a76620b0ead8605143a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d8b5d306a156cfb0f7a17a18cfa4fb9f56a7fc581d0bc749c20024aa1c659ca8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8b5d306a156cfb0f7a17a18cfa4fb9f56a7fc581d0bc749c20024aa1c659ca8->enter($__internal_d8b5d306a156cfb0f7a17a18cfa4fb9f56a7fc581d0bc749c20024aa1c659ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a037021dd0009d9ba1605d39473b9dab960f96e97fc4356accd1ae7a329e5d3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a037021dd0009d9ba1605d39473b9dab960f96e97fc4356accd1ae7a329e5d3e->enter($__internal_a037021dd0009d9ba1605d39473b9dab960f96e97fc4356accd1ae7a329e5d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_a037021dd0009d9ba1605d39473b9dab960f96e97fc4356accd1ae7a329e5d3e->leave($__internal_a037021dd0009d9ba1605d39473b9dab960f96e97fc4356accd1ae7a329e5d3e_prof);

        
        $__internal_d8b5d306a156cfb0f7a17a18cfa4fb9f56a7fc581d0bc749c20024aa1c659ca8->leave($__internal_d8b5d306a156cfb0f7a17a18cfa4fb9f56a7fc581d0bc749c20024aa1c659ca8_prof);

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
