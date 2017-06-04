<?php

/* :category:new.html.twig */
class __TwigTemplate_5a36e18bf660d8903edacb6724432f5b5750ea1dc6dd613c955f758d5e76f976 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":category:new.html.twig", 1);
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
        $__internal_7015d06b44f7052a6c7647c3cfdeb3a11399cd7e2934b15999052744d887397a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7015d06b44f7052a6c7647c3cfdeb3a11399cd7e2934b15999052744d887397a->enter($__internal_7015d06b44f7052a6c7647c3cfdeb3a11399cd7e2934b15999052744d887397a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:new.html.twig"));

        $__internal_d4f35161b79f84132fb7de469e5a8740b5ccdb7fff6735b31717aed943c6a235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f35161b79f84132fb7de469e5a8740b5ccdb7fff6735b31717aed943c6a235->enter($__internal_d4f35161b79f84132fb7de469e5a8740b5ccdb7fff6735b31717aed943c6a235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7015d06b44f7052a6c7647c3cfdeb3a11399cd7e2934b15999052744d887397a->leave($__internal_7015d06b44f7052a6c7647c3cfdeb3a11399cd7e2934b15999052744d887397a_prof);

        
        $__internal_d4f35161b79f84132fb7de469e5a8740b5ccdb7fff6735b31717aed943c6a235->leave($__internal_d4f35161b79f84132fb7de469e5a8740b5ccdb7fff6735b31717aed943c6a235_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7757dd8f897db4cce518fa685f36c06794dadf9799a98570d25c802289b6f24f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7757dd8f897db4cce518fa685f36c06794dadf9799a98570d25c802289b6f24f->enter($__internal_7757dd8f897db4cce518fa685f36c06794dadf9799a98570d25c802289b6f24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0a6c153b111abc891d277256447803f7d11ac02ad6648b76b501062d6d28295d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a6c153b111abc891d277256447803f7d11ac02ad6648b76b501062d6d28295d->enter($__internal_0a6c153b111abc891d277256447803f7d11ac02ad6648b76b501062d6d28295d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Category creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_0a6c153b111abc891d277256447803f7d11ac02ad6648b76b501062d6d28295d->leave($__internal_0a6c153b111abc891d277256447803f7d11ac02ad6648b76b501062d6d28295d_prof);

        
        $__internal_7757dd8f897db4cce518fa685f36c06794dadf9799a98570d25c802289b6f24f->leave($__internal_7757dd8f897db4cce518fa685f36c06794dadf9799a98570d25c802289b6f24f_prof);

    }

    public function getTemplateName()
    {
        return ":category:new.html.twig";
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
    <h1>Category creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('category_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":category:new.html.twig", "/var/www/html/geek-letters/app/Resources/views/category/new.html.twig");
    }
}
