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
        $__internal_adabb87a3f1c6eeae349437ec82a706f9b68cbea57b5b9fc25a837a3bdbcb5b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adabb87a3f1c6eeae349437ec82a706f9b68cbea57b5b9fc25a837a3bdbcb5b7->enter($__internal_adabb87a3f1c6eeae349437ec82a706f9b68cbea57b5b9fc25a837a3bdbcb5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $__internal_a5eb376e0bbbfb8e4da8e93b1700b78b3fa4dd8ba30354f1a18c4d34071f9cc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5eb376e0bbbfb8e4da8e93b1700b78b3fa4dd8ba30354f1a18c4d34071f9cc7->enter($__internal_a5eb376e0bbbfb8e4da8e93b1700b78b3fa4dd8ba30354f1a18c4d34071f9cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adabb87a3f1c6eeae349437ec82a706f9b68cbea57b5b9fc25a837a3bdbcb5b7->leave($__internal_adabb87a3f1c6eeae349437ec82a706f9b68cbea57b5b9fc25a837a3bdbcb5b7_prof);

        
        $__internal_a5eb376e0bbbfb8e4da8e93b1700b78b3fa4dd8ba30354f1a18c4d34071f9cc7->leave($__internal_a5eb376e0bbbfb8e4da8e93b1700b78b3fa4dd8ba30354f1a18c4d34071f9cc7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_54751a2b1c022196c78bfde812ac62d82e15cd97e3a40f2b70261bef3626bd20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54751a2b1c022196c78bfde812ac62d82e15cd97e3a40f2b70261bef3626bd20->enter($__internal_54751a2b1c022196c78bfde812ac62d82e15cd97e3a40f2b70261bef3626bd20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c624d37c59b4cdaca732b34bcadd49d4dae7774bab020af4e524c9ad9ccee15f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c624d37c59b4cdaca732b34bcadd49d4dae7774bab020af4e524c9ad9ccee15f->enter($__internal_c624d37c59b4cdaca732b34bcadd49d4dae7774bab020af4e524c9ad9ccee15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c624d37c59b4cdaca732b34bcadd49d4dae7774bab020af4e524c9ad9ccee15f->leave($__internal_c624d37c59b4cdaca732b34bcadd49d4dae7774bab020af4e524c9ad9ccee15f_prof);

        
        $__internal_54751a2b1c022196c78bfde812ac62d82e15cd97e3a40f2b70261bef3626bd20->leave($__internal_54751a2b1c022196c78bfde812ac62d82e15cd97e3a40f2b70261bef3626bd20_prof);

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