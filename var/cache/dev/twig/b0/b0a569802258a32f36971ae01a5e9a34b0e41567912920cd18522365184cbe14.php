<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_c83378809a9cbdeed938420e9ce41a5e2ff1ca4692b9394d18177310330fa8e9 extends Twig_Template
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
        $__internal_cfa86266a1beb438277083e1c3c9b70d1412054c5a803003cd3758fa08ae99c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfa86266a1beb438277083e1c3c9b70d1412054c5a803003cd3758fa08ae99c1->enter($__internal_cfa86266a1beb438277083e1c3c9b70d1412054c5a803003cd3758fa08ae99c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_c5509e0698c1bdc226163321abd80425fb0e86e7ed726dae4e474a6336bffa20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5509e0698c1bdc226163321abd80425fb0e86e7ed726dae4e474a6336bffa20->enter($__internal_c5509e0698c1bdc226163321abd80425fb0e86e7ed726dae4e474a6336bffa20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_cfa86266a1beb438277083e1c3c9b70d1412054c5a803003cd3758fa08ae99c1->leave($__internal_cfa86266a1beb438277083e1c3c9b70d1412054c5a803003cd3758fa08ae99c1_prof);

        
        $__internal_c5509e0698c1bdc226163321abd80425fb0e86e7ed726dae4e474a6336bffa20->leave($__internal_c5509e0698c1bdc226163321abd80425fb0e86e7ed726dae4e474a6336bffa20_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9d00fbeb36843f0125c05461506b0655c0bee29a741b248e788d3a0733cc777c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d00fbeb36843f0125c05461506b0655c0bee29a741b248e788d3a0733cc777c->enter($__internal_9d00fbeb36843f0125c05461506b0655c0bee29a741b248e788d3a0733cc777c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_42ecbb0dce5a35b0b476d9ce7db87a33aebc799111524f9171f2baa6f4bc2abf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42ecbb0dce5a35b0b476d9ce7db87a33aebc799111524f9171f2baa6f4bc2abf->enter($__internal_42ecbb0dce5a35b0b476d9ce7db87a33aebc799111524f9171f2baa6f4bc2abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_42ecbb0dce5a35b0b476d9ce7db87a33aebc799111524f9171f2baa6f4bc2abf->leave($__internal_42ecbb0dce5a35b0b476d9ce7db87a33aebc799111524f9171f2baa6f4bc2abf_prof);

        
        $__internal_9d00fbeb36843f0125c05461506b0655c0bee29a741b248e788d3a0733cc777c->leave($__internal_9d00fbeb36843f0125c05461506b0655c0bee29a741b248e788d3a0733cc777c_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_efcd60c610aee6575b27da84a8894ca0bac5b8b148367a0611783d85dc7c3da2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efcd60c610aee6575b27da84a8894ca0bac5b8b148367a0611783d85dc7c3da2->enter($__internal_efcd60c610aee6575b27da84a8894ca0bac5b8b148367a0611783d85dc7c3da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_18d84e4690d14cdd84dd3537c8eb28aa696e16d49ff40c342029698a4a8a68d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18d84e4690d14cdd84dd3537c8eb28aa696e16d49ff40c342029698a4a8a68d6->enter($__internal_18d84e4690d14cdd84dd3537c8eb28aa696e16d49ff40c342029698a4a8a68d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_18d84e4690d14cdd84dd3537c8eb28aa696e16d49ff40c342029698a4a8a68d6->leave($__internal_18d84e4690d14cdd84dd3537c8eb28aa696e16d49ff40c342029698a4a8a68d6_prof);

        
        $__internal_efcd60c610aee6575b27da84a8894ca0bac5b8b148367a0611783d85dc7c3da2->leave($__internal_efcd60c610aee6575b27da84a8894ca0bac5b8b148367a0611783d85dc7c3da2_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_34df766f7100a5065ec4227329c20ea50d399dfbc026cf668cfb045d518f5081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34df766f7100a5065ec4227329c20ea50d399dfbc026cf668cfb045d518f5081->enter($__internal_34df766f7100a5065ec4227329c20ea50d399dfbc026cf668cfb045d518f5081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_e081bd9dfa72283900d9e42a1bd935448d6f553bba9731e85babd3263f4e0fe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e081bd9dfa72283900d9e42a1bd935448d6f553bba9731e85babd3263f4e0fe9->enter($__internal_e081bd9dfa72283900d9e42a1bd935448d6f553bba9731e85babd3263f4e0fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e081bd9dfa72283900d9e42a1bd935448d6f553bba9731e85babd3263f4e0fe9->leave($__internal_e081bd9dfa72283900d9e42a1bd935448d6f553bba9731e85babd3263f4e0fe9_prof);

        
        $__internal_34df766f7100a5065ec4227329c20ea50d399dfbc026cf668cfb045d518f5081->leave($__internal_34df766f7100a5065ec4227329c20ea50d399dfbc026cf668cfb045d518f5081_prof);

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
", "FOSUserBundle:Resetting:email.txt.twig", "/var/www/html/geek-letters/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
