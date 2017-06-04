<?php

/* :comment:show.html.twig */
class __TwigTemplate_223fc149fa56cf7765b6916bf048b7a15c7a33eaafaec3bab8dc3270745061c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":comment:show.html.twig", 1);
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
        $__internal_2acf2ebf62bfa910bfe018a0710f49ef54e4057693e844f050c084a0339ef543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2acf2ebf62bfa910bfe018a0710f49ef54e4057693e844f050c084a0339ef543->enter($__internal_2acf2ebf62bfa910bfe018a0710f49ef54e4057693e844f050c084a0339ef543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:show.html.twig"));

        $__internal_cc03bfc4084dfcbc341b9ed0ac9fb3b94b6da395e75d3ad9cc24f66b2af1c557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc03bfc4084dfcbc341b9ed0ac9fb3b94b6da395e75d3ad9cc24f66b2af1c557->enter($__internal_cc03bfc4084dfcbc341b9ed0ac9fb3b94b6da395e75d3ad9cc24f66b2af1c557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2acf2ebf62bfa910bfe018a0710f49ef54e4057693e844f050c084a0339ef543->leave($__internal_2acf2ebf62bfa910bfe018a0710f49ef54e4057693e844f050c084a0339ef543_prof);

        
        $__internal_cc03bfc4084dfcbc341b9ed0ac9fb3b94b6da395e75d3ad9cc24f66b2af1c557->leave($__internal_cc03bfc4084dfcbc341b9ed0ac9fb3b94b6da395e75d3ad9cc24f66b2af1c557_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c5af56106064df93db8a70e83cba7386ac37e8dd03ebcfe57c34d9f4ea0ba1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c5af56106064df93db8a70e83cba7386ac37e8dd03ebcfe57c34d9f4ea0ba1c->enter($__internal_0c5af56106064df93db8a70e83cba7386ac37e8dd03ebcfe57c34d9f4ea0ba1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bb3ca4f43cf21f3e67cd164c4e1e246770f5b588fc90a7dbc20a4ba67efe3c04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb3ca4f43cf21f3e67cd164c4e1e246770f5b588fc90a7dbc20a4ba67efe3c04->enter($__internal_bb3ca4f43cf21f3e67cd164c4e1e246770f5b588fc90a7dbc20a4ba67efe3c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comment</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Postdate</th>
                <td>";
        // line 14
        if ($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "postDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "postDate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "content", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_edit", array("id" => $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_bb3ca4f43cf21f3e67cd164c4e1e246770f5b588fc90a7dbc20a4ba67efe3c04->leave($__internal_bb3ca4f43cf21f3e67cd164c4e1e246770f5b588fc90a7dbc20a4ba67efe3c04_prof);

        
        $__internal_0c5af56106064df93db8a70e83cba7386ac37e8dd03ebcfe57c34d9f4ea0ba1c->leave($__internal_0c5af56106064df93db8a70e83cba7386ac37e8dd03ebcfe57c34d9f4ea0ba1c_prof);

    }

    public function getTemplateName()
    {
        return ":comment:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 33,  95 => 31,  89 => 28,  83 => 25,  73 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Comment</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ comment.id }}</td>
            </tr>
            <tr>
                <th>Postdate</th>
                <td>{% if comment.postDate %}{{ comment.postDate|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>{{ comment.content }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('comment_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('comment_edit', { 'id': comment.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":comment:show.html.twig", "/var/www/html/geek-letters/app/Resources/views/comment/show.html.twig");
    }
}
