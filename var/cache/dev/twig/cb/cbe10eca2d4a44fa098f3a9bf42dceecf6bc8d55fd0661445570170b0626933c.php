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
        $__internal_fe6e1253d0674a4c3a014dde3404ef26de750edb4ee1803ac700998d37355443 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe6e1253d0674a4c3a014dde3404ef26de750edb4ee1803ac700998d37355443->enter($__internal_fe6e1253d0674a4c3a014dde3404ef26de750edb4ee1803ac700998d37355443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_29769c73987cd47ee6048000177de255785839654f76d60b670e2c3a039ef318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29769c73987cd47ee6048000177de255785839654f76d60b670e2c3a039ef318->enter($__internal_29769c73987cd47ee6048000177de255785839654f76d60b670e2c3a039ef318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fe6e1253d0674a4c3a014dde3404ef26de750edb4ee1803ac700998d37355443->leave($__internal_fe6e1253d0674a4c3a014dde3404ef26de750edb4ee1803ac700998d37355443_prof);

        
        $__internal_29769c73987cd47ee6048000177de255785839654f76d60b670e2c3a039ef318->leave($__internal_29769c73987cd47ee6048000177de255785839654f76d60b670e2c3a039ef318_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_be2ccdda0afedbdbb84b5708120ab41ce3ef4a0543550522838d6212c60043c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be2ccdda0afedbdbb84b5708120ab41ce3ef4a0543550522838d6212c60043c1->enter($__internal_be2ccdda0afedbdbb84b5708120ab41ce3ef4a0543550522838d6212c60043c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_8c26cff1fe82f1c77f9201f76fff65b17e0224909b21086741bffcaf83019270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c26cff1fe82f1c77f9201f76fff65b17e0224909b21086741bffcaf83019270->enter($__internal_8c26cff1fe82f1c77f9201f76fff65b17e0224909b21086741bffcaf83019270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_8c26cff1fe82f1c77f9201f76fff65b17e0224909b21086741bffcaf83019270->leave($__internal_8c26cff1fe82f1c77f9201f76fff65b17e0224909b21086741bffcaf83019270_prof);

        
        $__internal_be2ccdda0afedbdbb84b5708120ab41ce3ef4a0543550522838d6212c60043c1->leave($__internal_be2ccdda0afedbdbb84b5708120ab41ce3ef4a0543550522838d6212c60043c1_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3b92d9d2e41ceca5e9bb469f58cc3e1f7a3dab2ef0fcacc3f50d67035344232f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b92d9d2e41ceca5e9bb469f58cc3e1f7a3dab2ef0fcacc3f50d67035344232f->enter($__internal_3b92d9d2e41ceca5e9bb469f58cc3e1f7a3dab2ef0fcacc3f50d67035344232f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_cdf7ec56780cd9d626f35a133984a798937d3becfaf5754f2d5c0633b809f37e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdf7ec56780cd9d626f35a133984a798937d3becfaf5754f2d5c0633b809f37e->enter($__internal_cdf7ec56780cd9d626f35a133984a798937d3becfaf5754f2d5c0633b809f37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_cdf7ec56780cd9d626f35a133984a798937d3becfaf5754f2d5c0633b809f37e->leave($__internal_cdf7ec56780cd9d626f35a133984a798937d3becfaf5754f2d5c0633b809f37e_prof);

        
        $__internal_3b92d9d2e41ceca5e9bb469f58cc3e1f7a3dab2ef0fcacc3f50d67035344232f->leave($__internal_3b92d9d2e41ceca5e9bb469f58cc3e1f7a3dab2ef0fcacc3f50d67035344232f_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_93dbf0cebc543becc7284a0c0b7ce76f0a988f4f1d104059ee56cc9b1cba5be2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93dbf0cebc543becc7284a0c0b7ce76f0a988f4f1d104059ee56cc9b1cba5be2->enter($__internal_93dbf0cebc543becc7284a0c0b7ce76f0a988f4f1d104059ee56cc9b1cba5be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_e7fcca5f0590dc8cd7b3f44e7d5176453a3646e76f94185df877c465b1977c98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7fcca5f0590dc8cd7b3f44e7d5176453a3646e76f94185df877c465b1977c98->enter($__internal_e7fcca5f0590dc8cd7b3f44e7d5176453a3646e76f94185df877c465b1977c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e7fcca5f0590dc8cd7b3f44e7d5176453a3646e76f94185df877c465b1977c98->leave($__internal_e7fcca5f0590dc8cd7b3f44e7d5176453a3646e76f94185df877c465b1977c98_prof);

        
        $__internal_93dbf0cebc543becc7284a0c0b7ce76f0a988f4f1d104059ee56cc9b1cba5be2->leave($__internal_93dbf0cebc543becc7284a0c0b7ce76f0a988f4f1d104059ee56cc9b1cba5be2_prof);

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
