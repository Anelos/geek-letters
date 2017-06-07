<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_ac385bbbda1c572bcd3b28a04c62710227e8b9bacf1ac6ab6d8d08d20130a0af extends Twig_Template
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
        $__internal_b54eaa015b3ac6996d3793003460ba7ecafac679806ad20a93c5fe8120a42690 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b54eaa015b3ac6996d3793003460ba7ecafac679806ad20a93c5fe8120a42690->enter($__internal_b54eaa015b3ac6996d3793003460ba7ecafac679806ad20a93c5fe8120a42690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_574ca870ba3ae2c3264ddced3f15848dfa21481c13f8c218fc57dfe6b2c45a49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_574ca870ba3ae2c3264ddced3f15848dfa21481c13f8c218fc57dfe6b2c45a49->enter($__internal_574ca870ba3ae2c3264ddced3f15848dfa21481c13f8c218fc57dfe6b2c45a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b54eaa015b3ac6996d3793003460ba7ecafac679806ad20a93c5fe8120a42690->leave($__internal_b54eaa015b3ac6996d3793003460ba7ecafac679806ad20a93c5fe8120a42690_prof);

        
        $__internal_574ca870ba3ae2c3264ddced3f15848dfa21481c13f8c218fc57dfe6b2c45a49->leave($__internal_574ca870ba3ae2c3264ddced3f15848dfa21481c13f8c218fc57dfe6b2c45a49_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_31c1437655a45e5fb16366b7399b331f353d646f065860bb92c950b98beebd2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31c1437655a45e5fb16366b7399b331f353d646f065860bb92c950b98beebd2e->enter($__internal_31c1437655a45e5fb16366b7399b331f353d646f065860bb92c950b98beebd2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_573f44afd10db6e6ddf18cbbb4d4b94c04cb042b5bd28bc2f5ecc5f5547ffe46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_573f44afd10db6e6ddf18cbbb4d4b94c04cb042b5bd28bc2f5ecc5f5547ffe46->enter($__internal_573f44afd10db6e6ddf18cbbb4d4b94c04cb042b5bd28bc2f5ecc5f5547ffe46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_573f44afd10db6e6ddf18cbbb4d4b94c04cb042b5bd28bc2f5ecc5f5547ffe46->leave($__internal_573f44afd10db6e6ddf18cbbb4d4b94c04cb042b5bd28bc2f5ecc5f5547ffe46_prof);

        
        $__internal_31c1437655a45e5fb16366b7399b331f353d646f065860bb92c950b98beebd2e->leave($__internal_31c1437655a45e5fb16366b7399b331f353d646f065860bb92c950b98beebd2e_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d8c28382c18519352e447df7b14ba654b41ed517b7936fd1f857e63ebda62dc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8c28382c18519352e447df7b14ba654b41ed517b7936fd1f857e63ebda62dc2->enter($__internal_d8c28382c18519352e447df7b14ba654b41ed517b7936fd1f857e63ebda62dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_12d37179d93ad525bcb7a918e572379710bc4eae3b19f276a315cb02ba55a04f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12d37179d93ad525bcb7a918e572379710bc4eae3b19f276a315cb02ba55a04f->enter($__internal_12d37179d93ad525bcb7a918e572379710bc4eae3b19f276a315cb02ba55a04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_12d37179d93ad525bcb7a918e572379710bc4eae3b19f276a315cb02ba55a04f->leave($__internal_12d37179d93ad525bcb7a918e572379710bc4eae3b19f276a315cb02ba55a04f_prof);

        
        $__internal_d8c28382c18519352e447df7b14ba654b41ed517b7936fd1f857e63ebda62dc2->leave($__internal_d8c28382c18519352e447df7b14ba654b41ed517b7936fd1f857e63ebda62dc2_prof);

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
