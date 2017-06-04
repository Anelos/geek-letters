<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_9802fbd4202b34e877ca8263fbe4e1efeb97707f48f55732ff8c7023a77d4237 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c816b886d5f34c7b76d373a72943bc9a5bb91f5b5b7bd260c3d6076ee09bd22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c816b886d5f34c7b76d373a72943bc9a5bb91f5b5b7bd260c3d6076ee09bd22->enter($__internal_3c816b886d5f34c7b76d373a72943bc9a5bb91f5b5b7bd260c3d6076ee09bd22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_5420f6a11f10c5c930d740b6e2eac87c45bc095ce21283b268b2f8ff03706448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5420f6a11f10c5c930d740b6e2eac87c45bc095ce21283b268b2f8ff03706448->enter($__internal_5420f6a11f10c5c930d740b6e2eac87c45bc095ce21283b268b2f8ff03706448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c816b886d5f34c7b76d373a72943bc9a5bb91f5b5b7bd260c3d6076ee09bd22->leave($__internal_3c816b886d5f34c7b76d373a72943bc9a5bb91f5b5b7bd260c3d6076ee09bd22_prof);

        
        $__internal_5420f6a11f10c5c930d740b6e2eac87c45bc095ce21283b268b2f8ff03706448->leave($__internal_5420f6a11f10c5c930d740b6e2eac87c45bc095ce21283b268b2f8ff03706448_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_d4d70ca071a4f806a592f2ab7925e766fcf763783e15b592d24dca67b77d53e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4d70ca071a4f806a592f2ab7925e766fcf763783e15b592d24dca67b77d53e3->enter($__internal_d4d70ca071a4f806a592f2ab7925e766fcf763783e15b592d24dca67b77d53e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_e704315ef6203ebdb974cfd8b9fff9ef05d990f45b6a30927e9d9663b80a567f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e704315ef6203ebdb974cfd8b9fff9ef05d990f45b6a30927e9d9663b80a567f->enter($__internal_e704315ef6203ebdb974cfd8b9fff9ef05d990f45b6a30927e9d9663b80a567f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_e704315ef6203ebdb974cfd8b9fff9ef05d990f45b6a30927e9d9663b80a567f->leave($__internal_e704315ef6203ebdb974cfd8b9fff9ef05d990f45b6a30927e9d9663b80a567f_prof);

        
        $__internal_d4d70ca071a4f806a592f2ab7925e766fcf763783e15b592d24dca67b77d53e3->leave($__internal_d4d70ca071a4f806a592f2ab7925e766fcf763783e15b592d24dca67b77d53e3_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_32b6f34972e247c07670d733d5264e3e00c385497df1cd081b807f114fd3d101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32b6f34972e247c07670d733d5264e3e00c385497df1cd081b807f114fd3d101->enter($__internal_32b6f34972e247c07670d733d5264e3e00c385497df1cd081b807f114fd3d101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_33360152a6ce8ec47203c45e6f3d923d50442e1d79f950a637502855ee289136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33360152a6ce8ec47203c45e6f3d923d50442e1d79f950a637502855ee289136->enter($__internal_33360152a6ce8ec47203c45e6f3d923d50442e1d79f950a637502855ee289136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_33360152a6ce8ec47203c45e6f3d923d50442e1d79f950a637502855ee289136->leave($__internal_33360152a6ce8ec47203c45e6f3d923d50442e1d79f950a637502855ee289136_prof);

        
        $__internal_32b6f34972e247c07670d733d5264e3e00c385497df1cd081b807f114fd3d101->leave($__internal_32b6f34972e247c07670d733d5264e3e00c385497df1cd081b807f114fd3d101_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
