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
        $__internal_064d873f9b5e1c18c3ef072c87c54264154a11c4d2f0ecdec1ebf47359e7ea3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_064d873f9b5e1c18c3ef072c87c54264154a11c4d2f0ecdec1ebf47359e7ea3a->enter($__internal_064d873f9b5e1c18c3ef072c87c54264154a11c4d2f0ecdec1ebf47359e7ea3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $__internal_bbe1df6df0b3e2aa6d39bb976603e5fa95363d8688620db4982924a3f7dba4d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbe1df6df0b3e2aa6d39bb976603e5fa95363d8688620db4982924a3f7dba4d0->enter($__internal_bbe1df6df0b3e2aa6d39bb976603e5fa95363d8688620db4982924a3f7dba4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_064d873f9b5e1c18c3ef072c87c54264154a11c4d2f0ecdec1ebf47359e7ea3a->leave($__internal_064d873f9b5e1c18c3ef072c87c54264154a11c4d2f0ecdec1ebf47359e7ea3a_prof);

        
        $__internal_bbe1df6df0b3e2aa6d39bb976603e5fa95363d8688620db4982924a3f7dba4d0->leave($__internal_bbe1df6df0b3e2aa6d39bb976603e5fa95363d8688620db4982924a3f7dba4d0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b345317403231987217231c3f1784233524422975be69754023dc1b15019b830 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b345317403231987217231c3f1784233524422975be69754023dc1b15019b830->enter($__internal_b345317403231987217231c3f1784233524422975be69754023dc1b15019b830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d8a31b745f73866177fd60f9aefa2131f0c295212c0ef8d21e21517f086a6fe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8a31b745f73866177fd60f9aefa2131f0c295212c0ef8d21e21517f086a6fe6->enter($__internal_d8a31b745f73866177fd60f9aefa2131f0c295212c0ef8d21e21517f086a6fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d8a31b745f73866177fd60f9aefa2131f0c295212c0ef8d21e21517f086a6fe6->leave($__internal_d8a31b745f73866177fd60f9aefa2131f0c295212c0ef8d21e21517f086a6fe6_prof);

        
        $__internal_b345317403231987217231c3f1784233524422975be69754023dc1b15019b830->leave($__internal_b345317403231987217231c3f1784233524422975be69754023dc1b15019b830_prof);

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
