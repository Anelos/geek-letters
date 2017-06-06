<?php

/* :category:edit.html.twig */
class __TwigTemplate_df9b3a1e529dde9350f650d2398dc53f564be3f6485c512901913a1fa93e88c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":category:edit.html.twig", 1);
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
        $__internal_4e7949278f7f385b06d6cc91dad474f72acba16ee38ebdacbbeb8a3f29f024db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e7949278f7f385b06d6cc91dad474f72acba16ee38ebdacbbeb8a3f29f024db->enter($__internal_4e7949278f7f385b06d6cc91dad474f72acba16ee38ebdacbbeb8a3f29f024db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:edit.html.twig"));

        $__internal_f0032aac69a9d5f2bca656389c8e7ca8464a2cdc4a3336287ec234bbe68fd3bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0032aac69a9d5f2bca656389c8e7ca8464a2cdc4a3336287ec234bbe68fd3bc->enter($__internal_f0032aac69a9d5f2bca656389c8e7ca8464a2cdc4a3336287ec234bbe68fd3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e7949278f7f385b06d6cc91dad474f72acba16ee38ebdacbbeb8a3f29f024db->leave($__internal_4e7949278f7f385b06d6cc91dad474f72acba16ee38ebdacbbeb8a3f29f024db_prof);

        
        $__internal_f0032aac69a9d5f2bca656389c8e7ca8464a2cdc4a3336287ec234bbe68fd3bc->leave($__internal_f0032aac69a9d5f2bca656389c8e7ca8464a2cdc4a3336287ec234bbe68fd3bc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8473be6d0d2b03df3254c9ca8702c0ee12a08979fd73035d971a156ff2b7bfcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8473be6d0d2b03df3254c9ca8702c0ee12a08979fd73035d971a156ff2b7bfcb->enter($__internal_8473be6d0d2b03df3254c9ca8702c0ee12a08979fd73035d971a156ff2b7bfcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ffb18671b1525cdfda6305d299becfc21af06ccca92d016a4de4e95188347750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffb18671b1525cdfda6305d299becfc21af06ccca92d016a4de4e95188347750->enter($__internal_ffb18671b1525cdfda6305d299becfc21af06ccca92d016a4de4e95188347750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Category edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_index");
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
        
        $__internal_ffb18671b1525cdfda6305d299becfc21af06ccca92d016a4de4e95188347750->leave($__internal_ffb18671b1525cdfda6305d299becfc21af06ccca92d016a4de4e95188347750_prof);

        
        $__internal_8473be6d0d2b03df3254c9ca8702c0ee12a08979fd73035d971a156ff2b7bfcb->leave($__internal_8473be6d0d2b03df3254c9ca8702c0ee12a08979fd73035d971a156ff2b7bfcb_prof);

    }

    public function getTemplateName()
    {
        return ":category:edit.html.twig";
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
    <h1>Category edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('category_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":category:edit.html.twig", "/var/www/html/geek-letters/app/Resources/views/category/edit.html.twig");
    }
}
