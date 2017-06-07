<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b6ff4c233f58c3c209269056744d87f6fd1a24c584bffcfbcd57f9c40b62fb80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63f10f79fec2b895e3e0f432868cbd59c5af6cb44084b9aa75d601e7953659d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63f10f79fec2b895e3e0f432868cbd59c5af6cb44084b9aa75d601e7953659d6->enter($__internal_63f10f79fec2b895e3e0f432868cbd59c5af6cb44084b9aa75d601e7953659d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b9e511ddeec8baaffd1e5b445ad0b9ce595499bc2879a8ef98bbffde5cf2046e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9e511ddeec8baaffd1e5b445ad0b9ce595499bc2879a8ef98bbffde5cf2046e->enter($__internal_b9e511ddeec8baaffd1e5b445ad0b9ce595499bc2879a8ef98bbffde5cf2046e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63f10f79fec2b895e3e0f432868cbd59c5af6cb44084b9aa75d601e7953659d6->leave($__internal_63f10f79fec2b895e3e0f432868cbd59c5af6cb44084b9aa75d601e7953659d6_prof);

        
        $__internal_b9e511ddeec8baaffd1e5b445ad0b9ce595499bc2879a8ef98bbffde5cf2046e->leave($__internal_b9e511ddeec8baaffd1e5b445ad0b9ce595499bc2879a8ef98bbffde5cf2046e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_59ec763a0b1f9148fe7dc88b116d2d51de27ec67906bb8765b5f25a83b5bb5ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59ec763a0b1f9148fe7dc88b116d2d51de27ec67906bb8765b5f25a83b5bb5ea->enter($__internal_59ec763a0b1f9148fe7dc88b116d2d51de27ec67906bb8765b5f25a83b5bb5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5ad8e5a279db6bfd765f6ea4499068bf04bee9e915d360c362b8c0d530a31c2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ad8e5a279db6bfd765f6ea4499068bf04bee9e915d360c362b8c0d530a31c2a->enter($__internal_5ad8e5a279db6bfd765f6ea4499068bf04bee9e915d360c362b8c0d530a31c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_5ad8e5a279db6bfd765f6ea4499068bf04bee9e915d360c362b8c0d530a31c2a->leave($__internal_5ad8e5a279db6bfd765f6ea4499068bf04bee9e915d360c362b8c0d530a31c2a_prof);

        
        $__internal_59ec763a0b1f9148fe7dc88b116d2d51de27ec67906bb8765b5f25a83b5bb5ea->leave($__internal_59ec763a0b1f9148fe7dc88b116d2d51de27ec67906bb8765b5f25a83b5bb5ea_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc68a89e6b39043d5ce0fdebbf1f23041dbb8a5b2496afb2bb7876a9eb63b69b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc68a89e6b39043d5ce0fdebbf1f23041dbb8a5b2496afb2bb7876a9eb63b69b->enter($__internal_dc68a89e6b39043d5ce0fdebbf1f23041dbb8a5b2496afb2bb7876a9eb63b69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_749bfe9d1e79059313a8704565f7146634d11919f76bf2577def345a3de98a73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_749bfe9d1e79059313a8704565f7146634d11919f76bf2577def345a3de98a73->enter($__internal_749bfe9d1e79059313a8704565f7146634d11919f76bf2577def345a3de98a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_749bfe9d1e79059313a8704565f7146634d11919f76bf2577def345a3de98a73->leave($__internal_749bfe9d1e79059313a8704565f7146634d11919f76bf2577def345a3de98a73_prof);

        
        $__internal_dc68a89e6b39043d5ce0fdebbf1f23041dbb8a5b2496afb2bb7876a9eb63b69b->leave($__internal_dc68a89e6b39043d5ce0fdebbf1f23041dbb8a5b2496afb2bb7876a9eb63b69b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_32fd623f10994e8da1e862f09a30ac9311035774465d2eb90e1ddd148cf2f012 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32fd623f10994e8da1e862f09a30ac9311035774465d2eb90e1ddd148cf2f012->enter($__internal_32fd623f10994e8da1e862f09a30ac9311035774465d2eb90e1ddd148cf2f012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9d2103a0011b15a73f559068b4e59a9fd541a8367df3f2892444aaef764340f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d2103a0011b15a73f559068b4e59a9fd541a8367df3f2892444aaef764340f8->enter($__internal_9d2103a0011b15a73f559068b4e59a9fd541a8367df3f2892444aaef764340f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_9d2103a0011b15a73f559068b4e59a9fd541a8367df3f2892444aaef764340f8->leave($__internal_9d2103a0011b15a73f559068b4e59a9fd541a8367df3f2892444aaef764340f8_prof);

        
        $__internal_32fd623f10994e8da1e862f09a30ac9311035774465d2eb90e1ddd148cf2f012->leave($__internal_32fd623f10994e8da1e862f09a30ac9311035774465d2eb90e1ddd148cf2f012_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
