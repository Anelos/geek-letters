<?php

/* default/index.html.twig */
class __TwigTemplate_f95fe320d205864b2c43d86b60f282c64112fe2f7e2ba04d12f2d967f0204c70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_4b1223d614503d7f1d0b56a831c10e1a4cfb60c14e52708e719fa8981aa57671 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b1223d614503d7f1d0b56a831c10e1a4cfb60c14e52708e719fa8981aa57671->enter($__internal_4b1223d614503d7f1d0b56a831c10e1a4cfb60c14e52708e719fa8981aa57671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_edf92bb26ebc0e350172fe079aad06100231a2e9e2f9d57ef9bc9251f91cb264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edf92bb26ebc0e350172fe079aad06100231a2e9e2f9d57ef9bc9251f91cb264->enter($__internal_edf92bb26ebc0e350172fe079aad06100231a2e9e2f9d57ef9bc9251f91cb264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b1223d614503d7f1d0b56a831c10e1a4cfb60c14e52708e719fa8981aa57671->leave($__internal_4b1223d614503d7f1d0b56a831c10e1a4cfb60c14e52708e719fa8981aa57671_prof);

        
        $__internal_edf92bb26ebc0e350172fe079aad06100231a2e9e2f9d57ef9bc9251f91cb264->leave($__internal_edf92bb26ebc0e350172fe079aad06100231a2e9e2f9d57ef9bc9251f91cb264_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_f24356ebd68c583527dcefede4f406a83288cf6a0844d5a4d10fd0446a9ed342 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f24356ebd68c583527dcefede4f406a83288cf6a0844d5a4d10fd0446a9ed342->enter($__internal_f24356ebd68c583527dcefede4f406a83288cf6a0844d5a4d10fd0446a9ed342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8afd2e26369eeffacefec5a7df88d953b2d839fb93f27377fa0c6ab8e017bd01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8afd2e26369eeffacefec5a7df88d953b2d839fb93f27377fa0c6ab8e017bd01->enter($__internal_8afd2e26369eeffacefec5a7df88d953b2d839fb93f27377fa0c6ab8e017bd01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8afd2e26369eeffacefec5a7df88d953b2d839fb93f27377fa0c6ab8e017bd01->leave($__internal_8afd2e26369eeffacefec5a7df88d953b2d839fb93f27377fa0c6ab8e017bd01_prof);

        
        $__internal_f24356ebd68c583527dcefede4f406a83288cf6a0844d5a4d10fd0446a9ed342->leave($__internal_f24356ebd68c583527dcefede4f406a83288cf6a0844d5a4d10fd0446a9ed342_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aae64cd15614ff5c5d92b3d6a3bf6b50223421e7bfe18fca69f7559b21ebe009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aae64cd15614ff5c5d92b3d6a3bf6b50223421e7bfe18fca69f7559b21ebe009->enter($__internal_aae64cd15614ff5c5d92b3d6a3bf6b50223421e7bfe18fca69f7559b21ebe009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c487afe7d5365fbe378f0fe370edee514b5bb9c6ff475134127cd32f732759c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c487afe7d5365fbe378f0fe370edee514b5bb9c6ff475134127cd32f732759c9->enter($__internal_c487afe7d5365fbe378f0fe370edee514b5bb9c6ff475134127cd32f732759c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c487afe7d5365fbe378f0fe370edee514b5bb9c6ff475134127cd32f732759c9->leave($__internal_c487afe7d5365fbe378f0fe370edee514b5bb9c6ff475134127cd32f732759c9_prof);

        
        $__internal_aae64cd15614ff5c5d92b3d6a3bf6b50223421e7bfe18fca69f7559b21ebe009->leave($__internal_aae64cd15614ff5c5d92b3d6a3bf6b50223421e7bfe18fca69f7559b21ebe009_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
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
{% endblock %}", "default/index.html.twig", "/var/www/html/geek-letters/app/Resources/views/default/index.html.twig");
    }
}
