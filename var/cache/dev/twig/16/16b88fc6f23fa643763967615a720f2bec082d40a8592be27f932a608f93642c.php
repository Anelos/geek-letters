<?php

/* :article:edit.html.twig */
class __TwigTemplate_edd3308e7723bdd5bd4964e33ebc4e8221baff22474b7fe87d34190eec98dc0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":article:edit.html.twig", 1);
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
        $__internal_30b31ef6298f63f761f194086a76cbc3cbb5f9736478e3c5fdbbc660565870e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30b31ef6298f63f761f194086a76cbc3cbb5f9736478e3c5fdbbc660565870e3->enter($__internal_30b31ef6298f63f761f194086a76cbc3cbb5f9736478e3c5fdbbc660565870e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:edit.html.twig"));

        $__internal_89c4fabd2c25502a5c3f6fad8f5e1eeea57274aa2c747d7f5ff4ed8ad45348e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c4fabd2c25502a5c3f6fad8f5e1eeea57274aa2c747d7f5ff4ed8ad45348e8->enter($__internal_89c4fabd2c25502a5c3f6fad8f5e1eeea57274aa2c747d7f5ff4ed8ad45348e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30b31ef6298f63f761f194086a76cbc3cbb5f9736478e3c5fdbbc660565870e3->leave($__internal_30b31ef6298f63f761f194086a76cbc3cbb5f9736478e3c5fdbbc660565870e3_prof);

        
        $__internal_89c4fabd2c25502a5c3f6fad8f5e1eeea57274aa2c747d7f5ff4ed8ad45348e8->leave($__internal_89c4fabd2c25502a5c3f6fad8f5e1eeea57274aa2c747d7f5ff4ed8ad45348e8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_74a2b5d805c8260daece5291699b261ac9e25e5c4f0d0ec977c19bb4df0c4beb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74a2b5d805c8260daece5291699b261ac9e25e5c4f0d0ec977c19bb4df0c4beb->enter($__internal_74a2b5d805c8260daece5291699b261ac9e25e5c4f0d0ec977c19bb4df0c4beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_68396d8ae73934951e454aac1f52691a1db2822a1f3baa32b9ddb1d065362758 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68396d8ae73934951e454aac1f52691a1db2822a1f3baa32b9ddb1d065362758->enter($__internal_68396d8ae73934951e454aac1f52691a1db2822a1f3baa32b9ddb1d065362758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Article edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_68396d8ae73934951e454aac1f52691a1db2822a1f3baa32b9ddb1d065362758->leave($__internal_68396d8ae73934951e454aac1f52691a1db2822a1f3baa32b9ddb1d065362758_prof);

        
        $__internal_74a2b5d805c8260daece5291699b261ac9e25e5c4f0d0ec977c19bb4df0c4beb->leave($__internal_74a2b5d805c8260daece5291699b261ac9e25e5c4f0d0ec977c19bb4df0c4beb_prof);

    }

    public function getTemplateName()
    {
        return ":article:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Article edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('article_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":article:edit.html.twig", "/var/www/html/geek-letters/app/Resources/views/article/edit.html.twig");
    }
}
