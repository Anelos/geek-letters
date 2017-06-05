<?php

/* :article:show.html.twig */
class __TwigTemplate_20513a8fbfa9fa1ebe86482ed2393e135c0ac9d2fe7da717e4e1290185cba720 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":article:show.html.twig", 1);
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
        $__internal_b0e4e5c9f08b236381b8856a12651b497d821e7340150cc59e2186466c9d9e2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0e4e5c9f08b236381b8856a12651b497d821e7340150cc59e2186466c9d9e2d->enter($__internal_b0e4e5c9f08b236381b8856a12651b497d821e7340150cc59e2186466c9d9e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:show.html.twig"));

        $__internal_8750e3d96b91b9aff33c02aa6e2a9bcd859027415f8d91332ca2ebb4d4d8c81e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8750e3d96b91b9aff33c02aa6e2a9bcd859027415f8d91332ca2ebb4d4d8c81e->enter($__internal_8750e3d96b91b9aff33c02aa6e2a9bcd859027415f8d91332ca2ebb4d4d8c81e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0e4e5c9f08b236381b8856a12651b497d821e7340150cc59e2186466c9d9e2d->leave($__internal_b0e4e5c9f08b236381b8856a12651b497d821e7340150cc59e2186466c9d9e2d_prof);

        
        $__internal_8750e3d96b91b9aff33c02aa6e2a9bcd859027415f8d91332ca2ebb4d4d8c81e->leave($__internal_8750e3d96b91b9aff33c02aa6e2a9bcd859027415f8d91332ca2ebb4d4d8c81e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_11fa25cc460d4a6ab7e4abf1ea34b915ed7e869c1e45b984c46bc315930d0dfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11fa25cc460d4a6ab7e4abf1ea34b915ed7e869c1e45b984c46bc315930d0dfb->enter($__internal_11fa25cc460d4a6ab7e4abf1ea34b915ed7e869c1e45b984c46bc315930d0dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e82c3749e5997cd45c50d555d89edb6763a5c244228f3c4219e243514971bc44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e82c3749e5997cd45c50d555d89edb6763a5c244228f3c4219e243514971bc44->enter($__internal_e82c3749e5997cd45c50d555d89edb6763a5c244228f3c4219e243514971bc44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Article</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Published</th>
                <td>";
        // line 14
        if ($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "published", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "content", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>";
        // line 26
        if ($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "createdAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updatedat</th>
                <td>";
        // line 30
        if ($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "updatedAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_edit", array("id" => $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_e82c3749e5997cd45c50d555d89edb6763a5c244228f3c4219e243514971bc44->leave($__internal_e82c3749e5997cd45c50d555d89edb6763a5c244228f3c4219e243514971bc44_prof);

        
        $__internal_11fa25cc460d4a6ab7e4abf1ea34b915ed7e869c1e45b984c46bc315930d0dfb->leave($__internal_11fa25cc460d4a6ab7e4abf1ea34b915ed7e869c1e45b984c46bc315930d0dfb_prof);

    }

    public function getTemplateName()
    {
        return ":article:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 45,  122 => 43,  116 => 40,  110 => 37,  98 => 30,  89 => 26,  82 => 22,  75 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Article</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ article.id }}</td>
            </tr>
            <tr>
                <th>Published</th>
                <td>{% if article.published %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ article.title }}</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>{{ article.content }}</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>{% if article.createdAt %}{{ article.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Updatedat</th>
                <td>{% if article.updatedAt %}{{ article.updatedAt|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('article_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('article_edit', { 'id': article.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":article:show.html.twig", "/var/www/html/geek-letters/app/Resources/views/article/show.html.twig");
    }
}
