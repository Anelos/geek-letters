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
        $__internal_c6dc3b1cef622b3f3125cae46ca8ba3e0dffdb4f17616e8647657fe217cdc894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6dc3b1cef622b3f3125cae46ca8ba3e0dffdb4f17616e8647657fe217cdc894->enter($__internal_c6dc3b1cef622b3f3125cae46ca8ba3e0dffdb4f17616e8647657fe217cdc894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_cd7389c63ec2ae6ed45dbc959b5a65f12733eb75b3cc5aa02a2ff499bed85903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd7389c63ec2ae6ed45dbc959b5a65f12733eb75b3cc5aa02a2ff499bed85903->enter($__internal_cd7389c63ec2ae6ed45dbc959b5a65f12733eb75b3cc5aa02a2ff499bed85903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6dc3b1cef622b3f3125cae46ca8ba3e0dffdb4f17616e8647657fe217cdc894->leave($__internal_c6dc3b1cef622b3f3125cae46ca8ba3e0dffdb4f17616e8647657fe217cdc894_prof);

        
        $__internal_cd7389c63ec2ae6ed45dbc959b5a65f12733eb75b3cc5aa02a2ff499bed85903->leave($__internal_cd7389c63ec2ae6ed45dbc959b5a65f12733eb75b3cc5aa02a2ff499bed85903_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_374f09725e20ca78b61bc024b00e31cf0b65b80f861be3595de2e19b503dfdcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_374f09725e20ca78b61bc024b00e31cf0b65b80f861be3595de2e19b503dfdcc->enter($__internal_374f09725e20ca78b61bc024b00e31cf0b65b80f861be3595de2e19b503dfdcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_64633a3529f99f5e74e09d134932360490b9eda65154c804aafb0be0812a4f37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64633a3529f99f5e74e09d134932360490b9eda65154c804aafb0be0812a4f37->enter($__internal_64633a3529f99f5e74e09d134932360490b9eda65154c804aafb0be0812a4f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_64633a3529f99f5e74e09d134932360490b9eda65154c804aafb0be0812a4f37->leave($__internal_64633a3529f99f5e74e09d134932360490b9eda65154c804aafb0be0812a4f37_prof);

        
        $__internal_374f09725e20ca78b61bc024b00e31cf0b65b80f861be3595de2e19b503dfdcc->leave($__internal_374f09725e20ca78b61bc024b00e31cf0b65b80f861be3595de2e19b503dfdcc_prof);

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
