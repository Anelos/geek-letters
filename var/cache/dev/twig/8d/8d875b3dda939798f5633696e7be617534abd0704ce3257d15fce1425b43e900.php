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
        $__internal_21aceab08df9d415fe43e752e224c44f0c3f31a0fe2a01bf85c0b45852e15f61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21aceab08df9d415fe43e752e224c44f0c3f31a0fe2a01bf85c0b45852e15f61->enter($__internal_21aceab08df9d415fe43e752e224c44f0c3f31a0fe2a01bf85c0b45852e15f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_8a334426b51a5eb88116974c8594268f97fc572e37773a43be83f2d9116e4a4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a334426b51a5eb88116974c8594268f97fc572e37773a43be83f2d9116e4a4c->enter($__internal_8a334426b51a5eb88116974c8594268f97fc572e37773a43be83f2d9116e4a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21aceab08df9d415fe43e752e224c44f0c3f31a0fe2a01bf85c0b45852e15f61->leave($__internal_21aceab08df9d415fe43e752e224c44f0c3f31a0fe2a01bf85c0b45852e15f61_prof);

        
        $__internal_8a334426b51a5eb88116974c8594268f97fc572e37773a43be83f2d9116e4a4c->leave($__internal_8a334426b51a5eb88116974c8594268f97fc572e37773a43be83f2d9116e4a4c_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_68ba83c87e565324d5d3da3d96182ca82d67a21d000aac4e862fdff494a6e8dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68ba83c87e565324d5d3da3d96182ca82d67a21d000aac4e862fdff494a6e8dd->enter($__internal_68ba83c87e565324d5d3da3d96182ca82d67a21d000aac4e862fdff494a6e8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_d639a8ff538ce5f88d73550b67ec6d95bdc6a52fb3c6069af566eb009fe714e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d639a8ff538ce5f88d73550b67ec6d95bdc6a52fb3c6069af566eb009fe714e6->enter($__internal_d639a8ff538ce5f88d73550b67ec6d95bdc6a52fb3c6069af566eb009fe714e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_d639a8ff538ce5f88d73550b67ec6d95bdc6a52fb3c6069af566eb009fe714e6->leave($__internal_d639a8ff538ce5f88d73550b67ec6d95bdc6a52fb3c6069af566eb009fe714e6_prof);

        
        $__internal_68ba83c87e565324d5d3da3d96182ca82d67a21d000aac4e862fdff494a6e8dd->leave($__internal_68ba83c87e565324d5d3da3d96182ca82d67a21d000aac4e862fdff494a6e8dd_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b0f82c1a8e72fab326d7fe9c6943e3c096a3089cbe9e40698a3dcd462e122356 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0f82c1a8e72fab326d7fe9c6943e3c096a3089cbe9e40698a3dcd462e122356->enter($__internal_b0f82c1a8e72fab326d7fe9c6943e3c096a3089cbe9e40698a3dcd462e122356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7a1608df659c4e82680c2406fe64bf87a497f5c631e12c284e74c837bf59cb8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a1608df659c4e82680c2406fe64bf87a497f5c631e12c284e74c837bf59cb8e->enter($__internal_7a1608df659c4e82680c2406fe64bf87a497f5c631e12c284e74c837bf59cb8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_7a1608df659c4e82680c2406fe64bf87a497f5c631e12c284e74c837bf59cb8e->leave($__internal_7a1608df659c4e82680c2406fe64bf87a497f5c631e12c284e74c837bf59cb8e_prof);

        
        $__internal_b0f82c1a8e72fab326d7fe9c6943e3c096a3089cbe9e40698a3dcd462e122356->leave($__internal_b0f82c1a8e72fab326d7fe9c6943e3c096a3089cbe9e40698a3dcd462e122356_prof);

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
