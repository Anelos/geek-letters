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
        $__internal_15f813c64aef756799c08c7e5fe92f6660aeb6b7155ecaed87db1bfc2d817bd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15f813c64aef756799c08c7e5fe92f6660aeb6b7155ecaed87db1bfc2d817bd6->enter($__internal_15f813c64aef756799c08c7e5fe92f6660aeb6b7155ecaed87db1bfc2d817bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_4a22daede5e6305e95e608806961d75d32bae8301b5082ff1f4b52aa68e075dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a22daede5e6305e95e608806961d75d32bae8301b5082ff1f4b52aa68e075dc->enter($__internal_4a22daede5e6305e95e608806961d75d32bae8301b5082ff1f4b52aa68e075dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15f813c64aef756799c08c7e5fe92f6660aeb6b7155ecaed87db1bfc2d817bd6->leave($__internal_15f813c64aef756799c08c7e5fe92f6660aeb6b7155ecaed87db1bfc2d817bd6_prof);

        
        $__internal_4a22daede5e6305e95e608806961d75d32bae8301b5082ff1f4b52aa68e075dc->leave($__internal_4a22daede5e6305e95e608806961d75d32bae8301b5082ff1f4b52aa68e075dc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_86286af409ba3344f2ada89102174854c8f44c6d2f67fb2ad9742d6d979acfbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86286af409ba3344f2ada89102174854c8f44c6d2f67fb2ad9742d6d979acfbd->enter($__internal_86286af409ba3344f2ada89102174854c8f44c6d2f67fb2ad9742d6d979acfbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d14d70d4fa8a8b921c5f7e7e108d7d77328fa3f84fc294538a47b260a57b7369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d14d70d4fa8a8b921c5f7e7e108d7d77328fa3f84fc294538a47b260a57b7369->enter($__internal_d14d70d4fa8a8b921c5f7e7e108d7d77328fa3f84fc294538a47b260a57b7369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_d14d70d4fa8a8b921c5f7e7e108d7d77328fa3f84fc294538a47b260a57b7369->leave($__internal_d14d70d4fa8a8b921c5f7e7e108d7d77328fa3f84fc294538a47b260a57b7369_prof);

        
        $__internal_86286af409ba3344f2ada89102174854c8f44c6d2f67fb2ad9742d6d979acfbd->leave($__internal_86286af409ba3344f2ada89102174854c8f44c6d2f67fb2ad9742d6d979acfbd_prof);

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
