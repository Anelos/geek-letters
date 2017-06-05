<?php

/* :comment:edit.html.twig */
class __TwigTemplate_974310a55f95ac75a3491be5de74520d54280cff544abd954ce05ce48f6df575 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":comment:edit.html.twig", 1);
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
        $__internal_3e54e33efe0bf1c800ed3af7a0670dddc42821baf5927848318cdf516f2f3052 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e54e33efe0bf1c800ed3af7a0670dddc42821baf5927848318cdf516f2f3052->enter($__internal_3e54e33efe0bf1c800ed3af7a0670dddc42821baf5927848318cdf516f2f3052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:edit.html.twig"));

        $__internal_7bcc15c57a1f172720fe25ada1b0d62ace12584bfa0216efd4074b8bdf2c3a7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bcc15c57a1f172720fe25ada1b0d62ace12584bfa0216efd4074b8bdf2c3a7e->enter($__internal_7bcc15c57a1f172720fe25ada1b0d62ace12584bfa0216efd4074b8bdf2c3a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e54e33efe0bf1c800ed3af7a0670dddc42821baf5927848318cdf516f2f3052->leave($__internal_3e54e33efe0bf1c800ed3af7a0670dddc42821baf5927848318cdf516f2f3052_prof);

        
        $__internal_7bcc15c57a1f172720fe25ada1b0d62ace12584bfa0216efd4074b8bdf2c3a7e->leave($__internal_7bcc15c57a1f172720fe25ada1b0d62ace12584bfa0216efd4074b8bdf2c3a7e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8926ff70d8340f5c3becde092fda71e739dd94ee8b648e0762c6015a0fbd12c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8926ff70d8340f5c3becde092fda71e739dd94ee8b648e0762c6015a0fbd12c2->enter($__internal_8926ff70d8340f5c3becde092fda71e739dd94ee8b648e0762c6015a0fbd12c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4e135138d75bc264829db304b6b07a0b0ae84a8d93500368f09be492e952ac3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e135138d75bc264829db304b6b07a0b0ae84a8d93500368f09be492e952ac3d->enter($__internal_4e135138d75bc264829db304b6b07a0b0ae84a8d93500368f09be492e952ac3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comment edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_index");
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
        
        $__internal_4e135138d75bc264829db304b6b07a0b0ae84a8d93500368f09be492e952ac3d->leave($__internal_4e135138d75bc264829db304b6b07a0b0ae84a8d93500368f09be492e952ac3d_prof);

        
        $__internal_8926ff70d8340f5c3becde092fda71e739dd94ee8b648e0762c6015a0fbd12c2->leave($__internal_8926ff70d8340f5c3becde092fda71e739dd94ee8b648e0762c6015a0fbd12c2_prof);

    }

    public function getTemplateName()
    {
        return ":comment:edit.html.twig";
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
    <h1>Comment edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('comment_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":comment:edit.html.twig", "/var/www/html/geek-letters/app/Resources/views/comment/edit.html.twig");
    }
}
