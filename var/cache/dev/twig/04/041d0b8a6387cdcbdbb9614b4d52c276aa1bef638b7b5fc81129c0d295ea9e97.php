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
        $__internal_104bf89ccb19f217c7887ff43004a3e83a2c403f09ffad5b8073ffb3b6d3c8b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_104bf89ccb19f217c7887ff43004a3e83a2c403f09ffad5b8073ffb3b6d3c8b3->enter($__internal_104bf89ccb19f217c7887ff43004a3e83a2c403f09ffad5b8073ffb3b6d3c8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:new.html.twig"));

        $__internal_4d64b8f811cd3d846161aec5baebbd2ec76c0b2a6af25bb1eabfd8636b20d8cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d64b8f811cd3d846161aec5baebbd2ec76c0b2a6af25bb1eabfd8636b20d8cc->enter($__internal_4d64b8f811cd3d846161aec5baebbd2ec76c0b2a6af25bb1eabfd8636b20d8cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_104bf89ccb19f217c7887ff43004a3e83a2c403f09ffad5b8073ffb3b6d3c8b3->leave($__internal_104bf89ccb19f217c7887ff43004a3e83a2c403f09ffad5b8073ffb3b6d3c8b3_prof);

        
        $__internal_4d64b8f811cd3d846161aec5baebbd2ec76c0b2a6af25bb1eabfd8636b20d8cc->leave($__internal_4d64b8f811cd3d846161aec5baebbd2ec76c0b2a6af25bb1eabfd8636b20d8cc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_367f7b86ea3da11c85898d212862018b334aa111ccb577f744a9e87a593e2c01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_367f7b86ea3da11c85898d212862018b334aa111ccb577f744a9e87a593e2c01->enter($__internal_367f7b86ea3da11c85898d212862018b334aa111ccb577f744a9e87a593e2c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aff1c9b3fa5b50c7330f53ce1e540f3a114eea9b1b0a5b7651dae043379e090e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aff1c9b3fa5b50c7330f53ce1e540f3a114eea9b1b0a5b7651dae043379e090e->enter($__internal_aff1c9b3fa5b50c7330f53ce1e540f3a114eea9b1b0a5b7651dae043379e090e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_aff1c9b3fa5b50c7330f53ce1e540f3a114eea9b1b0a5b7651dae043379e090e->leave($__internal_aff1c9b3fa5b50c7330f53ce1e540f3a114eea9b1b0a5b7651dae043379e090e_prof);

        
        $__internal_367f7b86ea3da11c85898d212862018b334aa111ccb577f744a9e87a593e2c01->leave($__internal_367f7b86ea3da11c85898d212862018b334aa111ccb577f744a9e87a593e2c01_prof);

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
