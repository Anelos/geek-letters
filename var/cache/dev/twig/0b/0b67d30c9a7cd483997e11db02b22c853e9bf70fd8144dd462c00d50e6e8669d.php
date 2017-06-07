<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_3f87748f2a67161ed535eb4d6f37466c6d94277b490058cbef6e46b3203d822b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_703a64b2c2c6c13e23d830d38cc537f5251906eafdd9d94f11682ce8085b52de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_703a64b2c2c6c13e23d830d38cc537f5251906eafdd9d94f11682ce8085b52de->enter($__internal_703a64b2c2c6c13e23d830d38cc537f5251906eafdd9d94f11682ce8085b52de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_94824ebe222ac097a8cebad49711503a65a2e55f2e197bb14e0d215449deecb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94824ebe222ac097a8cebad49711503a65a2e55f2e197bb14e0d215449deecb6->enter($__internal_94824ebe222ac097a8cebad49711503a65a2e55f2e197bb14e0d215449deecb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_703a64b2c2c6c13e23d830d38cc537f5251906eafdd9d94f11682ce8085b52de->leave($__internal_703a64b2c2c6c13e23d830d38cc537f5251906eafdd9d94f11682ce8085b52de_prof);

        
        $__internal_94824ebe222ac097a8cebad49711503a65a2e55f2e197bb14e0d215449deecb6->leave($__internal_94824ebe222ac097a8cebad49711503a65a2e55f2e197bb14e0d215449deecb6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_37738d431737e87357e5085e390c7f5e56cc9199527e23178ce0ac647f6614a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37738d431737e87357e5085e390c7f5e56cc9199527e23178ce0ac647f6614a7->enter($__internal_37738d431737e87357e5085e390c7f5e56cc9199527e23178ce0ac647f6614a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_815ad559c16518a5f7eaf801810624c8c50808b9152137f6eb62f2d63d6ee0ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_815ad559c16518a5f7eaf801810624c8c50808b9152137f6eb62f2d63d6ee0ea->enter($__internal_815ad559c16518a5f7eaf801810624c8c50808b9152137f6eb62f2d63d6ee0ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_815ad559c16518a5f7eaf801810624c8c50808b9152137f6eb62f2d63d6ee0ea->leave($__internal_815ad559c16518a5f7eaf801810624c8c50808b9152137f6eb62f2d63d6ee0ea_prof);

        
        $__internal_37738d431737e87357e5085e390c7f5e56cc9199527e23178ce0ac647f6614a7->leave($__internal_37738d431737e87357e5085e390c7f5e56cc9199527e23178ce0ac647f6614a7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/var/www/html/geek-letters/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
