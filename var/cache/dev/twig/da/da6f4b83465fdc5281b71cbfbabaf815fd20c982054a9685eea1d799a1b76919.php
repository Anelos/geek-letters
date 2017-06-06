<?php

/* :user:index.html.twig */
class __TwigTemplate_6df59494915570197b169df3a5ec548404bb088b058264ed5b394c4fa753467e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:index.html.twig", 1);
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
        $__internal_9ba9c9a8e767458e381c3d4a489ebe3c33a48acef7a05cee70eb44c002ce736a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ba9c9a8e767458e381c3d4a489ebe3c33a48acef7a05cee70eb44c002ce736a->enter($__internal_9ba9c9a8e767458e381c3d4a489ebe3c33a48acef7a05cee70eb44c002ce736a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:index.html.twig"));

        $__internal_c22eafe048dfcc7c0a6f06612613e57de0ae4b4fe0f0e06c495c6e476f990d42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c22eafe048dfcc7c0a6f06612613e57de0ae4b4fe0f0e06c495c6e476f990d42->enter($__internal_c22eafe048dfcc7c0a6f06612613e57de0ae4b4fe0f0e06c495c6e476f990d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ba9c9a8e767458e381c3d4a489ebe3c33a48acef7a05cee70eb44c002ce736a->leave($__internal_9ba9c9a8e767458e381c3d4a489ebe3c33a48acef7a05cee70eb44c002ce736a_prof);

        
        $__internal_c22eafe048dfcc7c0a6f06612613e57de0ae4b4fe0f0e06c495c6e476f990d42->leave($__internal_c22eafe048dfcc7c0a6f06612613e57de0ae4b4fe0f0e06c495c6e476f990d42_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c12ba0c9c2a8f9ba34b05366e005a4560bab417c8413e3d8a0947ab28b9aaef8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c12ba0c9c2a8f9ba34b05366e005a4560bab417c8413e3d8a0947ab28b9aaef8->enter($__internal_c12ba0c9c2a8f9ba34b05366e005a4560bab417c8413e3d8a0947ab28b9aaef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1055190c3951c29ecd9e32cf7fe4410a8c4e4052cf011607997a276b343a14aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1055190c3951c29ecd9e32cf7fe4410a8c4e4052cf011607997a276b343a14aa->enter($__internal_1055190c3951c29ecd9e32cf7fe4410a8c4e4052cf011607997a276b343a14aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Birthday</th>
                <th>Avatar</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["user"], "birthday", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "birthday", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "avatar", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
        echo "\">Create a new user</a>
        </li>
    </ul>
";
        
        $__internal_1055190c3951c29ecd9e32cf7fe4410a8c4e4052cf011607997a276b343a14aa->leave($__internal_1055190c3951c29ecd9e32cf7fe4410a8c4e4052cf011607997a276b343a14aa_prof);

        
        $__internal_c12ba0c9c2a8f9ba34b05366e005a4560bab417c8413e3d8a0947ab28b9aaef8->leave($__internal_c12ba0c9c2a8f9ba34b05366e005a4560bab417c8413e3d8a0947ab28b9aaef8_prof);

    }

    public function getTemplateName()
    {
        return ":user:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 42,  117 => 37,  105 => 31,  99 => 28,  92 => 24,  86 => 23,  82 => 22,  78 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Birthday</th>
                <th>Avatar</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td><a href=\"{{ path('user_show', { 'id': user.id }) }}\">{{ user.id }}</a></td>
                <td>{{ user.firstName }}</td>
                <td>{{ user.lastName }}</td>
                <td>{% if user.birthday %}{{ user.birthday|date('Y-m-d') }}{% endif %}</td>
                <td>{{ user.avatar }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('user_show', { 'id': user.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('user_edit', { 'id': user.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_new') }}\">Create a new user</a>
        </li>
    </ul>
{% endblock %}
", ":user:index.html.twig", "/var/www/html/geek-letters/app/Resources/views/user/index.html.twig");
    }
}
