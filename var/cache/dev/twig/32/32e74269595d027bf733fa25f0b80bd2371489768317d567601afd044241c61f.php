<?php

/* :comment:new.html.twig */
class __TwigTemplate_5dbd67c2d846a8be32b925a8735e86c866b7d874ceb3b7a25a8098ae9cfb9e31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":comment:new.html.twig", 1);
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
        $__internal_05caa97adb4c1f123fe410061dd70c4e03411e1ec38b2bedc8839e43e247dc6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05caa97adb4c1f123fe410061dd70c4e03411e1ec38b2bedc8839e43e247dc6c->enter($__internal_05caa97adb4c1f123fe410061dd70c4e03411e1ec38b2bedc8839e43e247dc6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:new.html.twig"));

        $__internal_d058b4cf1c71dea75d735523a6947e19ecbfe079fe6ad8d9da27d05e615e1b39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d058b4cf1c71dea75d735523a6947e19ecbfe079fe6ad8d9da27d05e615e1b39->enter($__internal_d058b4cf1c71dea75d735523a6947e19ecbfe079fe6ad8d9da27d05e615e1b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05caa97adb4c1f123fe410061dd70c4e03411e1ec38b2bedc8839e43e247dc6c->leave($__internal_05caa97adb4c1f123fe410061dd70c4e03411e1ec38b2bedc8839e43e247dc6c_prof);

        
        $__internal_d058b4cf1c71dea75d735523a6947e19ecbfe079fe6ad8d9da27d05e615e1b39->leave($__internal_d058b4cf1c71dea75d735523a6947e19ecbfe079fe6ad8d9da27d05e615e1b39_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eda265ea40da8a11a1073a6b3545f662a3db7e993e51e68134d30e587628d403 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eda265ea40da8a11a1073a6b3545f662a3db7e993e51e68134d30e587628d403->enter($__internal_eda265ea40da8a11a1073a6b3545f662a3db7e993e51e68134d30e587628d403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b519bfddc7b5917b3e02f0739f7edb722d82537dac2cda7c99fc30a960232bac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b519bfddc7b5917b3e02f0739f7edb722d82537dac2cda7c99fc30a960232bac->enter($__internal_b519bfddc7b5917b3e02f0739f7edb722d82537dac2cda7c99fc30a960232bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comment creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_b519bfddc7b5917b3e02f0739f7edb722d82537dac2cda7c99fc30a960232bac->leave($__internal_b519bfddc7b5917b3e02f0739f7edb722d82537dac2cda7c99fc30a960232bac_prof);

        
        $__internal_eda265ea40da8a11a1073a6b3545f662a3db7e993e51e68134d30e587628d403->leave($__internal_eda265ea40da8a11a1073a6b3545f662a3db7e993e51e68134d30e587628d403_prof);

    }

    public function getTemplateName()
    {
        return ":comment:new.html.twig";
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
    <h1>Comment creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('comment_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":comment:new.html.twig", "/var/www/html/geek-letters/app/Resources/views/comment/new.html.twig");
    }
}