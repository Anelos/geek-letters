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
        $__internal_101af086a23c549f02273691bb2adbde7c09af8b7962000df70e177631aebb8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_101af086a23c549f02273691bb2adbde7c09af8b7962000df70e177631aebb8f->enter($__internal_101af086a23c549f02273691bb2adbde7c09af8b7962000df70e177631aebb8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_b373e9ce89a42630c8ec3bbf04c5d102fa6742a5de53d6b1602e614eb0936400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b373e9ce89a42630c8ec3bbf04c5d102fa6742a5de53d6b1602e614eb0936400->enter($__internal_b373e9ce89a42630c8ec3bbf04c5d102fa6742a5de53d6b1602e614eb0936400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_101af086a23c549f02273691bb2adbde7c09af8b7962000df70e177631aebb8f->leave($__internal_101af086a23c549f02273691bb2adbde7c09af8b7962000df70e177631aebb8f_prof);

        
        $__internal_b373e9ce89a42630c8ec3bbf04c5d102fa6742a5de53d6b1602e614eb0936400->leave($__internal_b373e9ce89a42630c8ec3bbf04c5d102fa6742a5de53d6b1602e614eb0936400_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_448586218a059fc2c53f6401a43a14c824b76951c17f474aa5d577fd8032b881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_448586218a059fc2c53f6401a43a14c824b76951c17f474aa5d577fd8032b881->enter($__internal_448586218a059fc2c53f6401a43a14c824b76951c17f474aa5d577fd8032b881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_538ff36697e234524c7d60ef546edf900ba5838443d03788e07534c857068cab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_538ff36697e234524c7d60ef546edf900ba5838443d03788e07534c857068cab->enter($__internal_538ff36697e234524c7d60ef546edf900ba5838443d03788e07534c857068cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_538ff36697e234524c7d60ef546edf900ba5838443d03788e07534c857068cab->leave($__internal_538ff36697e234524c7d60ef546edf900ba5838443d03788e07534c857068cab_prof);

        
        $__internal_448586218a059fc2c53f6401a43a14c824b76951c17f474aa5d577fd8032b881->leave($__internal_448586218a059fc2c53f6401a43a14c824b76951c17f474aa5d577fd8032b881_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ccb1fdd64ea1745ec5772c767f13c5187ee00b179d988fd153b680c8499c365f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccb1fdd64ea1745ec5772c767f13c5187ee00b179d988fd153b680c8499c365f->enter($__internal_ccb1fdd64ea1745ec5772c767f13c5187ee00b179d988fd153b680c8499c365f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_613427db1203724a61b13929191d410c4ca2f628bc1159da3a2a13161dfe1615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_613427db1203724a61b13929191d410c4ca2f628bc1159da3a2a13161dfe1615->enter($__internal_613427db1203724a61b13929191d410c4ca2f628bc1159da3a2a13161dfe1615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_613427db1203724a61b13929191d410c4ca2f628bc1159da3a2a13161dfe1615->leave($__internal_613427db1203724a61b13929191d410c4ca2f628bc1159da3a2a13161dfe1615_prof);

        
        $__internal_ccb1fdd64ea1745ec5772c767f13c5187ee00b179d988fd153b680c8499c365f->leave($__internal_ccb1fdd64ea1745ec5772c767f13c5187ee00b179d988fd153b680c8499c365f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_1516c64090ba73bee8add9bcac7649035a6e9e0408e341595b6b48259494eccf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1516c64090ba73bee8add9bcac7649035a6e9e0408e341595b6b48259494eccf->enter($__internal_1516c64090ba73bee8add9bcac7649035a6e9e0408e341595b6b48259494eccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_77fdfc93d1faed2f41dbe33df5a811ffb316dcdd1339bc79ac0571990be85392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77fdfc93d1faed2f41dbe33df5a811ffb316dcdd1339bc79ac0571990be85392->enter($__internal_77fdfc93d1faed2f41dbe33df5a811ffb316dcdd1339bc79ac0571990be85392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_77fdfc93d1faed2f41dbe33df5a811ffb316dcdd1339bc79ac0571990be85392->leave($__internal_77fdfc93d1faed2f41dbe33df5a811ffb316dcdd1339bc79ac0571990be85392_prof);

        
        $__internal_1516c64090ba73bee8add9bcac7649035a6e9e0408e341595b6b48259494eccf->leave($__internal_1516c64090ba73bee8add9bcac7649035a6e9e0408e341595b6b48259494eccf_prof);

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
