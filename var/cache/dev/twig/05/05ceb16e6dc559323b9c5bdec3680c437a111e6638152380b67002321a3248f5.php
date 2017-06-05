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
        $__internal_373180abf21e7e3b3da1479e2163ef8fab19c1684283a848836f4a0c26e7eb03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_373180abf21e7e3b3da1479e2163ef8fab19c1684283a848836f4a0c26e7eb03->enter($__internal_373180abf21e7e3b3da1479e2163ef8fab19c1684283a848836f4a0c26e7eb03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_3942e04a92182c34b4d2c41ca034b3bfbcd2a31edb488bedc151ca4641efe75f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3942e04a92182c34b4d2c41ca034b3bfbcd2a31edb488bedc151ca4641efe75f->enter($__internal_3942e04a92182c34b4d2c41ca034b3bfbcd2a31edb488bedc151ca4641efe75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_373180abf21e7e3b3da1479e2163ef8fab19c1684283a848836f4a0c26e7eb03->leave($__internal_373180abf21e7e3b3da1479e2163ef8fab19c1684283a848836f4a0c26e7eb03_prof);

        
        $__internal_3942e04a92182c34b4d2c41ca034b3bfbcd2a31edb488bedc151ca4641efe75f->leave($__internal_3942e04a92182c34b4d2c41ca034b3bfbcd2a31edb488bedc151ca4641efe75f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_858f385e965901599c8ee45b693a7f2646f6f936c4e0724f00dcc7bde7385dc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_858f385e965901599c8ee45b693a7f2646f6f936c4e0724f00dcc7bde7385dc4->enter($__internal_858f385e965901599c8ee45b693a7f2646f6f936c4e0724f00dcc7bde7385dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_5aae89fb3fde5e01abbd4100890b3f026f77a5f8e4b5e7854fda1d381eb6dce9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aae89fb3fde5e01abbd4100890b3f026f77a5f8e4b5e7854fda1d381eb6dce9->enter($__internal_5aae89fb3fde5e01abbd4100890b3f026f77a5f8e4b5e7854fda1d381eb6dce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_5aae89fb3fde5e01abbd4100890b3f026f77a5f8e4b5e7854fda1d381eb6dce9->leave($__internal_5aae89fb3fde5e01abbd4100890b3f026f77a5f8e4b5e7854fda1d381eb6dce9_prof);

        
        $__internal_858f385e965901599c8ee45b693a7f2646f6f936c4e0724f00dcc7bde7385dc4->leave($__internal_858f385e965901599c8ee45b693a7f2646f6f936c4e0724f00dcc7bde7385dc4_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d7d631fe64e496d67323b7b329df3f63d58f2a6d75d1e380792c3762ef68d255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7d631fe64e496d67323b7b329df3f63d58f2a6d75d1e380792c3762ef68d255->enter($__internal_d7d631fe64e496d67323b7b329df3f63d58f2a6d75d1e380792c3762ef68d255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_fd468e63faa33e802f560ce606165bd9a874afae5e9ebf034c4d5fe69e7eb362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd468e63faa33e802f560ce606165bd9a874afae5e9ebf034c4d5fe69e7eb362->enter($__internal_fd468e63faa33e802f560ce606165bd9a874afae5e9ebf034c4d5fe69e7eb362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_fd468e63faa33e802f560ce606165bd9a874afae5e9ebf034c4d5fe69e7eb362->leave($__internal_fd468e63faa33e802f560ce606165bd9a874afae5e9ebf034c4d5fe69e7eb362_prof);

        
        $__internal_d7d631fe64e496d67323b7b329df3f63d58f2a6d75d1e380792c3762ef68d255->leave($__internal_d7d631fe64e496d67323b7b329df3f63d58f2a6d75d1e380792c3762ef68d255_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8fa0ea5f18f1040d669deeb5c2147506d598fb52f0252cbd59625ae7fa92f27d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fa0ea5f18f1040d669deeb5c2147506d598fb52f0252cbd59625ae7fa92f27d->enter($__internal_8fa0ea5f18f1040d669deeb5c2147506d598fb52f0252cbd59625ae7fa92f27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_836f2b53c470f43dc9429ef2870d06ccfbdcb32bb3b53326cdb82a76ac79fe0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_836f2b53c470f43dc9429ef2870d06ccfbdcb32bb3b53326cdb82a76ac79fe0d->enter($__internal_836f2b53c470f43dc9429ef2870d06ccfbdcb32bb3b53326cdb82a76ac79fe0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_836f2b53c470f43dc9429ef2870d06ccfbdcb32bb3b53326cdb82a76ac79fe0d->leave($__internal_836f2b53c470f43dc9429ef2870d06ccfbdcb32bb3b53326cdb82a76ac79fe0d_prof);

        
        $__internal_8fa0ea5f18f1040d669deeb5c2147506d598fb52f0252cbd59625ae7fa92f27d->leave($__internal_8fa0ea5f18f1040d669deeb5c2147506d598fb52f0252cbd59625ae7fa92f27d_prof);

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
