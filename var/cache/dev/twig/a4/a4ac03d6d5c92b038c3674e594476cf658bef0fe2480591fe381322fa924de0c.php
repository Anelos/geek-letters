<?php

/* :category:new.html.twig */
class __TwigTemplate_5a36e18bf660d8903edacb6724432f5b5750ea1dc6dd613c955f758d5e76f976 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":category:new.html.twig", 1);
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
        $__internal_77083b8f0d19f8c0c920432c08ab09a6aadcae9151dd11c41bdf657a2d253eb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77083b8f0d19f8c0c920432c08ab09a6aadcae9151dd11c41bdf657a2d253eb0->enter($__internal_77083b8f0d19f8c0c920432c08ab09a6aadcae9151dd11c41bdf657a2d253eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:new.html.twig"));

        $__internal_38f8971a9733000529f0c87b5b9e09032e90b62f6026736f13e8c72ad18cf074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38f8971a9733000529f0c87b5b9e09032e90b62f6026736f13e8c72ad18cf074->enter($__internal_38f8971a9733000529f0c87b5b9e09032e90b62f6026736f13e8c72ad18cf074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77083b8f0d19f8c0c920432c08ab09a6aadcae9151dd11c41bdf657a2d253eb0->leave($__internal_77083b8f0d19f8c0c920432c08ab09a6aadcae9151dd11c41bdf657a2d253eb0_prof);

        
        $__internal_38f8971a9733000529f0c87b5b9e09032e90b62f6026736f13e8c72ad18cf074->leave($__internal_38f8971a9733000529f0c87b5b9e09032e90b62f6026736f13e8c72ad18cf074_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b434da0aeaabbdadf1e4748e1bd478a99657bf2365f5557db4bdb6f2b251da2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b434da0aeaabbdadf1e4748e1bd478a99657bf2365f5557db4bdb6f2b251da2->enter($__internal_1b434da0aeaabbdadf1e4748e1bd478a99657bf2365f5557db4bdb6f2b251da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_27f625584a776a0fcf5728f062a9194f4d9a8ea3e3e5bb3d3b6101a49f1c8414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27f625584a776a0fcf5728f062a9194f4d9a8ea3e3e5bb3d3b6101a49f1c8414->enter($__internal_27f625584a776a0fcf5728f062a9194f4d9a8ea3e3e5bb3d3b6101a49f1c8414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Category creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_27f625584a776a0fcf5728f062a9194f4d9a8ea3e3e5bb3d3b6101a49f1c8414->leave($__internal_27f625584a776a0fcf5728f062a9194f4d9a8ea3e3e5bb3d3b6101a49f1c8414_prof);

        
        $__internal_1b434da0aeaabbdadf1e4748e1bd478a99657bf2365f5557db4bdb6f2b251da2->leave($__internal_1b434da0aeaabbdadf1e4748e1bd478a99657bf2365f5557db4bdb6f2b251da2_prof);

    }

    public function getTemplateName()
    {
        return ":category:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Category creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('category_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":category:new.html.twig", "/var/www/html/geek-letters/app/Resources/views/category/new.html.twig");
    }
}
