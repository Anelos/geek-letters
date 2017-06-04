<?php

/* :article:index.html.twig */
class __TwigTemplate_9db522bb5090dea8fc19b8658c7b4d4cf181db8ead080b514b1ec4d98cd8bd92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":article:index.html.twig", 1);
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
        $__internal_06d7e844fdc5048d43cb3f080a37f0b5c8b2c15977424c0d5164ff424c4bc191 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06d7e844fdc5048d43cb3f080a37f0b5c8b2c15977424c0d5164ff424c4bc191->enter($__internal_06d7e844fdc5048d43cb3f080a37f0b5c8b2c15977424c0d5164ff424c4bc191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:index.html.twig"));

        $__internal_47a051de7c55faa3acc9f537b2d5f8ab8fc1cc09e254cc4dda8169049ce8c5f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47a051de7c55faa3acc9f537b2d5f8ab8fc1cc09e254cc4dda8169049ce8c5f4->enter($__internal_47a051de7c55faa3acc9f537b2d5f8ab8fc1cc09e254cc4dda8169049ce8c5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06d7e844fdc5048d43cb3f080a37f0b5c8b2c15977424c0d5164ff424c4bc191->leave($__internal_06d7e844fdc5048d43cb3f080a37f0b5c8b2c15977424c0d5164ff424c4bc191_prof);

        
        $__internal_47a051de7c55faa3acc9f537b2d5f8ab8fc1cc09e254cc4dda8169049ce8c5f4->leave($__internal_47a051de7c55faa3acc9f537b2d5f8ab8fc1cc09e254cc4dda8169049ce8c5f4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0843825e913c70e67ffb245329c4fec790483d8a818ff20a8ae014b46ec35fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0843825e913c70e67ffb245329c4fec790483d8a818ff20a8ae014b46ec35fb->enter($__internal_f0843825e913c70e67ffb245329c4fec790483d8a818ff20a8ae014b46ec35fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_75dd498ba28ee4b4f78231cc527af3d09286553ab232fffc94135282acaac332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75dd498ba28ee4b4f78231cc527af3d09286553ab232fffc94135282acaac332->enter($__internal_75dd498ba28ee4b4f78231cc527af3d09286553ab232fffc94135282acaac332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Articles list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Postdate</th>
                <th>Published</th>
                <th>Title</th>
                <th>Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_show", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            if ($this->getAttribute($context["article"], "postDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "postDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["article"], "published", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "content", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_show", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_edit", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_new");
        echo "\">Create a new article</a>
        </li>
    </ul>
";
        
        $__internal_75dd498ba28ee4b4f78231cc527af3d09286553ab232fffc94135282acaac332->leave($__internal_75dd498ba28ee4b4f78231cc527af3d09286553ab232fffc94135282acaac332_prof);

        
        $__internal_f0843825e913c70e67ffb245329c4fec790483d8a818ff20a8ae014b46ec35fb->leave($__internal_f0843825e913c70e67ffb245329c4fec790483d8a818ff20a8ae014b46ec35fb_prof);

    }

    public function getTemplateName()
    {
        return ":article:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 42,  121 => 37,  109 => 31,  103 => 28,  96 => 24,  92 => 23,  84 => 22,  78 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Articles list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Postdate</th>
                <th>Published</th>
                <th>Title</th>
                <th>Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for article in articles %}
            <tr>
                <td><a href=\"{{ path('article_show', { 'id': article.id }) }}\">{{ article.id }}</a></td>
                <td>{% if article.postDate %}{{ article.postDate|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if article.published %}Yes{% else %}No{% endif %}</td>
                <td>{{ article.title }}</td>
                <td>{{ article.content }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('article_show', { 'id': article.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('article_edit', { 'id': article.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('article_new') }}\">Create a new article</a>
        </li>
    </ul>
{% endblock %}
", ":article:index.html.twig", "/var/www/html/geek-letters/app/Resources/views/article/index.html.twig");
    }
}
