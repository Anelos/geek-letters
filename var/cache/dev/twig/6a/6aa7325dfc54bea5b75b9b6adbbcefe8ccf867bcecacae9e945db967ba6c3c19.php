<?php

/* :category:show.html.twig */
class __TwigTemplate_b8cf340853ced7f12a79a390c40ddbab0a9228e9e56f323037d657832967c488 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":category:show.html.twig", 1);
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
        $__internal_6ce8ff86783953c33a175d3f13838a693b14276f83bf7118e11f71c2353b81ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ce8ff86783953c33a175d3f13838a693b14276f83bf7118e11f71c2353b81ef->enter($__internal_6ce8ff86783953c33a175d3f13838a693b14276f83bf7118e11f71c2353b81ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:show.html.twig"));

        $__internal_b5032f9b02be70d6b082ccc4860fe1c48c8326afeb5cd70d63fa81ace6c40779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5032f9b02be70d6b082ccc4860fe1c48c8326afeb5cd70d63fa81ace6c40779->enter($__internal_b5032f9b02be70d6b082ccc4860fe1c48c8326afeb5cd70d63fa81ace6c40779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ce8ff86783953c33a175d3f13838a693b14276f83bf7118e11f71c2353b81ef->leave($__internal_6ce8ff86783953c33a175d3f13838a693b14276f83bf7118e11f71c2353b81ef_prof);

        
        $__internal_b5032f9b02be70d6b082ccc4860fe1c48c8326afeb5cd70d63fa81ace6c40779->leave($__internal_b5032f9b02be70d6b082ccc4860fe1c48c8326afeb5cd70d63fa81ace6c40779_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc9e2a0d1afdcdc99aa69a26e169a74c7b3adee324fdfb3e6070c7fb54c71bbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc9e2a0d1afdcdc99aa69a26e169a74c7b3adee324fdfb3e6070c7fb54c71bbb->enter($__internal_bc9e2a0d1afdcdc99aa69a26e169a74c7b3adee324fdfb3e6070c7fb54c71bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_93fcef3c17a8b0c709dbe4f093e4cad7a14aa73abc622b4c2fbbd7db0bc45e2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93fcef3c17a8b0c709dbe4f093e4cad7a14aa73abc622b4c2fbbd7db0bc45e2a->enter($__internal_93fcef3c17a8b0c709dbe4f093e4cad7a14aa73abc622b4c2fbbd7db0bc45e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Category</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Designation</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "designation", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_edit", array("id" => $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_93fcef3c17a8b0c709dbe4f093e4cad7a14aa73abc622b4c2fbbd7db0bc45e2a->leave($__internal_93fcef3c17a8b0c709dbe4f093e4cad7a14aa73abc622b4c2fbbd7db0bc45e2a_prof);

        
        $__internal_bc9e2a0d1afdcdc99aa69a26e169a74c7b3adee324fdfb3e6070c7fb54c71bbb->leave($__internal_bc9e2a0d1afdcdc99aa69a26e169a74c7b3adee324fdfb3e6070c7fb54c71bbb_prof);

    }

    public function getTemplateName()
    {
        return ":category:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  86 => 27,  80 => 24,  74 => 21,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Category</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ category.id }}</td>
            </tr>
            <tr>
                <th>Designation</th>
                <td>{{ category.designation }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('category_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('category_edit', { 'id': category.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":category:show.html.twig", "/var/www/html/geek-letters/app/Resources/views/category/show.html.twig");
    }
}
