<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_338a0b991f257de37c52f44b4d886ac1148cbc6506ee8ab3811230361fc816f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a474ec5c35454824e13b2dec9b0ab14863c6e4d3b7f5c62a4c6c3110bd05f824 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a474ec5c35454824e13b2dec9b0ab14863c6e4d3b7f5c62a4c6c3110bd05f824->enter($__internal_a474ec5c35454824e13b2dec9b0ab14863c6e4d3b7f5c62a4c6c3110bd05f824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        $__internal_0a596cab54be169cef6100a0451f024cef4f0096943c6091be45162d1d4edb8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a596cab54be169cef6100a0451f024cef4f0096943c6091be45162d1d4edb8d->enter($__internal_0a596cab54be169cef6100a0451f024cef4f0096943c6091be45162d1d4edb8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_a474ec5c35454824e13b2dec9b0ab14863c6e4d3b7f5c62a4c6c3110bd05f824->leave($__internal_a474ec5c35454824e13b2dec9b0ab14863c6e4d3b7f5c62a4c6c3110bd05f824_prof);

        
        $__internal_0a596cab54be169cef6100a0451f024cef4f0096943c6091be45162d1d4edb8d->leave($__internal_0a596cab54be169cef6100a0451f024cef4f0096943c6091be45162d1d4edb8d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Profile:edit_content.html.twig", "/var/www/html/geek-letters/app/Resources/FOSUserBundle/views/Profile/edit_content.html.twig");
    }
}