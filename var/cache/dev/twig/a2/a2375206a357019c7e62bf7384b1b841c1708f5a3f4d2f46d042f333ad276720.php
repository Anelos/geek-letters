<?php

/* :category:index.html.twig */
class __TwigTemplate_fe11749a9a376bafc680bf388c850bd6296912f428b0048dde26ba7ed035457e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":category:index.html.twig", 1);
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
        $__internal_51951824b22968d8df9ca7eca9a41d0a78371919482c4a82df7a8888b6b6720a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51951824b22968d8df9ca7eca9a41d0a78371919482c4a82df7a8888b6b6720a->enter($__internal_51951824b22968d8df9ca7eca9a41d0a78371919482c4a82df7a8888b6b6720a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:index.html.twig"));

        $__internal_3966a74c5bdd566224e7f397b7b0573a21927df0bdecd549b824525e62867ee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3966a74c5bdd566224e7f397b7b0573a21927df0bdecd549b824525e62867ee2->enter($__internal_3966a74c5bdd566224e7f397b7b0573a21927df0bdecd549b824525e62867ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51951824b22968d8df9ca7eca9a41d0a78371919482c4a82df7a8888b6b6720a->leave($__internal_51951824b22968d8df9ca7eca9a41d0a78371919482c4a82df7a8888b6b6720a_prof);

        
        $__internal_3966a74c5bdd566224e7f397b7b0573a21927df0bdecd549b824525e62867ee2->leave($__internal_3966a74c5bdd566224e7f397b7b0573a21927df0bdecd549b824525e62867ee2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2dc01c38ccc80892eca75147f24d096904f30c7da1a3729bf18d0d3ceb02425 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2dc01c38ccc80892eca75147f24d096904f30c7da1a3729bf18d0d3ceb02425->enter($__internal_d2dc01c38ccc80892eca75147f24d096904f30c7da1a3729bf18d0d3ceb02425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_97bcf83d7263d0dba5114bef6db45735115855770d4479193d50a9015769bd6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97bcf83d7263d0dba5114bef6db45735115855770d4479193d50a9015769bd6e->enter($__internal_97bcf83d7263d0dba5114bef6db45735115855770d4479193d50a9015769bd6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Categories list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Designation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_show", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "designation", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_show", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_edit", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_new");
        echo "\">Create a new category</a>
        </li>
    </ul>
";
        
        $__internal_97bcf83d7263d0dba5114bef6db45735115855770d4479193d50a9015769bd6e->leave($__internal_97bcf83d7263d0dba5114bef6db45735115855770d4479193d50a9015769bd6e_prof);

        
        $__internal_d2dc01c38ccc80892eca75147f24d096904f30c7da1a3729bf18d0d3ceb02425->leave($__internal_d2dc01c38ccc80892eca75147f24d096904f30c7da1a3729bf18d0d3ceb02425_prof);

    }

    public function getTemplateName()
    {
        return ":category:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 36,  100 => 31,  88 => 25,  82 => 22,  75 => 18,  69 => 17,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Categories list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Designation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for category in categories %}
            <tr>
                <td><a href=\"{{ path('category_show', { 'id': category.id }) }}\">{{ category.id }}</a></td>
                <td>{{ category.designation }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('category_show', { 'id': category.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('category_edit', { 'id': category.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('category_new') }}\">Create a new category</a>
        </li>
    </ul>
{% endblock %}
", ":category:index.html.twig", "/var/www/html/geek-letters/app/Resources/views/category/index.html.twig");
    }
}
