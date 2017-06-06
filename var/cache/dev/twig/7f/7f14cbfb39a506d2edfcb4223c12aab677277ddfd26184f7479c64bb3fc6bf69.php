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
        $__internal_06e059c3c010d427721deeb93309af70a0a8d8cfed4be43e983105a4ed7e2fe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06e059c3c010d427721deeb93309af70a0a8d8cfed4be43e983105a4ed7e2fe2->enter($__internal_06e059c3c010d427721deeb93309af70a0a8d8cfed4be43e983105a4ed7e2fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        $__internal_65fd70d4020d7553ee8c08b6454c13e4647ba0c51eae82ded556597bd1f61fd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65fd70d4020d7553ee8c08b6454c13e4647ba0c51eae82ded556597bd1f61fd9->enter($__internal_65fd70d4020d7553ee8c08b6454c13e4647ba0c51eae82ded556597bd1f61fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06e059c3c010d427721deeb93309af70a0a8d8cfed4be43e983105a4ed7e2fe2->leave($__internal_06e059c3c010d427721deeb93309af70a0a8d8cfed4be43e983105a4ed7e2fe2_prof);

        
        $__internal_65fd70d4020d7553ee8c08b6454c13e4647ba0c51eae82ded556597bd1f61fd9->leave($__internal_65fd70d4020d7553ee8c08b6454c13e4647ba0c51eae82ded556597bd1f61fd9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_45a8a4e3e50ecc565347f7becf6cfa7aa6caccd31b73b2f85cbc2cd7f2c68dd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45a8a4e3e50ecc565347f7becf6cfa7aa6caccd31b73b2f85cbc2cd7f2c68dd2->enter($__internal_45a8a4e3e50ecc565347f7becf6cfa7aa6caccd31b73b2f85cbc2cd7f2c68dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4f33dd983641dc262510c17d0951a22951c976ea29fbd995ad1be4d3ba8e70c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f33dd983641dc262510c17d0951a22951c976ea29fbd995ad1be4d3ba8e70c3->enter($__internal_4f33dd983641dc262510c17d0951a22951c976ea29fbd995ad1be4d3ba8e70c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4f33dd983641dc262510c17d0951a22951c976ea29fbd995ad1be4d3ba8e70c3->leave($__internal_4f33dd983641dc262510c17d0951a22951c976ea29fbd995ad1be4d3ba8e70c3_prof);

        
        $__internal_45a8a4e3e50ecc565347f7becf6cfa7aa6caccd31b73b2f85cbc2cd7f2c68dd2->leave($__internal_45a8a4e3e50ecc565347f7becf6cfa7aa6caccd31b73b2f85cbc2cd7f2c68dd2_prof);

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
