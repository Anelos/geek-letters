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
        $__internal_51c9080f70981d3fbec130caa4981fefb4303f5d5c100b513ff0ab2569974a23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51c9080f70981d3fbec130caa4981fefb4303f5d5c100b513ff0ab2569974a23->enter($__internal_51c9080f70981d3fbec130caa4981fefb4303f5d5c100b513ff0ab2569974a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:edit.html.twig"));

        $__internal_72cc3a0e67c29a5a7fe71a9ae0d2d9ff997a8bd673ab52152abc6df66113d730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72cc3a0e67c29a5a7fe71a9ae0d2d9ff997a8bd673ab52152abc6df66113d730->enter($__internal_72cc3a0e67c29a5a7fe71a9ae0d2d9ff997a8bd673ab52152abc6df66113d730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51c9080f70981d3fbec130caa4981fefb4303f5d5c100b513ff0ab2569974a23->leave($__internal_51c9080f70981d3fbec130caa4981fefb4303f5d5c100b513ff0ab2569974a23_prof);

        
        $__internal_72cc3a0e67c29a5a7fe71a9ae0d2d9ff997a8bd673ab52152abc6df66113d730->leave($__internal_72cc3a0e67c29a5a7fe71a9ae0d2d9ff997a8bd673ab52152abc6df66113d730_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_79a547985805f9625e971db366d3dfa17a27d9514e31606238ee92adeebaecf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79a547985805f9625e971db366d3dfa17a27d9514e31606238ee92adeebaecf5->enter($__internal_79a547985805f9625e971db366d3dfa17a27d9514e31606238ee92adeebaecf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_787dcc9c6e0985957e3cba3402d725e2a5c679819ae1165751282796eb0b5bf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_787dcc9c6e0985957e3cba3402d725e2a5c679819ae1165751282796eb0b5bf9->enter($__internal_787dcc9c6e0985957e3cba3402d725e2a5c679819ae1165751282796eb0b5bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_787dcc9c6e0985957e3cba3402d725e2a5c679819ae1165751282796eb0b5bf9->leave($__internal_787dcc9c6e0985957e3cba3402d725e2a5c679819ae1165751282796eb0b5bf9_prof);

        
        $__internal_79a547985805f9625e971db366d3dfa17a27d9514e31606238ee92adeebaecf5->leave($__internal_79a547985805f9625e971db366d3dfa17a27d9514e31606238ee92adeebaecf5_prof);

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
