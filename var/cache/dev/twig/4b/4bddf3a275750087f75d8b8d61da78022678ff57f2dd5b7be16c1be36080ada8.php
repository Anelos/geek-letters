<?php

/* :comment:index.html.twig */
class __TwigTemplate_2e0e84eb2da548ce4b54af91f0734d4e32fa839865826bbcbe21069965a6bc2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":comment:index.html.twig", 1);
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
        $__internal_1088525cd4d931d06b3f2cf2bb4d45d85737b563f3294fa3864ef6d6ddfae78f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1088525cd4d931d06b3f2cf2bb4d45d85737b563f3294fa3864ef6d6ddfae78f->enter($__internal_1088525cd4d931d06b3f2cf2bb4d45d85737b563f3294fa3864ef6d6ddfae78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:index.html.twig"));

        $__internal_efdadf395f2d8c0f43a305256ab404072b036f72e1b569ab6107a5fa326cb58f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efdadf395f2d8c0f43a305256ab404072b036f72e1b569ab6107a5fa326cb58f->enter($__internal_efdadf395f2d8c0f43a305256ab404072b036f72e1b569ab6107a5fa326cb58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1088525cd4d931d06b3f2cf2bb4d45d85737b563f3294fa3864ef6d6ddfae78f->leave($__internal_1088525cd4d931d06b3f2cf2bb4d45d85737b563f3294fa3864ef6d6ddfae78f_prof);

        
        $__internal_efdadf395f2d8c0f43a305256ab404072b036f72e1b569ab6107a5fa326cb58f->leave($__internal_efdadf395f2d8c0f43a305256ab404072b036f72e1b569ab6107a5fa326cb58f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca401bfae0fc0c1510e79139629b98f0925b74e8abe1ff1b99452f1381ecb0fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca401bfae0fc0c1510e79139629b98f0925b74e8abe1ff1b99452f1381ecb0fc->enter($__internal_ca401bfae0fc0c1510e79139629b98f0925b74e8abe1ff1b99452f1381ecb0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a708ac5813e3d815b2f946e40b455df21f8667fc363f02123fc0c99f9d81533f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a708ac5813e3d815b2f946e40b455df21f8667fc363f02123fc0c99f9d81533f->enter($__internal_a708ac5813e3d815b2f946e40b455df21f8667fc363f02123fc0c99f9d81533f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comments list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Postdate</th>
                <th>Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_show", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            if ($this->getAttribute($context["comment"], "postDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "postDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_show", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_edit", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_new");
        echo "\">Create a new comment</a>
        </li>
    </ul>
";
        
        $__internal_a708ac5813e3d815b2f946e40b455df21f8667fc363f02123fc0c99f9d81533f->leave($__internal_a708ac5813e3d815b2f946e40b455df21f8667fc363f02123fc0c99f9d81533f_prof);

        
        $__internal_ca401bfae0fc0c1510e79139629b98f0925b74e8abe1ff1b99452f1381ecb0fc->leave($__internal_ca401bfae0fc0c1510e79139629b98f0925b74e8abe1ff1b99452f1381ecb0fc_prof);

    }

    public function getTemplateName()
    {
        return ":comment:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 38,  107 => 33,  95 => 27,  89 => 24,  82 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Comments list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Postdate</th>
                <th>Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for comment in comments %}
            <tr>
                <td><a href=\"{{ path('comment_show', { 'id': comment.id }) }}\">{{ comment.id }}</a></td>
                <td>{% if comment.postDate %}{{ comment.postDate|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ comment.content }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('comment_show', { 'id': comment.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('comment_edit', { 'id': comment.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('comment_new') }}\">Create a new comment</a>
        </li>
    </ul>
{% endblock %}
", ":comment:index.html.twig", "/var/www/html/geek-letters/app/Resources/views/comment/index.html.twig");
    }
}
