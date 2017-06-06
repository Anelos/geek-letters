<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_98caca510fd9a395c9c00d178007a9238a1bd7023b367741e8bdd49f4109843f extends Twig_Template
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
        $__internal_b088babe717dc9b09943336e3bd4a291d22a899dcce8efc80fe45d7e976e5097 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b088babe717dc9b09943336e3bd4a291d22a899dcce8efc80fe45d7e976e5097->enter($__internal_b088babe717dc9b09943336e3bd4a291d22a899dcce8efc80fe45d7e976e5097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_a5a848268a2a7403b2e6e852ad6cd48496caba4d3c83d087aa5496b9b97f49d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5a848268a2a7403b2e6e852ad6cd48496caba4d3c83d087aa5496b9b97f49d7->enter($__internal_a5a848268a2a7403b2e6e852ad6cd48496caba4d3c83d087aa5496b9b97f49d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b088babe717dc9b09943336e3bd4a291d22a899dcce8efc80fe45d7e976e5097->leave($__internal_b088babe717dc9b09943336e3bd4a291d22a899dcce8efc80fe45d7e976e5097_prof);

        
        $__internal_a5a848268a2a7403b2e6e852ad6cd48496caba4d3c83d087aa5496b9b97f49d7->leave($__internal_a5a848268a2a7403b2e6e852ad6cd48496caba4d3c83d087aa5496b9b97f49d7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9c1e3644996aab114ee3906d1a28706de963fb47ef28f9054983f94fc1264b2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c1e3644996aab114ee3906d1a28706de963fb47ef28f9054983f94fc1264b2d->enter($__internal_9c1e3644996aab114ee3906d1a28706de963fb47ef28f9054983f94fc1264b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8a5ccaf5388b2f02ae993fc079f611daa0d941af90d3f1365595a63d09f2c922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a5ccaf5388b2f02ae993fc079f611daa0d941af90d3f1365595a63d09f2c922->enter($__internal_8a5ccaf5388b2f02ae993fc079f611daa0d941af90d3f1365595a63d09f2c922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_8a5ccaf5388b2f02ae993fc079f611daa0d941af90d3f1365595a63d09f2c922->leave($__internal_8a5ccaf5388b2f02ae993fc079f611daa0d941af90d3f1365595a63d09f2c922_prof);

        
        $__internal_9c1e3644996aab114ee3906d1a28706de963fb47ef28f9054983f94fc1264b2d->leave($__internal_9c1e3644996aab114ee3906d1a28706de963fb47ef28f9054983f94fc1264b2d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_98bc287d5f14cc2f1c7a9f779f9f62d1f76de829147bd347c3030d74bede266a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98bc287d5f14cc2f1c7a9f779f9f62d1f76de829147bd347c3030d74bede266a->enter($__internal_98bc287d5f14cc2f1c7a9f779f9f62d1f76de829147bd347c3030d74bede266a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4ee1c58b363109e3f8ccd0a20e3ce5642ad2a5d45bbbc16c243b68d633210e63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ee1c58b363109e3f8ccd0a20e3ce5642ad2a5d45bbbc16c243b68d633210e63->enter($__internal_4ee1c58b363109e3f8ccd0a20e3ce5642ad2a5d45bbbc16c243b68d633210e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4ee1c58b363109e3f8ccd0a20e3ce5642ad2a5d45bbbc16c243b68d633210e63->leave($__internal_4ee1c58b363109e3f8ccd0a20e3ce5642ad2a5d45bbbc16c243b68d633210e63_prof);

        
        $__internal_98bc287d5f14cc2f1c7a9f779f9f62d1f76de829147bd347c3030d74bede266a->leave($__internal_98bc287d5f14cc2f1c7a9f779f9f62d1f76de829147bd347c3030d74bede266a_prof);

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
