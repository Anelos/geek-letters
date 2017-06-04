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
        $__internal_9dc62299eeadbc8d1c34d25dba3c19ed054e270ba3a7acc5b625ba6359d105eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dc62299eeadbc8d1c34d25dba3c19ed054e270ba3a7acc5b625ba6359d105eb->enter($__internal_9dc62299eeadbc8d1c34d25dba3c19ed054e270ba3a7acc5b625ba6359d105eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_2fb96c2cd19993adff3afe5652fc27e28d5de7930fa00e92af407198a3d4decc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fb96c2cd19993adff3afe5652fc27e28d5de7930fa00e92af407198a3d4decc->enter($__internal_2fb96c2cd19993adff3afe5652fc27e28d5de7930fa00e92af407198a3d4decc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9dc62299eeadbc8d1c34d25dba3c19ed054e270ba3a7acc5b625ba6359d105eb->leave($__internal_9dc62299eeadbc8d1c34d25dba3c19ed054e270ba3a7acc5b625ba6359d105eb_prof);

        
        $__internal_2fb96c2cd19993adff3afe5652fc27e28d5de7930fa00e92af407198a3d4decc->leave($__internal_2fb96c2cd19993adff3afe5652fc27e28d5de7930fa00e92af407198a3d4decc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_25b05ff3770ad0ef48477fee8dd79917f5dfd03644f771a4320892f1e5369a8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25b05ff3770ad0ef48477fee8dd79917f5dfd03644f771a4320892f1e5369a8f->enter($__internal_25b05ff3770ad0ef48477fee8dd79917f5dfd03644f771a4320892f1e5369a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_26c9858b884547ca8cc3497433e8923abcbbee559be0db07947ccc392e7aa68d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26c9858b884547ca8cc3497433e8923abcbbee559be0db07947ccc392e7aa68d->enter($__internal_26c9858b884547ca8cc3497433e8923abcbbee559be0db07947ccc392e7aa68d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_26c9858b884547ca8cc3497433e8923abcbbee559be0db07947ccc392e7aa68d->leave($__internal_26c9858b884547ca8cc3497433e8923abcbbee559be0db07947ccc392e7aa68d_prof);

        
        $__internal_25b05ff3770ad0ef48477fee8dd79917f5dfd03644f771a4320892f1e5369a8f->leave($__internal_25b05ff3770ad0ef48477fee8dd79917f5dfd03644f771a4320892f1e5369a8f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e62a989812458bcc9bf2d2f71876fe4d8c6b7506928c69546b4b75641eaae15f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e62a989812458bcc9bf2d2f71876fe4d8c6b7506928c69546b4b75641eaae15f->enter($__internal_e62a989812458bcc9bf2d2f71876fe4d8c6b7506928c69546b4b75641eaae15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_027f423b43f6f5d3b37cc013948a2eefee53ccceb833d399f0e856fdbe5e75a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_027f423b43f6f5d3b37cc013948a2eefee53ccceb833d399f0e856fdbe5e75a5->enter($__internal_027f423b43f6f5d3b37cc013948a2eefee53ccceb833d399f0e856fdbe5e75a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_027f423b43f6f5d3b37cc013948a2eefee53ccceb833d399f0e856fdbe5e75a5->leave($__internal_027f423b43f6f5d3b37cc013948a2eefee53ccceb833d399f0e856fdbe5e75a5_prof);

        
        $__internal_e62a989812458bcc9bf2d2f71876fe4d8c6b7506928c69546b4b75641eaae15f->leave($__internal_e62a989812458bcc9bf2d2f71876fe4d8c6b7506928c69546b4b75641eaae15f_prof);

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
