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
        $__internal_708e7d780be558e1e25d05ddc97b07066947d2046a0d3629817c6a5bff26e6d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_708e7d780be558e1e25d05ddc97b07066947d2046a0d3629817c6a5bff26e6d4->enter($__internal_708e7d780be558e1e25d05ddc97b07066947d2046a0d3629817c6a5bff26e6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        $__internal_99b626f0c1bd01c6ab208e608afe06397a21d4168efa6b8bcd23e04c330075ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99b626f0c1bd01c6ab208e608afe06397a21d4168efa6b8bcd23e04c330075ba->enter($__internal_99b626f0c1bd01c6ab208e608afe06397a21d4168efa6b8bcd23e04c330075ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_708e7d780be558e1e25d05ddc97b07066947d2046a0d3629817c6a5bff26e6d4->leave($__internal_708e7d780be558e1e25d05ddc97b07066947d2046a0d3629817c6a5bff26e6d4_prof);

        
        $__internal_99b626f0c1bd01c6ab208e608afe06397a21d4168efa6b8bcd23e04c330075ba->leave($__internal_99b626f0c1bd01c6ab208e608afe06397a21d4168efa6b8bcd23e04c330075ba_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0f70f3be60e875a20fe67abb33ab1f55dd4a0773f07b74ac6d5454199c501ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0f70f3be60e875a20fe67abb33ab1f55dd4a0773f07b74ac6d5454199c501ec->enter($__internal_a0f70f3be60e875a20fe67abb33ab1f55dd4a0773f07b74ac6d5454199c501ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d1746b0705f37309adb572eb600e5448576712212538f85da7bfd924a0c41b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1746b0705f37309adb572eb600e5448576712212538f85da7bfd924a0c41b30->enter($__internal_d1746b0705f37309adb572eb600e5448576712212538f85da7bfd924a0c41b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d1746b0705f37309adb572eb600e5448576712212538f85da7bfd924a0c41b30->leave($__internal_d1746b0705f37309adb572eb600e5448576712212538f85da7bfd924a0c41b30_prof);

        
        $__internal_a0f70f3be60e875a20fe67abb33ab1f55dd4a0773f07b74ac6d5454199c501ec->leave($__internal_a0f70f3be60e875a20fe67abb33ab1f55dd4a0773f07b74ac6d5454199c501ec_prof);

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
