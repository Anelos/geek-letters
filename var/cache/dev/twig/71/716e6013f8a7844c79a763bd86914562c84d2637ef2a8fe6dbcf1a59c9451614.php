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
        $__internal_f38423862e0f76d279e4a66f58b7f2ba2efaafd648efd56c6542e2f7e9148077 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f38423862e0f76d279e4a66f58b7f2ba2efaafd648efd56c6542e2f7e9148077->enter($__internal_f38423862e0f76d279e4a66f58b7f2ba2efaafd648efd56c6542e2f7e9148077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:show.html.twig"));

        $__internal_4b707d44777d34175fe5deb007e146078e5a052db3cd78980546e011855fdeca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b707d44777d34175fe5deb007e146078e5a052db3cd78980546e011855fdeca->enter($__internal_4b707d44777d34175fe5deb007e146078e5a052db3cd78980546e011855fdeca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f38423862e0f76d279e4a66f58b7f2ba2efaafd648efd56c6542e2f7e9148077->leave($__internal_f38423862e0f76d279e4a66f58b7f2ba2efaafd648efd56c6542e2f7e9148077_prof);

        
        $__internal_4b707d44777d34175fe5deb007e146078e5a052db3cd78980546e011855fdeca->leave($__internal_4b707d44777d34175fe5deb007e146078e5a052db3cd78980546e011855fdeca_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ba4df04a5c3b248b4f29904facf3a578bfcd4ea6ec2513ccd132ff8c2c5f5b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ba4df04a5c3b248b4f29904facf3a578bfcd4ea6ec2513ccd132ff8c2c5f5b7->enter($__internal_2ba4df04a5c3b248b4f29904facf3a578bfcd4ea6ec2513ccd132ff8c2c5f5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_15ad5f2f0ac7b4b5277bc1be6ff16c85ca826cd3215b475ff16b7f9496f3d97d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15ad5f2f0ac7b4b5277bc1be6ff16c85ca826cd3215b475ff16b7f9496f3d97d->enter($__internal_15ad5f2f0ac7b4b5277bc1be6ff16c85ca826cd3215b475ff16b7f9496f3d97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <th>Content</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "content", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>";
        // line 18
        if ($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "createdAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updatedat</th>
                <td>";
        // line 22
        if ($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "updatedAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_edit", array("id" => $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_15ad5f2f0ac7b4b5277bc1be6ff16c85ca826cd3215b475ff16b7f9496f3d97d->leave($__internal_15ad5f2f0ac7b4b5277bc1be6ff16c85ca826cd3215b475ff16b7f9496f3d97d_prof);

        
        $__internal_2ba4df04a5c3b248b4f29904facf3a578bfcd4ea6ec2513ccd132ff8c2c5f5b7->leave($__internal_2ba4df04a5c3b248b4f29904facf3a578bfcd4ea6ec2513ccd132ff8c2c5f5b7_prof);

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
        return array (  109 => 37,  104 => 35,  98 => 32,  92 => 29,  80 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
                <th>Content</th>
                <td>{{ comment.content }}</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>{% if comment.createdAt %}{{ comment.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Updatedat</th>
                <td>{% if comment.updatedAt %}{{ comment.updatedAt|date('Y-m-d H:i:s') }}{% endif %}</td>
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
