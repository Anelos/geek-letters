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
        $__internal_7a4f22a56cc5f991ccedb37c64bd8c9a26f6a84484d7af7a4ed527655490d30b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a4f22a56cc5f991ccedb37c64bd8c9a26f6a84484d7af7a4ed527655490d30b->enter($__internal_7a4f22a56cc5f991ccedb37c64bd8c9a26f6a84484d7af7a4ed527655490d30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_ba8207287fbecb935592dc7f5cc1faf48e68726fcc964462d19c8bb26df52b07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba8207287fbecb935592dc7f5cc1faf48e68726fcc964462d19c8bb26df52b07->enter($__internal_ba8207287fbecb935592dc7f5cc1faf48e68726fcc964462d19c8bb26df52b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a4f22a56cc5f991ccedb37c64bd8c9a26f6a84484d7af7a4ed527655490d30b->leave($__internal_7a4f22a56cc5f991ccedb37c64bd8c9a26f6a84484d7af7a4ed527655490d30b_prof);

        
        $__internal_ba8207287fbecb935592dc7f5cc1faf48e68726fcc964462d19c8bb26df52b07->leave($__internal_ba8207287fbecb935592dc7f5cc1faf48e68726fcc964462d19c8bb26df52b07_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f7e94d0d19396bd79fdf4d05af91d5649700defdf059e285d40e40d1a86ea5fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7e94d0d19396bd79fdf4d05af91d5649700defdf059e285d40e40d1a86ea5fe->enter($__internal_f7e94d0d19396bd79fdf4d05af91d5649700defdf059e285d40e40d1a86ea5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d24b4f7efc8be1cfc66add96f59ae78b5abfdbba59bf6100b35bf2221c8f8bff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d24b4f7efc8be1cfc66add96f59ae78b5abfdbba59bf6100b35bf2221c8f8bff->enter($__internal_d24b4f7efc8be1cfc66add96f59ae78b5abfdbba59bf6100b35bf2221c8f8bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d24b4f7efc8be1cfc66add96f59ae78b5abfdbba59bf6100b35bf2221c8f8bff->leave($__internal_d24b4f7efc8be1cfc66add96f59ae78b5abfdbba59bf6100b35bf2221c8f8bff_prof);

        
        $__internal_f7e94d0d19396bd79fdf4d05af91d5649700defdf059e285d40e40d1a86ea5fe->leave($__internal_f7e94d0d19396bd79fdf4d05af91d5649700defdf059e285d40e40d1a86ea5fe_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b583db78acc24014e885e7345c791dc719d32e3be11bc8c0c1dce3927a9e3ac6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b583db78acc24014e885e7345c791dc719d32e3be11bc8c0c1dce3927a9e3ac6->enter($__internal_b583db78acc24014e885e7345c791dc719d32e3be11bc8c0c1dce3927a9e3ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e54e61c547a79b1dabfb90b8d10ccc6f3e2494ef5f21a0b38397d92231669e4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e54e61c547a79b1dabfb90b8d10ccc6f3e2494ef5f21a0b38397d92231669e4c->enter($__internal_e54e61c547a79b1dabfb90b8d10ccc6f3e2494ef5f21a0b38397d92231669e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e54e61c547a79b1dabfb90b8d10ccc6f3e2494ef5f21a0b38397d92231669e4c->leave($__internal_e54e61c547a79b1dabfb90b8d10ccc6f3e2494ef5f21a0b38397d92231669e4c_prof);

        
        $__internal_b583db78acc24014e885e7345c791dc719d32e3be11bc8c0c1dce3927a9e3ac6->leave($__internal_b583db78acc24014e885e7345c791dc719d32e3be11bc8c0c1dce3927a9e3ac6_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_632e634e9ebd0242e9551be18d6d8a76747875c07d6bd95262a1fcd244cd0a6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_632e634e9ebd0242e9551be18d6d8a76747875c07d6bd95262a1fcd244cd0a6f->enter($__internal_632e634e9ebd0242e9551be18d6d8a76747875c07d6bd95262a1fcd244cd0a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9a32f9bcdb9e271a65ac9bbd091e5ef2a3acdba05211e2f0e4f3d9f888548514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a32f9bcdb9e271a65ac9bbd091e5ef2a3acdba05211e2f0e4f3d9f888548514->enter($__internal_9a32f9bcdb9e271a65ac9bbd091e5ef2a3acdba05211e2f0e4f3d9f888548514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_9a32f9bcdb9e271a65ac9bbd091e5ef2a3acdba05211e2f0e4f3d9f888548514->leave($__internal_9a32f9bcdb9e271a65ac9bbd091e5ef2a3acdba05211e2f0e4f3d9f888548514_prof);

        
        $__internal_632e634e9ebd0242e9551be18d6d8a76747875c07d6bd95262a1fcd244cd0a6f->leave($__internal_632e634e9ebd0242e9551be18d6d8a76747875c07d6bd95262a1fcd244cd0a6f_prof);

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
