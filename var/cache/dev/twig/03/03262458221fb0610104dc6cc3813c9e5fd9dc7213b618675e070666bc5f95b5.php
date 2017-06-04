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
        $__internal_6ec0430fcd1f07eceff1e3d54e252fdb9b95f317d45012d01c68111de62cb22d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ec0430fcd1f07eceff1e3d54e252fdb9b95f317d45012d01c68111de62cb22d->enter($__internal_6ec0430fcd1f07eceff1e3d54e252fdb9b95f317d45012d01c68111de62cb22d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:show.html.twig"));

        $__internal_20bef0d37ad219c085e38adb462736629f1117384a7482e7551dc97bbaea253f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20bef0d37ad219c085e38adb462736629f1117384a7482e7551dc97bbaea253f->enter($__internal_20bef0d37ad219c085e38adb462736629f1117384a7482e7551dc97bbaea253f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ec0430fcd1f07eceff1e3d54e252fdb9b95f317d45012d01c68111de62cb22d->leave($__internal_6ec0430fcd1f07eceff1e3d54e252fdb9b95f317d45012d01c68111de62cb22d_prof);

        
        $__internal_20bef0d37ad219c085e38adb462736629f1117384a7482e7551dc97bbaea253f->leave($__internal_20bef0d37ad219c085e38adb462736629f1117384a7482e7551dc97bbaea253f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2632905af9bb3960191b760647536ff802e16c21189574f66423e37b8ac92e61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2632905af9bb3960191b760647536ff802e16c21189574f66423e37b8ac92e61->enter($__internal_2632905af9bb3960191b760647536ff802e16c21189574f66423e37b8ac92e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e9270782937e54122f82c8dfdd506070a81f6276d7bf5e6b761f8e6bb932895a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9270782937e54122f82c8dfdd506070a81f6276d7bf5e6b761f8e6bb932895a->enter($__internal_e9270782937e54122f82c8dfdd506070a81f6276d7bf5e6b761f8e6bb932895a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <th>Postdate</th>
                <td>";
        // line 14
        if ($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "postDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "postDate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Published</th>
                <td>";
        // line 18
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
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "content", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_edit", array("id" => $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_e9270782937e54122f82c8dfdd506070a81f6276d7bf5e6b761f8e6bb932895a->leave($__internal_e9270782937e54122f82c8dfdd506070a81f6276d7bf5e6b761f8e6bb932895a_prof);

        
        $__internal_2632905af9bb3960191b760647536ff802e16c21189574f66423e37b8ac92e61->leave($__internal_2632905af9bb3960191b760647536ff802e16c21189574f66423e37b8ac92e61_prof);

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
        return array (  118 => 41,  113 => 39,  107 => 36,  101 => 33,  91 => 26,  84 => 22,  73 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
                <th>Postdate</th>
                <td>{% if article.postDate %}{{ article.postDate|date('Y-m-d H:i:s') }}{% endif %}</td>
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
