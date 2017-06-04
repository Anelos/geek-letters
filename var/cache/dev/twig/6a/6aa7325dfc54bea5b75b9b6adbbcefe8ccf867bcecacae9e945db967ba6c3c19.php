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
        $__internal_3454a023145854826c7fa9421635d37faf0d5e191f28be84cff5f37619760e75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3454a023145854826c7fa9421635d37faf0d5e191f28be84cff5f37619760e75->enter($__internal_3454a023145854826c7fa9421635d37faf0d5e191f28be84cff5f37619760e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:show.html.twig"));

        $__internal_65711796b4f834a26a433ccddffccf4e5e6efe5975f7ee4046f083bf71e8db5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65711796b4f834a26a433ccddffccf4e5e6efe5975f7ee4046f083bf71e8db5f->enter($__internal_65711796b4f834a26a433ccddffccf4e5e6efe5975f7ee4046f083bf71e8db5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3454a023145854826c7fa9421635d37faf0d5e191f28be84cff5f37619760e75->leave($__internal_3454a023145854826c7fa9421635d37faf0d5e191f28be84cff5f37619760e75_prof);

        
        $__internal_65711796b4f834a26a433ccddffccf4e5e6efe5975f7ee4046f083bf71e8db5f->leave($__internal_65711796b4f834a26a433ccddffccf4e5e6efe5975f7ee4046f083bf71e8db5f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad425ed866759b23b6a0ecd2ba92401abd9dd0c5aeec1dde392857b8d0b6c5b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad425ed866759b23b6a0ecd2ba92401abd9dd0c5aeec1dde392857b8d0b6c5b8->enter($__internal_ad425ed866759b23b6a0ecd2ba92401abd9dd0c5aeec1dde392857b8d0b6c5b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9cb7be27df149f5bf2a18a836a587f69f8dc3f7d0fcfdcb174a77783361e7887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cb7be27df149f5bf2a18a836a587f69f8dc3f7d0fcfdcb174a77783361e7887->enter($__internal_9cb7be27df149f5bf2a18a836a587f69f8dc3f7d0fcfdcb174a77783361e7887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9cb7be27df149f5bf2a18a836a587f69f8dc3f7d0fcfdcb174a77783361e7887->leave($__internal_9cb7be27df149f5bf2a18a836a587f69f8dc3f7d0fcfdcb174a77783361e7887_prof);

        
        $__internal_ad425ed866759b23b6a0ecd2ba92401abd9dd0c5aeec1dde392857b8d0b6c5b8->leave($__internal_ad425ed866759b23b6a0ecd2ba92401abd9dd0c5aeec1dde392857b8d0b6c5b8_prof);

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
