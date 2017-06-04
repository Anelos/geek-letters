<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_59a663a841c4635c1c10cb8617a687d7b296f0ba48c6d931d5ecf31cfb407384 extends Twig_Template
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
        $__internal_85fef348e5ab95da1d7560e6d642b03bd342e3ae1288526ea42d0609d5537e02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85fef348e5ab95da1d7560e6d642b03bd342e3ae1288526ea42d0609d5537e02->enter($__internal_85fef348e5ab95da1d7560e6d642b03bd342e3ae1288526ea42d0609d5537e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_a5615ddfee1450981eb206ddf24a447f8227b7d6ac90c58ac6423028ba2e7eb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5615ddfee1450981eb206ddf24a447f8227b7d6ac90c58ac6423028ba2e7eb0->enter($__internal_a5615ddfee1450981eb206ddf24a447f8227b7d6ac90c58ac6423028ba2e7eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85fef348e5ab95da1d7560e6d642b03bd342e3ae1288526ea42d0609d5537e02->leave($__internal_85fef348e5ab95da1d7560e6d642b03bd342e3ae1288526ea42d0609d5537e02_prof);

        
        $__internal_a5615ddfee1450981eb206ddf24a447f8227b7d6ac90c58ac6423028ba2e7eb0->leave($__internal_a5615ddfee1450981eb206ddf24a447f8227b7d6ac90c58ac6423028ba2e7eb0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cbda80de1a3a761ec1e2860a286284d9fce8a8494876166604a0f101312869e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbda80de1a3a761ec1e2860a286284d9fce8a8494876166604a0f101312869e3->enter($__internal_cbda80de1a3a761ec1e2860a286284d9fce8a8494876166604a0f101312869e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5148ce62264ab51df92a9a60682b46b470f990d0531d3e022fe279c84de0473a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5148ce62264ab51df92a9a60682b46b470f990d0531d3e022fe279c84de0473a->enter($__internal_5148ce62264ab51df92a9a60682b46b470f990d0531d3e022fe279c84de0473a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_5148ce62264ab51df92a9a60682b46b470f990d0531d3e022fe279c84de0473a->leave($__internal_5148ce62264ab51df92a9a60682b46b470f990d0531d3e022fe279c84de0473a_prof);

        
        $__internal_cbda80de1a3a761ec1e2860a286284d9fce8a8494876166604a0f101312869e3->leave($__internal_cbda80de1a3a761ec1e2860a286284d9fce8a8494876166604a0f101312869e3_prof);

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
", "FOSUserBundle:Registration:confirmed.html.twig", "/var/www/html/geek-letters/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
