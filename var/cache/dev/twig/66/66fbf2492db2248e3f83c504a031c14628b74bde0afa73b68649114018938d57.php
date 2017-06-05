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
        $__internal_bb376f8c1ddfeee515acf7e30861dac5f5f04e80bb7ddf91e54d0465716830e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb376f8c1ddfeee515acf7e30861dac5f5f04e80bb7ddf91e54d0465716830e2->enter($__internal_bb376f8c1ddfeee515acf7e30861dac5f5f04e80bb7ddf91e54d0465716830e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:edit.html.twig"));

        $__internal_53f41bd41e750c87baea77a12c75ed1d565c972bab45561c9d63e2174825ddd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53f41bd41e750c87baea77a12c75ed1d565c972bab45561c9d63e2174825ddd3->enter($__internal_53f41bd41e750c87baea77a12c75ed1d565c972bab45561c9d63e2174825ddd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb376f8c1ddfeee515acf7e30861dac5f5f04e80bb7ddf91e54d0465716830e2->leave($__internal_bb376f8c1ddfeee515acf7e30861dac5f5f04e80bb7ddf91e54d0465716830e2_prof);

        
        $__internal_53f41bd41e750c87baea77a12c75ed1d565c972bab45561c9d63e2174825ddd3->leave($__internal_53f41bd41e750c87baea77a12c75ed1d565c972bab45561c9d63e2174825ddd3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_beaae0026936de62cec8214cbebbe2f4cf056287acc2918317d8c22b951e1d62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beaae0026936de62cec8214cbebbe2f4cf056287acc2918317d8c22b951e1d62->enter($__internal_beaae0026936de62cec8214cbebbe2f4cf056287acc2918317d8c22b951e1d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_106a01ed446a2961d7b38b6f2fd34a1596b273e4d0c60dc711c89d8ac7a21285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_106a01ed446a2961d7b38b6f2fd34a1596b273e4d0c60dc711c89d8ac7a21285->enter($__internal_106a01ed446a2961d7b38b6f2fd34a1596b273e4d0c60dc711c89d8ac7a21285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_106a01ed446a2961d7b38b6f2fd34a1596b273e4d0c60dc711c89d8ac7a21285->leave($__internal_106a01ed446a2961d7b38b6f2fd34a1596b273e4d0c60dc711c89d8ac7a21285_prof);

        
        $__internal_beaae0026936de62cec8214cbebbe2f4cf056287acc2918317d8c22b951e1d62->leave($__internal_beaae0026936de62cec8214cbebbe2f4cf056287acc2918317d8c22b951e1d62_prof);

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
