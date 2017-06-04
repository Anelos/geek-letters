<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_2f19fef31504c581f2a8f4b6ef9848e4897c5c77f78c3d3ec65fc536235c39a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_af1bc6952d2d245e2947dd29c3fa4bab136b695d390bace810b1e6907b54014d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af1bc6952d2d245e2947dd29c3fa4bab136b695d390bace810b1e6907b54014d->enter($__internal_af1bc6952d2d245e2947dd29c3fa4bab136b695d390bace810b1e6907b54014d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_7441c4a1e701735a862b0c28a9d79f1b25b88e5aef2dabba41bd36c3a408671a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7441c4a1e701735a862b0c28a9d79f1b25b88e5aef2dabba41bd36c3a408671a->enter($__internal_7441c4a1e701735a862b0c28a9d79f1b25b88e5aef2dabba41bd36c3a408671a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af1bc6952d2d245e2947dd29c3fa4bab136b695d390bace810b1e6907b54014d->leave($__internal_af1bc6952d2d245e2947dd29c3fa4bab136b695d390bace810b1e6907b54014d_prof);

        
        $__internal_7441c4a1e701735a862b0c28a9d79f1b25b88e5aef2dabba41bd36c3a408671a->leave($__internal_7441c4a1e701735a862b0c28a9d79f1b25b88e5aef2dabba41bd36c3a408671a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_590134259e303c077d10ed1d297f8f92a168d51ed77af33d6897d5a03f205487 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_590134259e303c077d10ed1d297f8f92a168d51ed77af33d6897d5a03f205487->enter($__internal_590134259e303c077d10ed1d297f8f92a168d51ed77af33d6897d5a03f205487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ea5a06fbf3333b4436b5466a6b6f6571c4b9a17d51a2346e4c449a614495dff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea5a06fbf3333b4436b5466a6b6f6571c4b9a17d51a2346e4c449a614495dff5->enter($__internal_ea5a06fbf3333b4436b5466a6b6f6571c4b9a17d51a2346e4c449a614495dff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ea5a06fbf3333b4436b5466a6b6f6571c4b9a17d51a2346e4c449a614495dff5->leave($__internal_ea5a06fbf3333b4436b5466a6b6f6571c4b9a17d51a2346e4c449a614495dff5_prof);

        
        $__internal_590134259e303c077d10ed1d297f8f92a168d51ed77af33d6897d5a03f205487->leave($__internal_590134259e303c077d10ed1d297f8f92a168d51ed77af33d6897d5a03f205487_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_878bc2391d853573d94d1850b413ea114fc80ff97aa9fc7e42ae537f9f100563 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_878bc2391d853573d94d1850b413ea114fc80ff97aa9fc7e42ae537f9f100563->enter($__internal_878bc2391d853573d94d1850b413ea114fc80ff97aa9fc7e42ae537f9f100563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ad0ce2896f45017987b69aa84a76d9d3dcd0273f547c310f5c08e8757c9f817e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad0ce2896f45017987b69aa84a76d9d3dcd0273f547c310f5c08e8757c9f817e->enter($__internal_ad0ce2896f45017987b69aa84a76d9d3dcd0273f547c310f5c08e8757c9f817e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ad0ce2896f45017987b69aa84a76d9d3dcd0273f547c310f5c08e8757c9f817e->leave($__internal_ad0ce2896f45017987b69aa84a76d9d3dcd0273f547c310f5c08e8757c9f817e_prof);

        
        $__internal_878bc2391d853573d94d1850b413ea114fc80ff97aa9fc7e42ae537f9f100563->leave($__internal_878bc2391d853573d94d1850b413ea114fc80ff97aa9fc7e42ae537f9f100563_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f62da9477360f9ed5933bf7950ee798f1b59100d23946592fcfa262c4c833bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f62da9477360f9ed5933bf7950ee798f1b59100d23946592fcfa262c4c833bf->enter($__internal_9f62da9477360f9ed5933bf7950ee798f1b59100d23946592fcfa262c4c833bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_288124359ac46006a53481b98f8de47bed276e30885770078dcceeeb71f2b49b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_288124359ac46006a53481b98f8de47bed276e30885770078dcceeeb71f2b49b->enter($__internal_288124359ac46006a53481b98f8de47bed276e30885770078dcceeeb71f2b49b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_288124359ac46006a53481b98f8de47bed276e30885770078dcceeeb71f2b49b->leave($__internal_288124359ac46006a53481b98f8de47bed276e30885770078dcceeeb71f2b49b_prof);

        
        $__internal_9f62da9477360f9ed5933bf7950ee798f1b59100d23946592fcfa262c4c833bf->leave($__internal_9f62da9477360f9ed5933bf7950ee798f1b59100d23946592fcfa262c4c833bf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
