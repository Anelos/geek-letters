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
        $__internal_2c510c92425efab69e4c2989031b1c3004b5c9102e719c9754e8702e469160e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c510c92425efab69e4c2989031b1c3004b5c9102e719c9754e8702e469160e3->enter($__internal_2c510c92425efab69e4c2989031b1c3004b5c9102e719c9754e8702e469160e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_9d442ab6e273d3855309714b4e320c6b9d89d0db127b9a971dc90274f4b507f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d442ab6e273d3855309714b4e320c6b9d89d0db127b9a971dc90274f4b507f9->enter($__internal_9d442ab6e273d3855309714b4e320c6b9d89d0db127b9a971dc90274f4b507f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c510c92425efab69e4c2989031b1c3004b5c9102e719c9754e8702e469160e3->leave($__internal_2c510c92425efab69e4c2989031b1c3004b5c9102e719c9754e8702e469160e3_prof);

        
        $__internal_9d442ab6e273d3855309714b4e320c6b9d89d0db127b9a971dc90274f4b507f9->leave($__internal_9d442ab6e273d3855309714b4e320c6b9d89d0db127b9a971dc90274f4b507f9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_95c339dacef5c3d340340c933e9fdbfa80a440591118a5d8f662b06e2da492b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95c339dacef5c3d340340c933e9fdbfa80a440591118a5d8f662b06e2da492b7->enter($__internal_95c339dacef5c3d340340c933e9fdbfa80a440591118a5d8f662b06e2da492b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_63ff9d129a0c5be21bf35a38c985b81f04206a5bc270f81bdf8628861c8cb77b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63ff9d129a0c5be21bf35a38c985b81f04206a5bc270f81bdf8628861c8cb77b->enter($__internal_63ff9d129a0c5be21bf35a38c985b81f04206a5bc270f81bdf8628861c8cb77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_63ff9d129a0c5be21bf35a38c985b81f04206a5bc270f81bdf8628861c8cb77b->leave($__internal_63ff9d129a0c5be21bf35a38c985b81f04206a5bc270f81bdf8628861c8cb77b_prof);

        
        $__internal_95c339dacef5c3d340340c933e9fdbfa80a440591118a5d8f662b06e2da492b7->leave($__internal_95c339dacef5c3d340340c933e9fdbfa80a440591118a5d8f662b06e2da492b7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_31d72761e9c7e69b81b6199c36c64f1c1629d941de6aab819b3464741681a957 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31d72761e9c7e69b81b6199c36c64f1c1629d941de6aab819b3464741681a957->enter($__internal_31d72761e9c7e69b81b6199c36c64f1c1629d941de6aab819b3464741681a957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_625d347977bbb8cda3711514468b78402302e4c2eca51121924e878c40dc2090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_625d347977bbb8cda3711514468b78402302e4c2eca51121924e878c40dc2090->enter($__internal_625d347977bbb8cda3711514468b78402302e4c2eca51121924e878c40dc2090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_625d347977bbb8cda3711514468b78402302e4c2eca51121924e878c40dc2090->leave($__internal_625d347977bbb8cda3711514468b78402302e4c2eca51121924e878c40dc2090_prof);

        
        $__internal_31d72761e9c7e69b81b6199c36c64f1c1629d941de6aab819b3464741681a957->leave($__internal_31d72761e9c7e69b81b6199c36c64f1c1629d941de6aab819b3464741681a957_prof);

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
