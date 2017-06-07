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
        $__internal_c8036374884772d2a4830f39c89847d0ae4c893e6a1ee6451738661d9fe439f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8036374884772d2a4830f39c89847d0ae4c893e6a1ee6451738661d9fe439f3->enter($__internal_c8036374884772d2a4830f39c89847d0ae4c893e6a1ee6451738661d9fe439f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_eb1a0a8dbdb60cc5951ef1788deec669f625d19b10952e6daef6e8f8a986d7ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb1a0a8dbdb60cc5951ef1788deec669f625d19b10952e6daef6e8f8a986d7ac->enter($__internal_eb1a0a8dbdb60cc5951ef1788deec669f625d19b10952e6daef6e8f8a986d7ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8036374884772d2a4830f39c89847d0ae4c893e6a1ee6451738661d9fe439f3->leave($__internal_c8036374884772d2a4830f39c89847d0ae4c893e6a1ee6451738661d9fe439f3_prof);

        
        $__internal_eb1a0a8dbdb60cc5951ef1788deec669f625d19b10952e6daef6e8f8a986d7ac->leave($__internal_eb1a0a8dbdb60cc5951ef1788deec669f625d19b10952e6daef6e8f8a986d7ac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_24d307ff9c8decc66c444e5301d7b8942581b4c32d16122616444731da4dfa54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24d307ff9c8decc66c444e5301d7b8942581b4c32d16122616444731da4dfa54->enter($__internal_24d307ff9c8decc66c444e5301d7b8942581b4c32d16122616444731da4dfa54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_83907b5e302baeb2be74b74d94610a15f63ee78b54469fbf4c00ae6b83ba30f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83907b5e302baeb2be74b74d94610a15f63ee78b54469fbf4c00ae6b83ba30f4->enter($__internal_83907b5e302baeb2be74b74d94610a15f63ee78b54469fbf4c00ae6b83ba30f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_83907b5e302baeb2be74b74d94610a15f63ee78b54469fbf4c00ae6b83ba30f4->leave($__internal_83907b5e302baeb2be74b74d94610a15f63ee78b54469fbf4c00ae6b83ba30f4_prof);

        
        $__internal_24d307ff9c8decc66c444e5301d7b8942581b4c32d16122616444731da4dfa54->leave($__internal_24d307ff9c8decc66c444e5301d7b8942581b4c32d16122616444731da4dfa54_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c69470773c8b02c11cbc267fbabec55f0d99703d954a11ff3f8268bf6846d07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c69470773c8b02c11cbc267fbabec55f0d99703d954a11ff3f8268bf6846d07->enter($__internal_7c69470773c8b02c11cbc267fbabec55f0d99703d954a11ff3f8268bf6846d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d86e431db2a87c2e6fe298438c99975d49817f2509fcab8f4723c78805f692db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d86e431db2a87c2e6fe298438c99975d49817f2509fcab8f4723c78805f692db->enter($__internal_d86e431db2a87c2e6fe298438c99975d49817f2509fcab8f4723c78805f692db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d86e431db2a87c2e6fe298438c99975d49817f2509fcab8f4723c78805f692db->leave($__internal_d86e431db2a87c2e6fe298438c99975d49817f2509fcab8f4723c78805f692db_prof);

        
        $__internal_7c69470773c8b02c11cbc267fbabec55f0d99703d954a11ff3f8268bf6846d07->leave($__internal_7c69470773c8b02c11cbc267fbabec55f0d99703d954a11ff3f8268bf6846d07_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d89a11750160fde90e199cf7fc1f39ae6b8f0703836e542c184ee3a54231f887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d89a11750160fde90e199cf7fc1f39ae6b8f0703836e542c184ee3a54231f887->enter($__internal_d89a11750160fde90e199cf7fc1f39ae6b8f0703836e542c184ee3a54231f887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d66fccf33e9092d12f1b1f36bc9414c8bfb799341871406be102fe4d72a2b709 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d66fccf33e9092d12f1b1f36bc9414c8bfb799341871406be102fe4d72a2b709->enter($__internal_d66fccf33e9092d12f1b1f36bc9414c8bfb799341871406be102fe4d72a2b709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_d66fccf33e9092d12f1b1f36bc9414c8bfb799341871406be102fe4d72a2b709->leave($__internal_d66fccf33e9092d12f1b1f36bc9414c8bfb799341871406be102fe4d72a2b709_prof);

        
        $__internal_d89a11750160fde90e199cf7fc1f39ae6b8f0703836e542c184ee3a54231f887->leave($__internal_d89a11750160fde90e199cf7fc1f39ae6b8f0703836e542c184ee3a54231f887_prof);

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
