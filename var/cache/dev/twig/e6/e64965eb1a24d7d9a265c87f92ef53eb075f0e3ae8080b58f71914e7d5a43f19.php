<?php

/* :user:show.html.twig */
class __TwigTemplate_a90d4541b6be84afe5055283ae3adb76f26a87f3a6226795c5cae52b735fe348 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:show.html.twig", 1);
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
        $__internal_d2b71081f317a2a8da6413c738c7aff291795db7e075ef6b01a7ad0939159c7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2b71081f317a2a8da6413c738c7aff291795db7e075ef6b01a7ad0939159c7e->enter($__internal_d2b71081f317a2a8da6413c738c7aff291795db7e075ef6b01a7ad0939159c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:show.html.twig"));

        $__internal_c2be67c1661b85a6ef37d06ad3d9ac948867ca894ef864556ebf868b420b65be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2be67c1661b85a6ef37d06ad3d9ac948867ca894ef864556ebf868b420b65be->enter($__internal_c2be67c1661b85a6ef37d06ad3d9ac948867ca894ef864556ebf868b420b65be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2b71081f317a2a8da6413c738c7aff291795db7e075ef6b01a7ad0939159c7e->leave($__internal_d2b71081f317a2a8da6413c738c7aff291795db7e075ef6b01a7ad0939159c7e_prof);

        
        $__internal_c2be67c1661b85a6ef37d06ad3d9ac948867ca894ef864556ebf868b420b65be->leave($__internal_c2be67c1661b85a6ef37d06ad3d9ac948867ca894ef864556ebf868b420b65be_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c7641010e9dcdb9bec2a14be29cf5fa812927e039ac5c8491e2ab9d7f42c8eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c7641010e9dcdb9bec2a14be29cf5fa812927e039ac5c8491e2ab9d7f42c8eb->enter($__internal_9c7641010e9dcdb9bec2a14be29cf5fa812927e039ac5c8491e2ab9d7f42c8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d5151a1665abe112be769a55606aea7084697dd57a8c0ebe71c50e856ca100d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5151a1665abe112be769a55606aea7084697dd57a8c0ebe71c50e856ca100d6->enter($__internal_d5151a1665abe112be769a55606aea7084697dd57a8c0ebe71c50e856ca100d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Firstname</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "firstName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "lastName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Birthday</th>
                <td>";
        // line 22
        if ($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "birthday", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "birthday", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Avatar</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "avatar", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
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
        
        $__internal_d5151a1665abe112be769a55606aea7084697dd57a8c0ebe71c50e856ca100d6->leave($__internal_d5151a1665abe112be769a55606aea7084697dd57a8c0ebe71c50e856ca100d6_prof);

        
        $__internal_9c7641010e9dcdb9bec2a14be29cf5fa812927e039ac5c8491e2ab9d7f42c8eb->leave($__internal_9c7641010e9dcdb9bec2a14be29cf5fa812927e039ac5c8491e2ab9d7f42c8eb_prof);

    }

    public function getTemplateName()
    {
        return ":user:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 41,  109 => 39,  103 => 36,  97 => 33,  87 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ user.id }}</td>
            </tr>
            <tr>
                <th>Firstname</th>
                <td>{{ user.firstName }}</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>{{ user.lastName }}</td>
            </tr>
            <tr>
                <th>Birthday</th>
                <td>{% if user.birthday %}{{ user.birthday|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Avatar</th>
                <td>{{ user.avatar }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('user_edit', { 'id': user.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":user:show.html.twig", "/var/www/html/geek-letters/app/Resources/views/user/show.html.twig");
    }
}
