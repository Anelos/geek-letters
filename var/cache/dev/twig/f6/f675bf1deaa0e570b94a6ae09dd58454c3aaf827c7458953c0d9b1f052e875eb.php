<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_d6c838ba06aa015c8612635b2ae0687135c83dd9e75d03d31ba1dafa909eab3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f074f9f02ec315b9eb30862445646c3de79e46d43afe157f4ddc9469c8b20d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f074f9f02ec315b9eb30862445646c3de79e46d43afe157f4ddc9469c8b20d5->enter($__internal_1f074f9f02ec315b9eb30862445646c3de79e46d43afe157f4ddc9469c8b20d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_182158cd9c7075ee563d5b42edf7e0762ebc7a7293cd749fe383df98d608f3bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_182158cd9c7075ee563d5b42edf7e0762ebc7a7293cd749fe383df98d608f3bf->enter($__internal_182158cd9c7075ee563d5b42edf7e0762ebc7a7293cd749fe383df98d608f3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f074f9f02ec315b9eb30862445646c3de79e46d43afe157f4ddc9469c8b20d5->leave($__internal_1f074f9f02ec315b9eb30862445646c3de79e46d43afe157f4ddc9469c8b20d5_prof);

        
        $__internal_182158cd9c7075ee563d5b42edf7e0762ebc7a7293cd749fe383df98d608f3bf->leave($__internal_182158cd9c7075ee563d5b42edf7e0762ebc7a7293cd749fe383df98d608f3bf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c828525f2641f07a026b69b7dcf7a57ea28fc8a90f88ba62d9a1b77c89fcefd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c828525f2641f07a026b69b7dcf7a57ea28fc8a90f88ba62d9a1b77c89fcefd8->enter($__internal_c828525f2641f07a026b69b7dcf7a57ea28fc8a90f88ba62d9a1b77c89fcefd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7b30d74e0e78a8aca62ed5a883bd1f9d5744ff053b838ca9de01ce3b207ae515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b30d74e0e78a8aca62ed5a883bd1f9d5744ff053b838ca9de01ce3b207ae515->enter($__internal_7b30d74e0e78a8aca62ed5a883bd1f9d5744ff053b838ca9de01ce3b207ae515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_7b30d74e0e78a8aca62ed5a883bd1f9d5744ff053b838ca9de01ce3b207ae515->leave($__internal_7b30d74e0e78a8aca62ed5a883bd1f9d5744ff053b838ca9de01ce3b207ae515_prof);

        
        $__internal_c828525f2641f07a026b69b7dcf7a57ea28fc8a90f88ba62d9a1b77c89fcefd8->leave($__internal_c828525f2641f07a026b69b7dcf7a57ea28fc8a90f88ba62d9a1b77c89fcefd8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c2fc29f0a385763a238d9207f3f33d7aebce1ac9fb4eecdaabe4ac9059647ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c2fc29f0a385763a238d9207f3f33d7aebce1ac9fb4eecdaabe4ac9059647ce->enter($__internal_5c2fc29f0a385763a238d9207f3f33d7aebce1ac9fb4eecdaabe4ac9059647ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7610c0572d3c7ad3eef5224a44a5144496d22bd296bb0bfa628fdbe1282b91c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7610c0572d3c7ad3eef5224a44a5144496d22bd296bb0bfa628fdbe1282b91c5->enter($__internal_7610c0572d3c7ad3eef5224a44a5144496d22bd296bb0bfa628fdbe1282b91c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_7610c0572d3c7ad3eef5224a44a5144496d22bd296bb0bfa628fdbe1282b91c5->leave($__internal_7610c0572d3c7ad3eef5224a44a5144496d22bd296bb0bfa628fdbe1282b91c5_prof);

        
        $__internal_5c2fc29f0a385763a238d9207f3f33d7aebce1ac9fb4eecdaabe4ac9059647ce->leave($__internal_5c2fc29f0a385763a238d9207f3f33d7aebce1ac9fb4eecdaabe4ac9059647ce_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
