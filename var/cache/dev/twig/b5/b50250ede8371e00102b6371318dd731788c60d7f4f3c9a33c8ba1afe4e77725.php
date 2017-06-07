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
        $__internal_d9606befa18ec2bc5df007713e5953dbcdbaf840098629bd2f084ab8fb1ee701 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9606befa18ec2bc5df007713e5953dbcdbaf840098629bd2f084ab8fb1ee701->enter($__internal_d9606befa18ec2bc5df007713e5953dbcdbaf840098629bd2f084ab8fb1ee701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_ce90e160e4f598abefcb44b38d0ce6ec46999946b1dd24d5e3f1c0edca3f2782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce90e160e4f598abefcb44b38d0ce6ec46999946b1dd24d5e3f1c0edca3f2782->enter($__internal_ce90e160e4f598abefcb44b38d0ce6ec46999946b1dd24d5e3f1c0edca3f2782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9606befa18ec2bc5df007713e5953dbcdbaf840098629bd2f084ab8fb1ee701->leave($__internal_d9606befa18ec2bc5df007713e5953dbcdbaf840098629bd2f084ab8fb1ee701_prof);

        
        $__internal_ce90e160e4f598abefcb44b38d0ce6ec46999946b1dd24d5e3f1c0edca3f2782->leave($__internal_ce90e160e4f598abefcb44b38d0ce6ec46999946b1dd24d5e3f1c0edca3f2782_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_56e9a58a59db312c76fd1b88800f427bb1a5ef2d467e3532c0ccdfcbfb446a37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56e9a58a59db312c76fd1b88800f427bb1a5ef2d467e3532c0ccdfcbfb446a37->enter($__internal_56e9a58a59db312c76fd1b88800f427bb1a5ef2d467e3532c0ccdfcbfb446a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1967283f2b8bde8ff3cb9ef9e822404e681b91eec1008118c464a8d672de17b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1967283f2b8bde8ff3cb9ef9e822404e681b91eec1008118c464a8d672de17b3->enter($__internal_1967283f2b8bde8ff3cb9ef9e822404e681b91eec1008118c464a8d672de17b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1967283f2b8bde8ff3cb9ef9e822404e681b91eec1008118c464a8d672de17b3->leave($__internal_1967283f2b8bde8ff3cb9ef9e822404e681b91eec1008118c464a8d672de17b3_prof);

        
        $__internal_56e9a58a59db312c76fd1b88800f427bb1a5ef2d467e3532c0ccdfcbfb446a37->leave($__internal_56e9a58a59db312c76fd1b88800f427bb1a5ef2d467e3532c0ccdfcbfb446a37_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_772f97e353c44ae7fc45c68b6dc3478ca84236f89a14d23b128feef300dc192a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_772f97e353c44ae7fc45c68b6dc3478ca84236f89a14d23b128feef300dc192a->enter($__internal_772f97e353c44ae7fc45c68b6dc3478ca84236f89a14d23b128feef300dc192a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4eb2d2250e7d0c54b3505cb5be9cdabdb3cd7a973969b7c661f44f86a0867e0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eb2d2250e7d0c54b3505cb5be9cdabdb3cd7a973969b7c661f44f86a0867e0c->enter($__internal_4eb2d2250e7d0c54b3505cb5be9cdabdb3cd7a973969b7c661f44f86a0867e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4eb2d2250e7d0c54b3505cb5be9cdabdb3cd7a973969b7c661f44f86a0867e0c->leave($__internal_4eb2d2250e7d0c54b3505cb5be9cdabdb3cd7a973969b7c661f44f86a0867e0c_prof);

        
        $__internal_772f97e353c44ae7fc45c68b6dc3478ca84236f89a14d23b128feef300dc192a->leave($__internal_772f97e353c44ae7fc45c68b6dc3478ca84236f89a14d23b128feef300dc192a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8968239727ca856c59a4d7f7dad49522b3a00603c9678a63c621b8ea47ea207 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8968239727ca856c59a4d7f7dad49522b3a00603c9678a63c621b8ea47ea207->enter($__internal_e8968239727ca856c59a4d7f7dad49522b3a00603c9678a63c621b8ea47ea207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bf4ae105ce1031eb07b608c79d9a4ed14e4ef57f12da2633c67a4f4442834083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf4ae105ce1031eb07b608c79d9a4ed14e4ef57f12da2633c67a4f4442834083->enter($__internal_bf4ae105ce1031eb07b608c79d9a4ed14e4ef57f12da2633c67a4f4442834083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_bf4ae105ce1031eb07b608c79d9a4ed14e4ef57f12da2633c67a4f4442834083->leave($__internal_bf4ae105ce1031eb07b608c79d9a4ed14e4ef57f12da2633c67a4f4442834083_prof);

        
        $__internal_e8968239727ca856c59a4d7f7dad49522b3a00603c9678a63c621b8ea47ea207->leave($__internal_e8968239727ca856c59a4d7f7dad49522b3a00603c9678a63c621b8ea47ea207_prof);

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
