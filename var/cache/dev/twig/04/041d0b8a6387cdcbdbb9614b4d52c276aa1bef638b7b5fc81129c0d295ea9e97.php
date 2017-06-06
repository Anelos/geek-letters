<?php

/* :article:new.html.twig */
class __TwigTemplate_47c3ae31170dfca6ee0452130c99608cff7dd09777166bf202b52ce203894b92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c8b63aee3c059f15ba180905c2e42bdab486d5b1bbfa79c1220c65f1fca7983 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c8b63aee3c059f15ba180905c2e42bdab486d5b1bbfa79c1220c65f1fca7983->enter($__internal_8c8b63aee3c059f15ba180905c2e42bdab486d5b1bbfa79c1220c65f1fca7983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:new.html.twig"));

        $__internal_91068ccf97184751e0e65718946d4a63199940cdfe75101df4176485d94a9939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91068ccf97184751e0e65718946d4a63199940cdfe75101df4176485d94a9939->enter($__internal_91068ccf97184751e0e65718946d4a63199940cdfe75101df4176485d94a9939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:new.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_8c8b63aee3c059f15ba180905c2e42bdab486d5b1bbfa79c1220c65f1fca7983->leave($__internal_8c8b63aee3c059f15ba180905c2e42bdab486d5b1bbfa79c1220c65f1fca7983_prof);

        
        $__internal_91068ccf97184751e0e65718946d4a63199940cdfe75101df4176485d94a9939->leave($__internal_91068ccf97184751e0e65718946d4a63199940cdfe75101df4176485d94a9939_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_2272c462ed14546e325479611cdba06f075c43085e8660114d0aa5c1ea655cd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2272c462ed14546e325479611cdba06f075c43085e8660114d0aa5c1ea655cd7->enter($__internal_2272c462ed14546e325479611cdba06f075c43085e8660114d0aa5c1ea655cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_45dcd26be4c306abe7946d0de51b8aeeab37b6c10f8bac38c369f36e9c0369fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45dcd26be4c306abe7946d0de51b8aeeab37b6c10f8bac38c369f36e9c0369fe->enter($__internal_45dcd26be4c306abe7946d0de51b8aeeab37b6c10f8bac38c369f36e9c0369fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h2>Article creation</h2>

    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_45dcd26be4c306abe7946d0de51b8aeeab37b6c10f8bac38c369f36e9c0369fe->leave($__internal_45dcd26be4c306abe7946d0de51b8aeeab37b6c10f8bac38c369f36e9c0369fe_prof);

        
        $__internal_2272c462ed14546e325479611cdba06f075c43085e8660114d0aa5c1ea655cd7->leave($__internal_2272c462ed14546e325479611cdba06f075c43085e8660114d0aa5c1ea655cd7_prof);

    }

    public function getTemplateName()
    {
        return ":article:new.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  60 => 8,  55 => 6,  51 => 5,  47 => 3,  29 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% block body %}
    <h2>Article creation</h2>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

{% endblock %}
", ":article:new.html.twig", "/var/www/html/geek-letters/app/Resources/views/article/new.html.twig");
    }
}
