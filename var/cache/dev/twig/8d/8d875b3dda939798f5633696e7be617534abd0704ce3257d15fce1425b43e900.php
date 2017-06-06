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
        $__internal_f771b59126468117b5c675e7a2fc69eae6b4340b90e075cca432e64ad3378b4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f771b59126468117b5c675e7a2fc69eae6b4340b90e075cca432e64ad3378b4a->enter($__internal_f771b59126468117b5c675e7a2fc69eae6b4340b90e075cca432e64ad3378b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_c7824dc45a8a3c126f51f1b99a754a117305d958c9d5d5fe28dade7991b2ccdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7824dc45a8a3c126f51f1b99a754a117305d958c9d5d5fe28dade7991b2ccdd->enter($__internal_c7824dc45a8a3c126f51f1b99a754a117305d958c9d5d5fe28dade7991b2ccdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f771b59126468117b5c675e7a2fc69eae6b4340b90e075cca432e64ad3378b4a->leave($__internal_f771b59126468117b5c675e7a2fc69eae6b4340b90e075cca432e64ad3378b4a_prof);

        
        $__internal_c7824dc45a8a3c126f51f1b99a754a117305d958c9d5d5fe28dade7991b2ccdd->leave($__internal_c7824dc45a8a3c126f51f1b99a754a117305d958c9d5d5fe28dade7991b2ccdd_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_b74f9e359b8a9a30cff569914492a4713352b44c1eb4f2ed5c854438d0f30d71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b74f9e359b8a9a30cff569914492a4713352b44c1eb4f2ed5c854438d0f30d71->enter($__internal_b74f9e359b8a9a30cff569914492a4713352b44c1eb4f2ed5c854438d0f30d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_cd29bd7da39148aad8b398453db11ec20547a25eea21cf0b2cd19314cdcd5caa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd29bd7da39148aad8b398453db11ec20547a25eea21cf0b2cd19314cdcd5caa->enter($__internal_cd29bd7da39148aad8b398453db11ec20547a25eea21cf0b2cd19314cdcd5caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_cd29bd7da39148aad8b398453db11ec20547a25eea21cf0b2cd19314cdcd5caa->leave($__internal_cd29bd7da39148aad8b398453db11ec20547a25eea21cf0b2cd19314cdcd5caa_prof);

        
        $__internal_b74f9e359b8a9a30cff569914492a4713352b44c1eb4f2ed5c854438d0f30d71->leave($__internal_b74f9e359b8a9a30cff569914492a4713352b44c1eb4f2ed5c854438d0f30d71_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b1ef82a98a67509272987aa121005eb7152d05e6eead9931bfaa5a4dbd323698 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1ef82a98a67509272987aa121005eb7152d05e6eead9931bfaa5a4dbd323698->enter($__internal_b1ef82a98a67509272987aa121005eb7152d05e6eead9931bfaa5a4dbd323698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fec6cb00870871b6416de9cbe0a753754caf7523fe6a78292e64d9ade2059217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec6cb00870871b6416de9cbe0a753754caf7523fe6a78292e64d9ade2059217->enter($__internal_fec6cb00870871b6416de9cbe0a753754caf7523fe6a78292e64d9ade2059217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_fec6cb00870871b6416de9cbe0a753754caf7523fe6a78292e64d9ade2059217->leave($__internal_fec6cb00870871b6416de9cbe0a753754caf7523fe6a78292e64d9ade2059217_prof);

        
        $__internal_b1ef82a98a67509272987aa121005eb7152d05e6eead9931bfaa5a4dbd323698->leave($__internal_b1ef82a98a67509272987aa121005eb7152d05e6eead9931bfaa5a4dbd323698_prof);

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
