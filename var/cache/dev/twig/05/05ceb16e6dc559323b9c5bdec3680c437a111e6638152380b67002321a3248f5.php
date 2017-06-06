<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_a573040265f11cbe183301195f4eec53a1a0ed0fc28bc585f7174af601a48598 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c1ee1aae96fd5a690955f184c673a1015aecf95142a5ccb1526aacbfed77c93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c1ee1aae96fd5a690955f184c673a1015aecf95142a5ccb1526aacbfed77c93->enter($__internal_3c1ee1aae96fd5a690955f184c673a1015aecf95142a5ccb1526aacbfed77c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_eb0a07de91fc3fae20b9bb7421ab1f7cd4bde3f9d33e8e9a5a6e453e9f8f9e77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb0a07de91fc3fae20b9bb7421ab1f7cd4bde3f9d33e8e9a5a6e453e9f8f9e77->enter($__internal_eb0a07de91fc3fae20b9bb7421ab1f7cd4bde3f9d33e8e9a5a6e453e9f8f9e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3c1ee1aae96fd5a690955f184c673a1015aecf95142a5ccb1526aacbfed77c93->leave($__internal_3c1ee1aae96fd5a690955f184c673a1015aecf95142a5ccb1526aacbfed77c93_prof);

        
        $__internal_eb0a07de91fc3fae20b9bb7421ab1f7cd4bde3f9d33e8e9a5a6e453e9f8f9e77->leave($__internal_eb0a07de91fc3fae20b9bb7421ab1f7cd4bde3f9d33e8e9a5a6e453e9f8f9e77_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_750d885ec07b9d8c0af854ce8b11cf955d13c64b7b3c896b81943924dc64a02c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_750d885ec07b9d8c0af854ce8b11cf955d13c64b7b3c896b81943924dc64a02c->enter($__internal_750d885ec07b9d8c0af854ce8b11cf955d13c64b7b3c896b81943924dc64a02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_b9f1334a54ec4d291948640185b259c83382d24b5b4edca5e9f7cdfc45d70bd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9f1334a54ec4d291948640185b259c83382d24b5b4edca5e9f7cdfc45d70bd4->enter($__internal_b9f1334a54ec4d291948640185b259c83382d24b5b4edca5e9f7cdfc45d70bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_b9f1334a54ec4d291948640185b259c83382d24b5b4edca5e9f7cdfc45d70bd4->leave($__internal_b9f1334a54ec4d291948640185b259c83382d24b5b4edca5e9f7cdfc45d70bd4_prof);

        
        $__internal_750d885ec07b9d8c0af854ce8b11cf955d13c64b7b3c896b81943924dc64a02c->leave($__internal_750d885ec07b9d8c0af854ce8b11cf955d13c64b7b3c896b81943924dc64a02c_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_89764d4582d3c87dd81429f6c6ad627249531560bcbb702225685af06dbf23fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89764d4582d3c87dd81429f6c6ad627249531560bcbb702225685af06dbf23fe->enter($__internal_89764d4582d3c87dd81429f6c6ad627249531560bcbb702225685af06dbf23fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_ed90ba1fb51a5e105abac2443e1c9e42726dde6f707416e758a884b3b47a5be6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed90ba1fb51a5e105abac2443e1c9e42726dde6f707416e758a884b3b47a5be6->enter($__internal_ed90ba1fb51a5e105abac2443e1c9e42726dde6f707416e758a884b3b47a5be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ed90ba1fb51a5e105abac2443e1c9e42726dde6f707416e758a884b3b47a5be6->leave($__internal_ed90ba1fb51a5e105abac2443e1c9e42726dde6f707416e758a884b3b47a5be6_prof);

        
        $__internal_89764d4582d3c87dd81429f6c6ad627249531560bcbb702225685af06dbf23fe->leave($__internal_89764d4582d3c87dd81429f6c6ad627249531560bcbb702225685af06dbf23fe_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_697c3603af27effe6c06fdf03f22a2dbbc65b7ac93591e48b08f5fc681cbea8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_697c3603af27effe6c06fdf03f22a2dbbc65b7ac93591e48b08f5fc681cbea8c->enter($__internal_697c3603af27effe6c06fdf03f22a2dbbc65b7ac93591e48b08f5fc681cbea8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_2293566c765ade82a3b2bbe3da884b0f231b3f264b79a78f9e38a33d40cbad9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2293566c765ade82a3b2bbe3da884b0f231b3f264b79a78f9e38a33d40cbad9c->enter($__internal_2293566c765ade82a3b2bbe3da884b0f231b3f264b79a78f9e38a33d40cbad9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2293566c765ade82a3b2bbe3da884b0f231b3f264b79a78f9e38a33d40cbad9c->leave($__internal_2293566c765ade82a3b2bbe3da884b0f231b3f264b79a78f9e38a33d40cbad9c_prof);

        
        $__internal_697c3603af27effe6c06fdf03f22a2dbbc65b7ac93591e48b08f5fc681cbea8c->leave($__internal_697c3603af27effe6c06fdf03f22a2dbbc65b7ac93591e48b08f5fc681cbea8c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
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
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/var/www/html/geek-letters/app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
