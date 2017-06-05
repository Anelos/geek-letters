<?php

/* :default:index.html.twig */
class __TwigTemplate_c128f3aedd0d96dc8379de497084d9ca058b9dea253f7e496148ae87c0af1ef6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0ad506a1a876e3532f53baca6c60a88447b0294ec17e9a7113daa596dbcb785 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0ad506a1a876e3532f53baca6c60a88447b0294ec17e9a7113daa596dbcb785->enter($__internal_e0ad506a1a876e3532f53baca6c60a88447b0294ec17e9a7113daa596dbcb785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_545b2def7af2290d217db2ceb7300f0ba0e002a8aa15828fb3574c2e6d81cef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_545b2def7af2290d217db2ceb7300f0ba0e002a8aa15828fb3574c2e6d81cef1->enter($__internal_545b2def7af2290d217db2ceb7300f0ba0e002a8aa15828fb3574c2e6d81cef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0ad506a1a876e3532f53baca6c60a88447b0294ec17e9a7113daa596dbcb785->leave($__internal_e0ad506a1a876e3532f53baca6c60a88447b0294ec17e9a7113daa596dbcb785_prof);

        
        $__internal_545b2def7af2290d217db2ceb7300f0ba0e002a8aa15828fb3574c2e6d81cef1->leave($__internal_545b2def7af2290d217db2ceb7300f0ba0e002a8aa15828fb3574c2e6d81cef1_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_ac23bf382304e227b728a95cc4bc3f387adbf7ae57aad32e0a01a525591862cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac23bf382304e227b728a95cc4bc3f387adbf7ae57aad32e0a01a525591862cd->enter($__internal_ac23bf382304e227b728a95cc4bc3f387adbf7ae57aad32e0a01a525591862cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ba6aa418813c6e1c4e0e1cd0be7a3f033685910c60a754a88654c4a9e3693ae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba6aa418813c6e1c4e0e1cd0be7a3f033685910c60a754a88654c4a9e3693ae5->enter($__internal_ba6aa418813c6e1c4e0e1cd0be7a3f033685910c60a754a88654c4a9e3693ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "<div id=\"wrapper\">
    <div id=\"container\">

        <div class=\"row\">
            <div class=\"col-md-6 col-md-offset-3\">
              ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Article:published"));
        // line 9
        echo "
            </div>
            <div class=\"col-md-3\">
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_ba6aa418813c6e1c4e0e1cd0be7a3f033685910c60a754a88654c4a9e3693ae5->leave($__internal_ba6aa418813c6e1c4e0e1cd0be7a3f033685910c60a754a88654c4a9e3693ae5_prof);

        
        $__internal_ac23bf382304e227b728a95cc4bc3f387adbf7ae57aad32e0a01a525591862cd->leave($__internal_ac23bf382304e227b728a95cc4bc3f387adbf7ae57aad32e0a01a525591862cd_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_177f053694da9d8a40ee605bbc544f3c003e5777a608ba3e8cff825048d9601c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_177f053694da9d8a40ee605bbc544f3c003e5777a608ba3e8cff825048d9601c->enter($__internal_177f053694da9d8a40ee605bbc544f3c003e5777a608ba3e8cff825048d9601c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4d7f07784b6e11986181c9eab59c181ff64ceb4732631156fafa8ad8e4039824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d7f07784b6e11986181c9eab59c181ff64ceb4732631156fafa8ad8e4039824->enter($__internal_4d7f07784b6e11986181c9eab59c181ff64ceb4732631156fafa8ad8e4039824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "<style>
    body {
        background: #F5F5F5;
        font: 18px/1.5 sans-serif;
    }

    h1,
    h2 {
        line-height: 1.2;
        margin: 0 0 .5em;
    }

    h1 {
        font-size: 36px;
    }

    h2 {
        font-size: 21px;
        margin-bottom: 1em;
    }

    p {
        margin: 0 0 1em 0;
    }

    a {
        color: #0000F0;
    }

    a:hover {
        text-decoration: none;
    }

    code {
        background: #F5F5F5;
        max-width: 100px;
        padding: 2px 6px;
        word-wrap: break-word;
    }

    #wrapper {
        background: #FFF;
        margin: 1em auto;
        max-width: 800px;
        width: 95%;
    }

    #container {
        padding: 2em;
    }

    #welcome,
    #status {
        margin-bottom: 2em;
    }

    #welcome h1 span {
        display: block;
        font-size: 75%;
    }

    #icon-status,
    #icon-book {
        float: left;
        height: 64px;
        margin-right: 1em;
        margin-top: -4px;
        width: 64px;
    }

    #icon-book {
        display: none;
    }

    @media (min-width: 768px) {
        #wrapper {
            width: 80%;
            margin: 2em auto;
        }
        #icon-book {
            display: inline-block;
        }
        #status a,
        #next a {
            display: block;
        }

        @-webkit-keyframes fade-in {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        @keyframes fade-in {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        .sf-toolbar {
            opacity: 0;
            -webkit-animation: fade-in 1s .2s forwards;
            animation: fade-in 1s .2s forwards;
        }
    }
</style>
";
        
        $__internal_4d7f07784b6e11986181c9eab59c181ff64ceb4732631156fafa8ad8e4039824->leave($__internal_4d7f07784b6e11986181c9eab59c181ff64ceb4732631156fafa8ad8e4039824_prof);

        
        $__internal_177f053694da9d8a40ee605bbc544f3c003e5777a608ba3e8cff825048d9601c->leave($__internal_177f053694da9d8a40ee605bbc544f3c003e5777a608ba3e8cff825048d9601c_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 17,  75 => 16,  58 => 9,  56 => 7,  49 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %} {% block body %}
<div id=\"wrapper\">
    <div id=\"container\">

        <div class=\"row\">
            <div class=\"col-md-6 col-md-offset-3\">
              {{ render(controller(
        'AppBundle:Article:published'
        )) }}
            </div>
            <div class=\"col-md-3\">
            </div>
        </div>
    </div>
</div>
{% endblock %} {% block stylesheets %}
<style>
    body {
        background: #F5F5F5;
        font: 18px/1.5 sans-serif;
    }

    h1,
    h2 {
        line-height: 1.2;
        margin: 0 0 .5em;
    }

    h1 {
        font-size: 36px;
    }

    h2 {
        font-size: 21px;
        margin-bottom: 1em;
    }

    p {
        margin: 0 0 1em 0;
    }

    a {
        color: #0000F0;
    }

    a:hover {
        text-decoration: none;
    }

    code {
        background: #F5F5F5;
        max-width: 100px;
        padding: 2px 6px;
        word-wrap: break-word;
    }

    #wrapper {
        background: #FFF;
        margin: 1em auto;
        max-width: 800px;
        width: 95%;
    }

    #container {
        padding: 2em;
    }

    #welcome,
    #status {
        margin-bottom: 2em;
    }

    #welcome h1 span {
        display: block;
        font-size: 75%;
    }

    #icon-status,
    #icon-book {
        float: left;
        height: 64px;
        margin-right: 1em;
        margin-top: -4px;
        width: 64px;
    }

    #icon-book {
        display: none;
    }

    @media (min-width: 768px) {
        #wrapper {
            width: 80%;
            margin: 2em auto;
        }
        #icon-book {
            display: inline-block;
        }
        #status a,
        #next a {
            display: block;
        }

        @-webkit-keyframes fade-in {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        @keyframes fade-in {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        .sf-toolbar {
            opacity: 0;
            -webkit-animation: fade-in 1s .2s forwards;
            animation: fade-in 1s .2s forwards;
        }
    }
</style>
{% endblock %}", ":default:index.html.twig", "/var/www/html/geek-letters/app/Resources/views/default/index.html.twig");
    }
}
