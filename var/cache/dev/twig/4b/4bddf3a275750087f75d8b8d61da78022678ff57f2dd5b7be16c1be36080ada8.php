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
        $__internal_3fc9a05b591bd8d6ef666cd763903f7dd0d5c801cec9556574cf7a507236f443 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fc9a05b591bd8d6ef666cd763903f7dd0d5c801cec9556574cf7a507236f443->enter($__internal_3fc9a05b591bd8d6ef666cd763903f7dd0d5c801cec9556574cf7a507236f443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:index.html.twig"));

        $__internal_3f755bcc49d3f9caf4269ce43cff3f4dd7d340c2f9d46c642b3f6515a4698324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f755bcc49d3f9caf4269ce43cff3f4dd7d340c2f9d46c642b3f6515a4698324->enter($__internal_3f755bcc49d3f9caf4269ce43cff3f4dd7d340c2f9d46c642b3f6515a4698324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:index.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_3fc9a05b591bd8d6ef666cd763903f7dd0d5c801cec9556574cf7a507236f443->leave($__internal_3fc9a05b591bd8d6ef666cd763903f7dd0d5c801cec9556574cf7a507236f443_prof);

        
        $__internal_3f755bcc49d3f9caf4269ce43cff3f4dd7d340c2f9d46c642b3f6515a4698324->leave($__internal_3f755bcc49d3f9caf4269ce43cff3f4dd7d340c2f9d46c642b3f6515a4698324_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_a01ec24b04b655b933337699b46ef014f1eb16adf1d8d47ad109315014f31a93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a01ec24b04b655b933337699b46ef014f1eb16adf1d8d47ad109315014f31a93->enter($__internal_a01ec24b04b655b933337699b46ef014f1eb16adf1d8d47ad109315014f31a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4ea89d6ba091b03e6a56e9e07229938e41e8609a92d1716f37b4483d8dd53085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ea89d6ba091b03e6a56e9e07229938e41e8609a92d1716f37b4483d8dd53085->enter($__internal_4ea89d6ba091b03e6a56e9e07229938e41e8609a92d1716f37b4483d8dd53085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4ea89d6ba091b03e6a56e9e07229938e41e8609a92d1716f37b4483d8dd53085->leave($__internal_4ea89d6ba091b03e6a56e9e07229938e41e8609a92d1716f37b4483d8dd53085_prof);

        
        $__internal_a01ec24b04b655b933337699b46ef014f1eb16adf1d8d47ad109315014f31a93->leave($__internal_a01ec24b04b655b933337699b46ef014f1eb16adf1d8d47ad109315014f31a93_prof);

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
