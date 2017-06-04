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
        $__internal_dad2b58229199c68bd72f99ea4c32fe62bf8425a721014f8c8b949088aa47792 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dad2b58229199c68bd72f99ea4c32fe62bf8425a721014f8c8b949088aa47792->enter($__internal_dad2b58229199c68bd72f99ea4c32fe62bf8425a721014f8c8b949088aa47792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_7cddd835faa72dcd78965833cbeb520b2458e9f4d16edec2a46ecfe83a59c504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cddd835faa72dcd78965833cbeb520b2458e9f4d16edec2a46ecfe83a59c504->enter($__internal_7cddd835faa72dcd78965833cbeb520b2458e9f4d16edec2a46ecfe83a59c504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_dad2b58229199c68bd72f99ea4c32fe62bf8425a721014f8c8b949088aa47792->leave($__internal_dad2b58229199c68bd72f99ea4c32fe62bf8425a721014f8c8b949088aa47792_prof);

        
        $__internal_7cddd835faa72dcd78965833cbeb520b2458e9f4d16edec2a46ecfe83a59c504->leave($__internal_7cddd835faa72dcd78965833cbeb520b2458e9f4d16edec2a46ecfe83a59c504_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2aa19356638b85a7b1db67ddf1e4a46fde054c9a6a5db759d7fce24279bf5ec8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aa19356638b85a7b1db67ddf1e4a46fde054c9a6a5db759d7fce24279bf5ec8->enter($__internal_2aa19356638b85a7b1db67ddf1e4a46fde054c9a6a5db759d7fce24279bf5ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_b1b4bee5be720d1d79c8148d14c390053a6d7536c027a10d6bebd561e95e6468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1b4bee5be720d1d79c8148d14c390053a6d7536c027a10d6bebd561e95e6468->enter($__internal_b1b4bee5be720d1d79c8148d14c390053a6d7536c027a10d6bebd561e95e6468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_b1b4bee5be720d1d79c8148d14c390053a6d7536c027a10d6bebd561e95e6468->leave($__internal_b1b4bee5be720d1d79c8148d14c390053a6d7536c027a10d6bebd561e95e6468_prof);

        
        $__internal_2aa19356638b85a7b1db67ddf1e4a46fde054c9a6a5db759d7fce24279bf5ec8->leave($__internal_2aa19356638b85a7b1db67ddf1e4a46fde054c9a6a5db759d7fce24279bf5ec8_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8b90a3ee858678f6fdb38af998f06c0816955b3b676be773d60a3a0e26c2993e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b90a3ee858678f6fdb38af998f06c0816955b3b676be773d60a3a0e26c2993e->enter($__internal_8b90a3ee858678f6fdb38af998f06c0816955b3b676be773d60a3a0e26c2993e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_652a8cb4f2f723d3ee9efe7b177f08601f3ab54c0171e5466e923dbdf9fda4a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_652a8cb4f2f723d3ee9efe7b177f08601f3ab54c0171e5466e923dbdf9fda4a7->enter($__internal_652a8cb4f2f723d3ee9efe7b177f08601f3ab54c0171e5466e923dbdf9fda4a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_652a8cb4f2f723d3ee9efe7b177f08601f3ab54c0171e5466e923dbdf9fda4a7->leave($__internal_652a8cb4f2f723d3ee9efe7b177f08601f3ab54c0171e5466e923dbdf9fda4a7_prof);

        
        $__internal_8b90a3ee858678f6fdb38af998f06c0816955b3b676be773d60a3a0e26c2993e->leave($__internal_8b90a3ee858678f6fdb38af998f06c0816955b3b676be773d60a3a0e26c2993e_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e7c21a36f36c2152bacd6137944ee4578e993e8da73267a3258f5d60fc22af47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7c21a36f36c2152bacd6137944ee4578e993e8da73267a3258f5d60fc22af47->enter($__internal_e7c21a36f36c2152bacd6137944ee4578e993e8da73267a3258f5d60fc22af47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_b24e45fbd5a4d59b05e958ae7d87b0186ab29bcf82bcbf5b5bca3bdb73016a7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b24e45fbd5a4d59b05e958ae7d87b0186ab29bcf82bcbf5b5bca3bdb73016a7f->enter($__internal_b24e45fbd5a4d59b05e958ae7d87b0186ab29bcf82bcbf5b5bca3bdb73016a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b24e45fbd5a4d59b05e958ae7d87b0186ab29bcf82bcbf5b5bca3bdb73016a7f->leave($__internal_b24e45fbd5a4d59b05e958ae7d87b0186ab29bcf82bcbf5b5bca3bdb73016a7f_prof);

        
        $__internal_e7c21a36f36c2152bacd6137944ee4578e993e8da73267a3258f5d60fc22af47->leave($__internal_e7c21a36f36c2152bacd6137944ee4578e993e8da73267a3258f5d60fc22af47_prof);

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
