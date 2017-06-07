<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_15247b897b42379b1e3aa331aad2f031225d862385dfd49831cefb8723db4133 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6875cd4d83a6ef6e0bf4487613a13d6a3b27140f620ae8e3bede1b9d5d7eb3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6875cd4d83a6ef6e0bf4487613a13d6a3b27140f620ae8e3bede1b9d5d7eb3f->enter($__internal_f6875cd4d83a6ef6e0bf4487613a13d6a3b27140f620ae8e3bede1b9d5d7eb3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_d2b8c196331f2e9aa9080c64c11c48e6c0a330d2a13630b60e84309d230c7471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2b8c196331f2e9aa9080c64c11c48e6c0a330d2a13630b60e84309d230c7471->enter($__internal_d2b8c196331f2e9aa9080c64c11c48e6c0a330d2a13630b60e84309d230c7471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6875cd4d83a6ef6e0bf4487613a13d6a3b27140f620ae8e3bede1b9d5d7eb3f->leave($__internal_f6875cd4d83a6ef6e0bf4487613a13d6a3b27140f620ae8e3bede1b9d5d7eb3f_prof);

        
        $__internal_d2b8c196331f2e9aa9080c64c11c48e6c0a330d2a13630b60e84309d230c7471->leave($__internal_d2b8c196331f2e9aa9080c64c11c48e6c0a330d2a13630b60e84309d230c7471_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_25537bab5189175daa2387c3f0eb299c58d76529e26cd98a9dea2c99a60528dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25537bab5189175daa2387c3f0eb299c58d76529e26cd98a9dea2c99a60528dd->enter($__internal_25537bab5189175daa2387c3f0eb299c58d76529e26cd98a9dea2c99a60528dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b58f946604128df3fd11ade3a1bc7a12726e6f9dd71b99cf27f5af6968f95f3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b58f946604128df3fd11ade3a1bc7a12726e6f9dd71b99cf27f5af6968f95f3f->enter($__internal_b58f946604128df3fd11ade3a1bc7a12726e6f9dd71b99cf27f5af6968f95f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b58f946604128df3fd11ade3a1bc7a12726e6f9dd71b99cf27f5af6968f95f3f->leave($__internal_b58f946604128df3fd11ade3a1bc7a12726e6f9dd71b99cf27f5af6968f95f3f_prof);

        
        $__internal_25537bab5189175daa2387c3f0eb299c58d76529e26cd98a9dea2c99a60528dd->leave($__internal_25537bab5189175daa2387c3f0eb299c58d76529e26cd98a9dea2c99a60528dd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_73e35fc37e046f17df05aff086981aeaa2695fcc083173e322b1cf50553a4147 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73e35fc37e046f17df05aff086981aeaa2695fcc083173e322b1cf50553a4147->enter($__internal_73e35fc37e046f17df05aff086981aeaa2695fcc083173e322b1cf50553a4147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9e2933a157ee860d85b230ed65d157fc5591f344a40a7a0f0fa131ecd717e92d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e2933a157ee860d85b230ed65d157fc5591f344a40a7a0f0fa131ecd717e92d->enter($__internal_9e2933a157ee860d85b230ed65d157fc5591f344a40a7a0f0fa131ecd717e92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9e2933a157ee860d85b230ed65d157fc5591f344a40a7a0f0fa131ecd717e92d->leave($__internal_9e2933a157ee860d85b230ed65d157fc5591f344a40a7a0f0fa131ecd717e92d_prof);

        
        $__internal_73e35fc37e046f17df05aff086981aeaa2695fcc083173e322b1cf50553a4147->leave($__internal_73e35fc37e046f17df05aff086981aeaa2695fcc083173e322b1cf50553a4147_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e7709e6ec46a95024bd893d93756ce36c056e0ca184ffba0e4d7b5532ae3aa36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7709e6ec46a95024bd893d93756ce36c056e0ca184ffba0e4d7b5532ae3aa36->enter($__internal_e7709e6ec46a95024bd893d93756ce36c056e0ca184ffba0e4d7b5532ae3aa36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3c5c66f5350e88fb53822d8d4e1ec1cb200c363824f5b2ca746cf0e69d5f9209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c5c66f5350e88fb53822d8d4e1ec1cb200c363824f5b2ca746cf0e69d5f9209->enter($__internal_3c5c66f5350e88fb53822d8d4e1ec1cb200c363824f5b2ca746cf0e69d5f9209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3c5c66f5350e88fb53822d8d4e1ec1cb200c363824f5b2ca746cf0e69d5f9209->leave($__internal_3c5c66f5350e88fb53822d8d4e1ec1cb200c363824f5b2ca746cf0e69d5f9209_prof);

        
        $__internal_e7709e6ec46a95024bd893d93756ce36c056e0ca184ffba0e4d7b5532ae3aa36->leave($__internal_e7709e6ec46a95024bd893d93756ce36c056e0ca184ffba0e4d7b5532ae3aa36_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
