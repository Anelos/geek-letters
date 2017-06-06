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
        $__internal_e56115a34f2b6de7becd1e5321c72b5bb92dadc28caacdc16623eb01d52cb4c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e56115a34f2b6de7becd1e5321c72b5bb92dadc28caacdc16623eb01d52cb4c8->enter($__internal_e56115a34f2b6de7becd1e5321c72b5bb92dadc28caacdc16623eb01d52cb4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_cbfbcec70fa95155c87dc468ff779409c37d36cc81300fdc510dff624668dc62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbfbcec70fa95155c87dc468ff779409c37d36cc81300fdc510dff624668dc62->enter($__internal_cbfbcec70fa95155c87dc468ff779409c37d36cc81300fdc510dff624668dc62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e56115a34f2b6de7becd1e5321c72b5bb92dadc28caacdc16623eb01d52cb4c8->leave($__internal_e56115a34f2b6de7becd1e5321c72b5bb92dadc28caacdc16623eb01d52cb4c8_prof);

        
        $__internal_cbfbcec70fa95155c87dc468ff779409c37d36cc81300fdc510dff624668dc62->leave($__internal_cbfbcec70fa95155c87dc468ff779409c37d36cc81300fdc510dff624668dc62_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b91c270951f513a4e6e836b3314b44aa1c474e9a063c9ab031aa3fefd726e8ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b91c270951f513a4e6e836b3314b44aa1c474e9a063c9ab031aa3fefd726e8ca->enter($__internal_b91c270951f513a4e6e836b3314b44aa1c474e9a063c9ab031aa3fefd726e8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8d6a87bbe768f577be86087c7cf2dd329f78de47e4d4aceb9cf14f246983c776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d6a87bbe768f577be86087c7cf2dd329f78de47e4d4aceb9cf14f246983c776->enter($__internal_8d6a87bbe768f577be86087c7cf2dd329f78de47e4d4aceb9cf14f246983c776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_8d6a87bbe768f577be86087c7cf2dd329f78de47e4d4aceb9cf14f246983c776->leave($__internal_8d6a87bbe768f577be86087c7cf2dd329f78de47e4d4aceb9cf14f246983c776_prof);

        
        $__internal_b91c270951f513a4e6e836b3314b44aa1c474e9a063c9ab031aa3fefd726e8ca->leave($__internal_b91c270951f513a4e6e836b3314b44aa1c474e9a063c9ab031aa3fefd726e8ca_prof);

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
