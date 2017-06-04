<?php

/* :user:new.html.twig */
class __TwigTemplate_b8093adb006006ce18c96333f49cf25f4a7e28efaf748adcf260c7e7c11be5b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6895e152b5d966d60eb39f1a466386f466c2faf71c5296c0f9f1777b17fc97c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6895e152b5d966d60eb39f1a466386f466c2faf71c5296c0f9f1777b17fc97c8->enter($__internal_6895e152b5d966d60eb39f1a466386f466c2faf71c5296c0f9f1777b17fc97c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $__internal_434b8b8ac3b0d6b5ff3be170240678c1d9aabc0880fee39ee4a7f8751f334ef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_434b8b8ac3b0d6b5ff3be170240678c1d9aabc0880fee39ee4a7f8751f334ef5->enter($__internal_434b8b8ac3b0d6b5ff3be170240678c1d9aabc0880fee39ee4a7f8751f334ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6895e152b5d966d60eb39f1a466386f466c2faf71c5296c0f9f1777b17fc97c8->leave($__internal_6895e152b5d966d60eb39f1a466386f466c2faf71c5296c0f9f1777b17fc97c8_prof);

        
        $__internal_434b8b8ac3b0d6b5ff3be170240678c1d9aabc0880fee39ee4a7f8751f334ef5->leave($__internal_434b8b8ac3b0d6b5ff3be170240678c1d9aabc0880fee39ee4a7f8751f334ef5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fcddf07369df05bead9aec30b7b81056644e36c0622a2141d1852fca39b9f558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcddf07369df05bead9aec30b7b81056644e36c0622a2141d1852fca39b9f558->enter($__internal_fcddf07369df05bead9aec30b7b81056644e36c0622a2141d1852fca39b9f558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_56800c822032b66cb247475f78d082c9eeb012eec1c51de57aed67644c9ab597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56800c822032b66cb247475f78d082c9eeb012eec1c51de57aed67644c9ab597->enter($__internal_56800c822032b66cb247475f78d082c9eeb012eec1c51de57aed67644c9ab597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_56800c822032b66cb247475f78d082c9eeb012eec1c51de57aed67644c9ab597->leave($__internal_56800c822032b66cb247475f78d082c9eeb012eec1c51de57aed67644c9ab597_prof);

        
        $__internal_fcddf07369df05bead9aec30b7b81056644e36c0622a2141d1852fca39b9f558->leave($__internal_fcddf07369df05bead9aec30b7b81056644e36c0622a2141d1852fca39b9f558_prof);

    }

    public function getTemplateName()
    {
        return ":user:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>User creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":user:new.html.twig", "/var/www/html/geek-letters/app/Resources/views/user/new.html.twig");
    }
}
