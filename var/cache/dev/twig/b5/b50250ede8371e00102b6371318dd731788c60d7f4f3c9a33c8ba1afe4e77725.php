<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b6ff4c233f58c3c209269056744d87f6fd1a24c584bffcfbcd57f9c40b62fb80 extends Twig_Template
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
        $__internal_bbfaa5ac53f52c9c40803a5cc9214fb6947af4c04b65afe2f872df47c8919340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbfaa5ac53f52c9c40803a5cc9214fb6947af4c04b65afe2f872df47c8919340->enter($__internal_bbfaa5ac53f52c9c40803a5cc9214fb6947af4c04b65afe2f872df47c8919340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_55b23963cb337de6af2a7cd47e9d6ea0f9dd4872ba900ed4f8d14fec8f15749f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55b23963cb337de6af2a7cd47e9d6ea0f9dd4872ba900ed4f8d14fec8f15749f->enter($__internal_55b23963cb337de6af2a7cd47e9d6ea0f9dd4872ba900ed4f8d14fec8f15749f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbfaa5ac53f52c9c40803a5cc9214fb6947af4c04b65afe2f872df47c8919340->leave($__internal_bbfaa5ac53f52c9c40803a5cc9214fb6947af4c04b65afe2f872df47c8919340_prof);

        
        $__internal_55b23963cb337de6af2a7cd47e9d6ea0f9dd4872ba900ed4f8d14fec8f15749f->leave($__internal_55b23963cb337de6af2a7cd47e9d6ea0f9dd4872ba900ed4f8d14fec8f15749f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1e21c55626c627969d669b5b702590c2d2a2d2044012d63af4ad0cfa3d2314d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e21c55626c627969d669b5b702590c2d2a2d2044012d63af4ad0cfa3d2314d6->enter($__internal_1e21c55626c627969d669b5b702590c2d2a2d2044012d63af4ad0cfa3d2314d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a890536d2bf950dedd8552d909d09b27712ca582b92e175cc385011303361d41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a890536d2bf950dedd8552d909d09b27712ca582b92e175cc385011303361d41->enter($__internal_a890536d2bf950dedd8552d909d09b27712ca582b92e175cc385011303361d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a890536d2bf950dedd8552d909d09b27712ca582b92e175cc385011303361d41->leave($__internal_a890536d2bf950dedd8552d909d09b27712ca582b92e175cc385011303361d41_prof);

        
        $__internal_1e21c55626c627969d669b5b702590c2d2a2d2044012d63af4ad0cfa3d2314d6->leave($__internal_1e21c55626c627969d669b5b702590c2d2a2d2044012d63af4ad0cfa3d2314d6_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b9c70ca59d7bc5246f22ee6aae6ce2b45162c401cde4d1ab2f59db896d3f5cfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9c70ca59d7bc5246f22ee6aae6ce2b45162c401cde4d1ab2f59db896d3f5cfe->enter($__internal_b9c70ca59d7bc5246f22ee6aae6ce2b45162c401cde4d1ab2f59db896d3f5cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ff5e5062398a22969d37f5d3c8dfa6fad10c670ca830b996218997f88668a2dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff5e5062398a22969d37f5d3c8dfa6fad10c670ca830b996218997f88668a2dd->enter($__internal_ff5e5062398a22969d37f5d3c8dfa6fad10c670ca830b996218997f88668a2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ff5e5062398a22969d37f5d3c8dfa6fad10c670ca830b996218997f88668a2dd->leave($__internal_ff5e5062398a22969d37f5d3c8dfa6fad10c670ca830b996218997f88668a2dd_prof);

        
        $__internal_b9c70ca59d7bc5246f22ee6aae6ce2b45162c401cde4d1ab2f59db896d3f5cfe->leave($__internal_b9c70ca59d7bc5246f22ee6aae6ce2b45162c401cde4d1ab2f59db896d3f5cfe_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae06cec3b5b402506da95fcc4c4fd1a0c510f5f74a9a6ef25cd8970e1c2d79a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae06cec3b5b402506da95fcc4c4fd1a0c510f5f74a9a6ef25cd8970e1c2d79a2->enter($__internal_ae06cec3b5b402506da95fcc4c4fd1a0c510f5f74a9a6ef25cd8970e1c2d79a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_10d22b7178d15d8ff85161912df30fd497cde8a12f186167941bf7d23a6fc7f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10d22b7178d15d8ff85161912df30fd497cde8a12f186167941bf7d23a6fc7f8->enter($__internal_10d22b7178d15d8ff85161912df30fd497cde8a12f186167941bf7d23a6fc7f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_10d22b7178d15d8ff85161912df30fd497cde8a12f186167941bf7d23a6fc7f8->leave($__internal_10d22b7178d15d8ff85161912df30fd497cde8a12f186167941bf7d23a6fc7f8_prof);

        
        $__internal_ae06cec3b5b402506da95fcc4c4fd1a0c510f5f74a9a6ef25cd8970e1c2d79a2->leave($__internal_ae06cec3b5b402506da95fcc4c4fd1a0c510f5f74a9a6ef25cd8970e1c2d79a2_prof);

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
