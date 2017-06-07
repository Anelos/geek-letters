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
        $__internal_8134c34a5d9a12e87d140fa72e488fb9a45bf8355b5683c0b103e13dba727af8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8134c34a5d9a12e87d140fa72e488fb9a45bf8355b5683c0b103e13dba727af8->enter($__internal_8134c34a5d9a12e87d140fa72e488fb9a45bf8355b5683c0b103e13dba727af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_b8c11c948de9f7a2563f5c3ab635b06fc874764792edc7dbf7d79ce16e3ce20f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8c11c948de9f7a2563f5c3ab635b06fc874764792edc7dbf7d79ce16e3ce20f->enter($__internal_b8c11c948de9f7a2563f5c3ab635b06fc874764792edc7dbf7d79ce16e3ce20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8134c34a5d9a12e87d140fa72e488fb9a45bf8355b5683c0b103e13dba727af8->leave($__internal_8134c34a5d9a12e87d140fa72e488fb9a45bf8355b5683c0b103e13dba727af8_prof);

        
        $__internal_b8c11c948de9f7a2563f5c3ab635b06fc874764792edc7dbf7d79ce16e3ce20f->leave($__internal_b8c11c948de9f7a2563f5c3ab635b06fc874764792edc7dbf7d79ce16e3ce20f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6c23af962c3f4641b0a0ab5018d53d7adff8594dcedd11c20225b5413995387e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c23af962c3f4641b0a0ab5018d53d7adff8594dcedd11c20225b5413995387e->enter($__internal_6c23af962c3f4641b0a0ab5018d53d7adff8594dcedd11c20225b5413995387e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_faef3c355b98003c8892e127842024037ee5664b56dd22a3c903aab08613fe41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faef3c355b98003c8892e127842024037ee5664b56dd22a3c903aab08613fe41->enter($__internal_faef3c355b98003c8892e127842024037ee5664b56dd22a3c903aab08613fe41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_faef3c355b98003c8892e127842024037ee5664b56dd22a3c903aab08613fe41->leave($__internal_faef3c355b98003c8892e127842024037ee5664b56dd22a3c903aab08613fe41_prof);

        
        $__internal_6c23af962c3f4641b0a0ab5018d53d7adff8594dcedd11c20225b5413995387e->leave($__internal_6c23af962c3f4641b0a0ab5018d53d7adff8594dcedd11c20225b5413995387e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0cf66cdd2c3c01dd7cdee432e6aefc2d06816b14e08a9ad17784fc44d8f6638 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0cf66cdd2c3c01dd7cdee432e6aefc2d06816b14e08a9ad17784fc44d8f6638->enter($__internal_a0cf66cdd2c3c01dd7cdee432e6aefc2d06816b14e08a9ad17784fc44d8f6638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9ee6c5f4fffad9663660558337b2b82ea0af0ed17ed6b17410f3c93a17e4086e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ee6c5f4fffad9663660558337b2b82ea0af0ed17ed6b17410f3c93a17e4086e->enter($__internal_9ee6c5f4fffad9663660558337b2b82ea0af0ed17ed6b17410f3c93a17e4086e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9ee6c5f4fffad9663660558337b2b82ea0af0ed17ed6b17410f3c93a17e4086e->leave($__internal_9ee6c5f4fffad9663660558337b2b82ea0af0ed17ed6b17410f3c93a17e4086e_prof);

        
        $__internal_a0cf66cdd2c3c01dd7cdee432e6aefc2d06816b14e08a9ad17784fc44d8f6638->leave($__internal_a0cf66cdd2c3c01dd7cdee432e6aefc2d06816b14e08a9ad17784fc44d8f6638_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4311e1ff79cce99c27e705d75e6d0467934d6a611156e1c4def769bab6c82090 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4311e1ff79cce99c27e705d75e6d0467934d6a611156e1c4def769bab6c82090->enter($__internal_4311e1ff79cce99c27e705d75e6d0467934d6a611156e1c4def769bab6c82090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9ef34db6f62fd00c29e6bc56c884866ec182480cad6886f7acce4407dbe5c0ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ef34db6f62fd00c29e6bc56c884866ec182480cad6886f7acce4407dbe5c0ee->enter($__internal_9ef34db6f62fd00c29e6bc56c884866ec182480cad6886f7acce4407dbe5c0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_9ef34db6f62fd00c29e6bc56c884866ec182480cad6886f7acce4407dbe5c0ee->leave($__internal_9ef34db6f62fd00c29e6bc56c884866ec182480cad6886f7acce4407dbe5c0ee_prof);

        
        $__internal_4311e1ff79cce99c27e705d75e6d0467934d6a611156e1c4def769bab6c82090->leave($__internal_4311e1ff79cce99c27e705d75e6d0467934d6a611156e1c4def769bab6c82090_prof);

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
