<?php

/* :comment:index.html.twig */
class __TwigTemplate_2e0e84eb2da548ce4b54af91f0734d4e32fa839865826bbcbe21069965a6bc2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a8f1d22d2ea5661649440965f686d27c9ce090ca2e888c50a13b55ed8da8996 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a8f1d22d2ea5661649440965f686d27c9ce090ca2e888c50a13b55ed8da8996->enter($__internal_3a8f1d22d2ea5661649440965f686d27c9ce090ca2e888c50a13b55ed8da8996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:index.html.twig"));

        $__internal_ca8be440cb89bf27e3298b522e72a7594a4ec1ff10b668058e45186b93478182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca8be440cb89bf27e3298b522e72a7594a4ec1ff10b668058e45186b93478182->enter($__internal_ca8be440cb89bf27e3298b522e72a7594a4ec1ff10b668058e45186b93478182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:index.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_3a8f1d22d2ea5661649440965f686d27c9ce090ca2e888c50a13b55ed8da8996->leave($__internal_3a8f1d22d2ea5661649440965f686d27c9ce090ca2e888c50a13b55ed8da8996_prof);

        
        $__internal_ca8be440cb89bf27e3298b522e72a7594a4ec1ff10b668058e45186b93478182->leave($__internal_ca8be440cb89bf27e3298b522e72a7594a4ec1ff10b668058e45186b93478182_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_383c15e965ccde0067d84b89739ca38c3efb4e093e2465a0556378b73c6cdfc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_383c15e965ccde0067d84b89739ca38c3efb4e093e2465a0556378b73c6cdfc7->enter($__internal_383c15e965ccde0067d84b89739ca38c3efb4e093e2465a0556378b73c6cdfc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0ebeeb3b99f5f2696bd92920fafbe935d4b99900cdc1c2251d87c37d3c2c6ce9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ebeeb3b99f5f2696bd92920fafbe935d4b99900cdc1c2251d87c37d3c2c6ce9->enter($__internal_0ebeeb3b99f5f2696bd92920fafbe935d4b99900cdc1c2251d87c37d3c2c6ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "    <h1>Comments list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Content</th>
                <th>Createdat</th>
                <th>Updatedat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_show", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            if ($this->getAttribute($context["comment"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute($context["comment"], "updatedAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
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
        
        $__internal_0ebeeb3b99f5f2696bd92920fafbe935d4b99900cdc1c2251d87c37d3c2c6ce9->leave($__internal_0ebeeb3b99f5f2696bd92920fafbe935d4b99900cdc1c2251d87c37d3c2c6ce9_prof);

        
        $__internal_383c15e965ccde0067d84b89739ca38c3efb4e093e2465a0556378b73c6cdfc7->leave($__internal_383c15e965ccde0067d84b89739ca38c3efb4e093e2465a0556378b73c6cdfc7_prof);

    }

    public function getTemplateName()
    {
        return ":comment:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  116 => 38,  109 => 33,  97 => 27,  91 => 24,  82 => 20,  76 => 19,  72 => 18,  66 => 17,  63 => 16,  59 => 15,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block body %}
    <h1>Comments list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Content</th>
                <th>Createdat</th>
                <th>Updatedat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for comment in comments %}
            <tr>
                <td><a href=\"{{ path('comment_show', { 'id': comment.id }) }}\">{{ comment.id }}</a></td>
                <td>{{ comment.content }}</td>
                <td>{% if comment.createdAt %}{{ comment.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if comment.updatedAt %}{{ comment.updatedAt|date('Y-m-d H:i:s') }}{% endif %}</td>
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
