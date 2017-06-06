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
        $__internal_ec4e4cb9d19a826e0b0dc10feba42282f5dcb0480ba63ebe589f5347ddfc8ad7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec4e4cb9d19a826e0b0dc10feba42282f5dcb0480ba63ebe589f5347ddfc8ad7->enter($__internal_ec4e4cb9d19a826e0b0dc10feba42282f5dcb0480ba63ebe589f5347ddfc8ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:show.html.twig"));

        $__internal_98dfd6bb3a59e78905b5e39bd3573658fabed4f3ede616d6cf1dfdfe0f3f2b64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98dfd6bb3a59e78905b5e39bd3573658fabed4f3ede616d6cf1dfdfe0f3f2b64->enter($__internal_98dfd6bb3a59e78905b5e39bd3573658fabed4f3ede616d6cf1dfdfe0f3f2b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec4e4cb9d19a826e0b0dc10feba42282f5dcb0480ba63ebe589f5347ddfc8ad7->leave($__internal_ec4e4cb9d19a826e0b0dc10feba42282f5dcb0480ba63ebe589f5347ddfc8ad7_prof);

        
        $__internal_98dfd6bb3a59e78905b5e39bd3573658fabed4f3ede616d6cf1dfdfe0f3f2b64->leave($__internal_98dfd6bb3a59e78905b5e39bd3573658fabed4f3ede616d6cf1dfdfe0f3f2b64_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd9b5bab84aaf802b7e4fb65cb4a1bf8f48ef776933d4cbe867cff31028946cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd9b5bab84aaf802b7e4fb65cb4a1bf8f48ef776933d4cbe867cff31028946cd->enter($__internal_cd9b5bab84aaf802b7e4fb65cb4a1bf8f48ef776933d4cbe867cff31028946cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7727cfa3e16104e72a5ef72576eee81cd052bed4dc871c9957b70e4f6c642785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7727cfa3e16104e72a5ef72576eee81cd052bed4dc871c9957b70e4f6c642785->enter($__internal_7727cfa3e16104e72a5ef72576eee81cd052bed4dc871c9957b70e4f6c642785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7727cfa3e16104e72a5ef72576eee81cd052bed4dc871c9957b70e4f6c642785->leave($__internal_7727cfa3e16104e72a5ef72576eee81cd052bed4dc871c9957b70e4f6c642785_prof);

        
        $__internal_cd9b5bab84aaf802b7e4fb65cb4a1bf8f48ef776933d4cbe867cff31028946cd->leave($__internal_cd9b5bab84aaf802b7e4fb65cb4a1bf8f48ef776933d4cbe867cff31028946cd_prof);

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
