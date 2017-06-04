<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_0a535b5afc35b44842904a3312552a9c266172cdb1ff69c981a628ec6b752151 extends Twig_Template
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
        $__internal_c3cf86b6c8a4bfc2c3076721f77e306cbf186396da8b8166f387df97cf599d79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3cf86b6c8a4bfc2c3076721f77e306cbf186396da8b8166f387df97cf599d79->enter($__internal_c3cf86b6c8a4bfc2c3076721f77e306cbf186396da8b8166f387df97cf599d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_d7192b59cf386a59d6d7a4211291ab094350aeb7a1425a1982730eb208e829c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7192b59cf386a59d6d7a4211291ab094350aeb7a1425a1982730eb208e829c2->enter($__internal_d7192b59cf386a59d6d7a4211291ab094350aeb7a1425a1982730eb208e829c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c3cf86b6c8a4bfc2c3076721f77e306cbf186396da8b8166f387df97cf599d79->leave($__internal_c3cf86b6c8a4bfc2c3076721f77e306cbf186396da8b8166f387df97cf599d79_prof);

        
        $__internal_d7192b59cf386a59d6d7a4211291ab094350aeb7a1425a1982730eb208e829c2->leave($__internal_d7192b59cf386a59d6d7a4211291ab094350aeb7a1425a1982730eb208e829c2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8fe7e4357a68b6ccd176ee303a641ad35585f91f2ab7c5282b9df24c5c628be5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fe7e4357a68b6ccd176ee303a641ad35585f91f2ab7c5282b9df24c5c628be5->enter($__internal_8fe7e4357a68b6ccd176ee303a641ad35585f91f2ab7c5282b9df24c5c628be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_c64fb8a1c2c65ff0e9618acfe4ef591d019aff7646e459dd9c5cd5db39f14251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c64fb8a1c2c65ff0e9618acfe4ef591d019aff7646e459dd9c5cd5db39f14251->enter($__internal_c64fb8a1c2c65ff0e9618acfe4ef591d019aff7646e459dd9c5cd5db39f14251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_c64fb8a1c2c65ff0e9618acfe4ef591d019aff7646e459dd9c5cd5db39f14251->leave($__internal_c64fb8a1c2c65ff0e9618acfe4ef591d019aff7646e459dd9c5cd5db39f14251_prof);

        
        $__internal_8fe7e4357a68b6ccd176ee303a641ad35585f91f2ab7c5282b9df24c5c628be5->leave($__internal_8fe7e4357a68b6ccd176ee303a641ad35585f91f2ab7c5282b9df24c5c628be5_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ede9065aff07021cbf1335dc4d27fd74b1b42e1d71fcddc69e8227f82f4c7797 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ede9065aff07021cbf1335dc4d27fd74b1b42e1d71fcddc69e8227f82f4c7797->enter($__internal_ede9065aff07021cbf1335dc4d27fd74b1b42e1d71fcddc69e8227f82f4c7797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_2ab2bbe425986633430f4971b576d67dc59ec980e2dde64fd6d74feb462b6694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ab2bbe425986633430f4971b576d67dc59ec980e2dde64fd6d74feb462b6694->enter($__internal_2ab2bbe425986633430f4971b576d67dc59ec980e2dde64fd6d74feb462b6694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2ab2bbe425986633430f4971b576d67dc59ec980e2dde64fd6d74feb462b6694->leave($__internal_2ab2bbe425986633430f4971b576d67dc59ec980e2dde64fd6d74feb462b6694_prof);

        
        $__internal_ede9065aff07021cbf1335dc4d27fd74b1b42e1d71fcddc69e8227f82f4c7797->leave($__internal_ede9065aff07021cbf1335dc4d27fd74b1b42e1d71fcddc69e8227f82f4c7797_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a51240a4a0ce8fef4814db576cff5cfaeadac64c74db387658f6d9f03aeb5e3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a51240a4a0ce8fef4814db576cff5cfaeadac64c74db387658f6d9f03aeb5e3e->enter($__internal_a51240a4a0ce8fef4814db576cff5cfaeadac64c74db387658f6d9f03aeb5e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_10025a0bba0ec5ae20769cc6d7041968c5bd2eacd13fbc24e83f8fa6e5663e9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10025a0bba0ec5ae20769cc6d7041968c5bd2eacd13fbc24e83f8fa6e5663e9e->enter($__internal_10025a0bba0ec5ae20769cc6d7041968c5bd2eacd13fbc24e83f8fa6e5663e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_10025a0bba0ec5ae20769cc6d7041968c5bd2eacd13fbc24e83f8fa6e5663e9e->leave($__internal_10025a0bba0ec5ae20769cc6d7041968c5bd2eacd13fbc24e83f8fa6e5663e9e_prof);

        
        $__internal_a51240a4a0ce8fef4814db576cff5cfaeadac64c74db387658f6d9f03aeb5e3e->leave($__internal_a51240a4a0ce8fef4814db576cff5cfaeadac64c74db387658f6d9f03aeb5e3e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/var/www/html/geek-letters/app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
