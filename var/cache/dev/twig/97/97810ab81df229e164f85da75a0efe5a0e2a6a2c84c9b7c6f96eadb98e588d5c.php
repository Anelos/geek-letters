<?php

/* :comment:edit.html.twig */
class __TwigTemplate_974310a55f95ac75a3491be5de74520d54280cff544abd954ce05ce48f6df575 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":comment:edit.html.twig", 1);
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
        $__internal_ace453b61338f5405aa57ea3c6414a58b8cc6f36ecfe07378c1eb8fc4d682bcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ace453b61338f5405aa57ea3c6414a58b8cc6f36ecfe07378c1eb8fc4d682bcc->enter($__internal_ace453b61338f5405aa57ea3c6414a58b8cc6f36ecfe07378c1eb8fc4d682bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:edit.html.twig"));

        $__internal_db20a9d723be57a2b51e7ec39764bac962f51bf2442060449d159074a4166211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db20a9d723be57a2b51e7ec39764bac962f51bf2442060449d159074a4166211->enter($__internal_db20a9d723be57a2b51e7ec39764bac962f51bf2442060449d159074a4166211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ace453b61338f5405aa57ea3c6414a58b8cc6f36ecfe07378c1eb8fc4d682bcc->leave($__internal_ace453b61338f5405aa57ea3c6414a58b8cc6f36ecfe07378c1eb8fc4d682bcc_prof);

        
        $__internal_db20a9d723be57a2b51e7ec39764bac962f51bf2442060449d159074a4166211->leave($__internal_db20a9d723be57a2b51e7ec39764bac962f51bf2442060449d159074a4166211_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8bdc494d2985b1edeec0b504f0f89f2fe0dbf536b0f71016884f7974a0e80f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8bdc494d2985b1edeec0b504f0f89f2fe0dbf536b0f71016884f7974a0e80f1->enter($__internal_d8bdc494d2985b1edeec0b504f0f89f2fe0dbf536b0f71016884f7974a0e80f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5c64611776bea513bfa1e9dfa5be43ff3df159873822fc76011e8bad597e2cbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c64611776bea513bfa1e9dfa5be43ff3df159873822fc76011e8bad597e2cbb->enter($__internal_5c64611776bea513bfa1e9dfa5be43ff3df159873822fc76011e8bad597e2cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comment edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_5c64611776bea513bfa1e9dfa5be43ff3df159873822fc76011e8bad597e2cbb->leave($__internal_5c64611776bea513bfa1e9dfa5be43ff3df159873822fc76011e8bad597e2cbb_prof);

        
        $__internal_d8bdc494d2985b1edeec0b504f0f89f2fe0dbf536b0f71016884f7974a0e80f1->leave($__internal_d8bdc494d2985b1edeec0b504f0f89f2fe0dbf536b0f71016884f7974a0e80f1_prof);

    }

    public function getTemplateName()
    {
        return ":comment:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Comment edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('comment_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":comment:edit.html.twig", "/var/www/html/geek-letters/app/Resources/views/comment/edit.html.twig");
    }
}
