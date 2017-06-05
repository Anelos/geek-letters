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
        $__internal_f83cb49649f4d4fc9e37a643a99db9169c6ea424db11b99a13264e2d8d838425 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f83cb49649f4d4fc9e37a643a99db9169c6ea424db11b99a13264e2d8d838425->enter($__internal_f83cb49649f4d4fc9e37a643a99db9169c6ea424db11b99a13264e2d8d838425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:show.html.twig"));

        $__internal_94abb504060215b691eecb7c0cd19c731e70e135f10ba1f45d9c957501cb1aeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94abb504060215b691eecb7c0cd19c731e70e135f10ba1f45d9c957501cb1aeb->enter($__internal_94abb504060215b691eecb7c0cd19c731e70e135f10ba1f45d9c957501cb1aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f83cb49649f4d4fc9e37a643a99db9169c6ea424db11b99a13264e2d8d838425->leave($__internal_f83cb49649f4d4fc9e37a643a99db9169c6ea424db11b99a13264e2d8d838425_prof);

        
        $__internal_94abb504060215b691eecb7c0cd19c731e70e135f10ba1f45d9c957501cb1aeb->leave($__internal_94abb504060215b691eecb7c0cd19c731e70e135f10ba1f45d9c957501cb1aeb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2f52e7059dd9972c32c1eeda8b42a2e6f6c8a64abcc0034a3a5dea580973e34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2f52e7059dd9972c32c1eeda8b42a2e6f6c8a64abcc0034a3a5dea580973e34->enter($__internal_d2f52e7059dd9972c32c1eeda8b42a2e6f6c8a64abcc0034a3a5dea580973e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4a9d93a6b4628d3179718529eedad5655470652b122293c30e19e67b6616fde1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a9d93a6b4628d3179718529eedad5655470652b122293c30e19e67b6616fde1->enter($__internal_4a9d93a6b4628d3179718529eedad5655470652b122293c30e19e67b6616fde1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4a9d93a6b4628d3179718529eedad5655470652b122293c30e19e67b6616fde1->leave($__internal_4a9d93a6b4628d3179718529eedad5655470652b122293c30e19e67b6616fde1_prof);

        
        $__internal_d2f52e7059dd9972c32c1eeda8b42a2e6f6c8a64abcc0034a3a5dea580973e34->leave($__internal_d2f52e7059dd9972c32c1eeda8b42a2e6f6c8a64abcc0034a3a5dea580973e34_prof);

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
