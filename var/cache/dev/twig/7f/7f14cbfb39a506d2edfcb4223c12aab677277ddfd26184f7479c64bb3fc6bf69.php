<?php

/* :user:edit.html.twig */
class __TwigTemplate_a691f8aa44798b823417fc43bfcad4d16ef02df3770aa236b5ef5e5ae59a1761 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:edit.html.twig", 1);
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
        $__internal_cebff7741cfe6cac5703105d656245465f504b0c6d40e8f67885a995d15d129c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cebff7741cfe6cac5703105d656245465f504b0c6d40e8f67885a995d15d129c->enter($__internal_cebff7741cfe6cac5703105d656245465f504b0c6d40e8f67885a995d15d129c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        $__internal_90c5e75e706989272415bdf270213d26aae7fd682f2d92a3141e33e1280a3f86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90c5e75e706989272415bdf270213d26aae7fd682f2d92a3141e33e1280a3f86->enter($__internal_90c5e75e706989272415bdf270213d26aae7fd682f2d92a3141e33e1280a3f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cebff7741cfe6cac5703105d656245465f504b0c6d40e8f67885a995d15d129c->leave($__internal_cebff7741cfe6cac5703105d656245465f504b0c6d40e8f67885a995d15d129c_prof);

        
        $__internal_90c5e75e706989272415bdf270213d26aae7fd682f2d92a3141e33e1280a3f86->leave($__internal_90c5e75e706989272415bdf270213d26aae7fd682f2d92a3141e33e1280a3f86_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_371784b73b2254d4b011dc3487b15d288f5f8efbf4db1888439c63ad1b4fe69b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_371784b73b2254d4b011dc3487b15d288f5f8efbf4db1888439c63ad1b4fe69b->enter($__internal_371784b73b2254d4b011dc3487b15d288f5f8efbf4db1888439c63ad1b4fe69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7fc10b0aba505b69703eec38dc8e09085689828b533d17d2a123292a0104c7e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fc10b0aba505b69703eec38dc8e09085689828b533d17d2a123292a0104c7e1->enter($__internal_7fc10b0aba505b69703eec38dc8e09085689828b533d17d2a123292a0104c7e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
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
        
        $__internal_7fc10b0aba505b69703eec38dc8e09085689828b533d17d2a123292a0104c7e1->leave($__internal_7fc10b0aba505b69703eec38dc8e09085689828b533d17d2a123292a0104c7e1_prof);

        
        $__internal_371784b73b2254d4b011dc3487b15d288f5f8efbf4db1888439c63ad1b4fe69b->leave($__internal_371784b73b2254d4b011dc3487b15d288f5f8efbf4db1888439c63ad1b4fe69b_prof);

    }

    public function getTemplateName()
    {
        return ":user:edit.html.twig";
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
    <h1>User edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":user:edit.html.twig", "/var/www/html/geek-letters/app/Resources/views/user/edit.html.twig");
    }
}
