<?php

/* :article:new.html.twig */
class __TwigTemplate_47c3ae31170dfca6ee0452130c99608cff7dd09777166bf202b52ce203894b92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":article:new.html.twig", 1);
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
        $__internal_b0d35e331ad72e1e2be9a0a117077533a61ba64d8ea0289aa710f933b59d8763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0d35e331ad72e1e2be9a0a117077533a61ba64d8ea0289aa710f933b59d8763->enter($__internal_b0d35e331ad72e1e2be9a0a117077533a61ba64d8ea0289aa710f933b59d8763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:new.html.twig"));

        $__internal_a2b75b7580ca2988aa01ee573ffd5160f685092aab4a8349b03a050db13b0b93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2b75b7580ca2988aa01ee573ffd5160f685092aab4a8349b03a050db13b0b93->enter($__internal_a2b75b7580ca2988aa01ee573ffd5160f685092aab4a8349b03a050db13b0b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0d35e331ad72e1e2be9a0a117077533a61ba64d8ea0289aa710f933b59d8763->leave($__internal_b0d35e331ad72e1e2be9a0a117077533a61ba64d8ea0289aa710f933b59d8763_prof);

        
        $__internal_a2b75b7580ca2988aa01ee573ffd5160f685092aab4a8349b03a050db13b0b93->leave($__internal_a2b75b7580ca2988aa01ee573ffd5160f685092aab4a8349b03a050db13b0b93_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_229c81d8d8c5f1d4b89cdff384122bbf3ec6c45cd44c2c592dfe9b43940901db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_229c81d8d8c5f1d4b89cdff384122bbf3ec6c45cd44c2c592dfe9b43940901db->enter($__internal_229c81d8d8c5f1d4b89cdff384122bbf3ec6c45cd44c2c592dfe9b43940901db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eb9be3e4c428b8efe432852859c54ddee671f5ea0ba269325094bb60ab81c6e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb9be3e4c428b8efe432852859c54ddee671f5ea0ba269325094bb60ab81c6e3->enter($__internal_eb9be3e4c428b8efe432852859c54ddee671f5ea0ba269325094bb60ab81c6e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Article creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_eb9be3e4c428b8efe432852859c54ddee671f5ea0ba269325094bb60ab81c6e3->leave($__internal_eb9be3e4c428b8efe432852859c54ddee671f5ea0ba269325094bb60ab81c6e3_prof);

        
        $__internal_229c81d8d8c5f1d4b89cdff384122bbf3ec6c45cd44c2c592dfe9b43940901db->leave($__internal_229c81d8d8c5f1d4b89cdff384122bbf3ec6c45cd44c2c592dfe9b43940901db_prof);

    }

    public function getTemplateName()
    {
        return ":article:new.html.twig";
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
    <h1>Article creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('article_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":article:new.html.twig", "/var/www/html/geek-letters/app/Resources/views/article/new.html.twig");
    }
}
