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
        $__internal_428b968c491bee9e2168d3b17aac4c5fb3459f3861f9a42d8c526c40d87f3d02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_428b968c491bee9e2168d3b17aac4c5fb3459f3861f9a42d8c526c40d87f3d02->enter($__internal_428b968c491bee9e2168d3b17aac4c5fb3459f3861f9a42d8c526c40d87f3d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:edit.html.twig"));

        $__internal_c2853ca994f8b5879e03bb3793bbfc1b6ef9e0fb8bb834c7658f5a6dbe30ee7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2853ca994f8b5879e03bb3793bbfc1b6ef9e0fb8bb834c7658f5a6dbe30ee7d->enter($__internal_c2853ca994f8b5879e03bb3793bbfc1b6ef9e0fb8bb834c7658f5a6dbe30ee7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_428b968c491bee9e2168d3b17aac4c5fb3459f3861f9a42d8c526c40d87f3d02->leave($__internal_428b968c491bee9e2168d3b17aac4c5fb3459f3861f9a42d8c526c40d87f3d02_prof);

        
        $__internal_c2853ca994f8b5879e03bb3793bbfc1b6ef9e0fb8bb834c7658f5a6dbe30ee7d->leave($__internal_c2853ca994f8b5879e03bb3793bbfc1b6ef9e0fb8bb834c7658f5a6dbe30ee7d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1882e86265bcc45ec77b805e28b0102a7c5efa8f546af77d8d21fd01c81aabde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1882e86265bcc45ec77b805e28b0102a7c5efa8f546af77d8d21fd01c81aabde->enter($__internal_1882e86265bcc45ec77b805e28b0102a7c5efa8f546af77d8d21fd01c81aabde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fcde8d79efcb759b248cb0ec7b3e30467b1bd2de6b0cc8307daccbd2d5edacea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcde8d79efcb759b248cb0ec7b3e30467b1bd2de6b0cc8307daccbd2d5edacea->enter($__internal_fcde8d79efcb759b248cb0ec7b3e30467b1bd2de6b0cc8307daccbd2d5edacea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fcde8d79efcb759b248cb0ec7b3e30467b1bd2de6b0cc8307daccbd2d5edacea->leave($__internal_fcde8d79efcb759b248cb0ec7b3e30467b1bd2de6b0cc8307daccbd2d5edacea_prof);

        
        $__internal_1882e86265bcc45ec77b805e28b0102a7c5efa8f546af77d8d21fd01c81aabde->leave($__internal_1882e86265bcc45ec77b805e28b0102a7c5efa8f546af77d8d21fd01c81aabde_prof);

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
