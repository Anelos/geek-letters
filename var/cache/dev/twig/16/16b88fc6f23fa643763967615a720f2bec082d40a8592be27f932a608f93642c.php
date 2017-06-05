<?php

/* :article:edit.html.twig */
class __TwigTemplate_edd3308e7723bdd5bd4964e33ebc4e8221baff22474b7fe87d34190eec98dc0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":article:edit.html.twig", 1);
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
        $__internal_0497e70851abbf1e4919820cf028c17c03f8f951580c26373af2ff43c52b318a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0497e70851abbf1e4919820cf028c17c03f8f951580c26373af2ff43c52b318a->enter($__internal_0497e70851abbf1e4919820cf028c17c03f8f951580c26373af2ff43c52b318a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:edit.html.twig"));

        $__internal_859fc97976d634237ab50a07765d3d1cc8abf12db4a43625e147a15771818e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_859fc97976d634237ab50a07765d3d1cc8abf12db4a43625e147a15771818e30->enter($__internal_859fc97976d634237ab50a07765d3d1cc8abf12db4a43625e147a15771818e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0497e70851abbf1e4919820cf028c17c03f8f951580c26373af2ff43c52b318a->leave($__internal_0497e70851abbf1e4919820cf028c17c03f8f951580c26373af2ff43c52b318a_prof);

        
        $__internal_859fc97976d634237ab50a07765d3d1cc8abf12db4a43625e147a15771818e30->leave($__internal_859fc97976d634237ab50a07765d3d1cc8abf12db4a43625e147a15771818e30_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f1642d845d38f2949710dc5f18ddd29276fdd12f360aa3befce113033c16abe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f1642d845d38f2949710dc5f18ddd29276fdd12f360aa3befce113033c16abe->enter($__internal_8f1642d845d38f2949710dc5f18ddd29276fdd12f360aa3befce113033c16abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ca993487e22aa021dc93b49b16c566af261f51b84a75151b7116dabac53e2f8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca993487e22aa021dc93b49b16c566af261f51b84a75151b7116dabac53e2f8d->enter($__internal_ca993487e22aa021dc93b49b16c566af261f51b84a75151b7116dabac53e2f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Article edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
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
        
        $__internal_ca993487e22aa021dc93b49b16c566af261f51b84a75151b7116dabac53e2f8d->leave($__internal_ca993487e22aa021dc93b49b16c566af261f51b84a75151b7116dabac53e2f8d_prof);

        
        $__internal_8f1642d845d38f2949710dc5f18ddd29276fdd12f360aa3befce113033c16abe->leave($__internal_8f1642d845d38f2949710dc5f18ddd29276fdd12f360aa3befce113033c16abe_prof);

    }

    public function getTemplateName()
    {
        return ":article:edit.html.twig";
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
    <h1>Article edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('article_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":article:edit.html.twig", "/var/www/html/geek-letters/app/Resources/views/article/edit.html.twig");
    }
}
