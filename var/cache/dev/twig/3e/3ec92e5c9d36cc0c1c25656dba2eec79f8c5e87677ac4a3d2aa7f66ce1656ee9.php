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
        $__internal_ef39b2909a449b2e6656a2b9f5bc838b0b2776b1f1605c7f5ecbb015e2a859db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef39b2909a449b2e6656a2b9f5bc838b0b2776b1f1605c7f5ecbb015e2a859db->enter($__internal_ef39b2909a449b2e6656a2b9f5bc838b0b2776b1f1605c7f5ecbb015e2a859db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_d51d3af9e9760c809ebfcfd7d922d6fc60663d645d175f59fd93ecc4c5850754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d51d3af9e9760c809ebfcfd7d922d6fc60663d645d175f59fd93ecc4c5850754->enter($__internal_d51d3af9e9760c809ebfcfd7d922d6fc60663d645d175f59fd93ecc4c5850754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef39b2909a449b2e6656a2b9f5bc838b0b2776b1f1605c7f5ecbb015e2a859db->leave($__internal_ef39b2909a449b2e6656a2b9f5bc838b0b2776b1f1605c7f5ecbb015e2a859db_prof);

        
        $__internal_d51d3af9e9760c809ebfcfd7d922d6fc60663d645d175f59fd93ecc4c5850754->leave($__internal_d51d3af9e9760c809ebfcfd7d922d6fc60663d645d175f59fd93ecc4c5850754_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_605c647b38d630b0c71f6b6b94e9c4396f7f71cb518bcd99383f37eb207255df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_605c647b38d630b0c71f6b6b94e9c4396f7f71cb518bcd99383f37eb207255df->enter($__internal_605c647b38d630b0c71f6b6b94e9c4396f7f71cb518bcd99383f37eb207255df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1a1a91563b36a0db8ea85a181b2080f56da95049a3c215113a34443c2dd98108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a1a91563b36a0db8ea85a181b2080f56da95049a3c215113a34443c2dd98108->enter($__internal_1a1a91563b36a0db8ea85a181b2080f56da95049a3c215113a34443c2dd98108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_1a1a91563b36a0db8ea85a181b2080f56da95049a3c215113a34443c2dd98108->leave($__internal_1a1a91563b36a0db8ea85a181b2080f56da95049a3c215113a34443c2dd98108_prof);

        
        $__internal_605c647b38d630b0c71f6b6b94e9c4396f7f71cb518bcd99383f37eb207255df->leave($__internal_605c647b38d630b0c71f6b6b94e9c4396f7f71cb518bcd99383f37eb207255df_prof);

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
