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
        $__internal_6a9035e932dd3ce531d3e1c891b10696820b320cba3abe3fa4d78e40805cfa7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a9035e932dd3ce531d3e1c891b10696820b320cba3abe3fa4d78e40805cfa7d->enter($__internal_6a9035e932dd3ce531d3e1c891b10696820b320cba3abe3fa4d78e40805cfa7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_b947b6491401cc794057e394c31a07e2df14a12bd342107af948167fcfb89105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b947b6491401cc794057e394c31a07e2df14a12bd342107af948167fcfb89105->enter($__internal_b947b6491401cc794057e394c31a07e2df14a12bd342107af948167fcfb89105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6a9035e932dd3ce531d3e1c891b10696820b320cba3abe3fa4d78e40805cfa7d->leave($__internal_6a9035e932dd3ce531d3e1c891b10696820b320cba3abe3fa4d78e40805cfa7d_prof);

        
        $__internal_b947b6491401cc794057e394c31a07e2df14a12bd342107af948167fcfb89105->leave($__internal_b947b6491401cc794057e394c31a07e2df14a12bd342107af948167fcfb89105_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2d0e190b9abe77bc92f6aa96bc9bc7cc28350c962f9607bffeadbf79ec4d6bbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d0e190b9abe77bc92f6aa96bc9bc7cc28350c962f9607bffeadbf79ec4d6bbe->enter($__internal_2d0e190b9abe77bc92f6aa96bc9bc7cc28350c962f9607bffeadbf79ec4d6bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_f23e998f5a965fd4139bd88d961f6f0e950c590468b78f791821f7330af6536c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f23e998f5a965fd4139bd88d961f6f0e950c590468b78f791821f7330af6536c->enter($__internal_f23e998f5a965fd4139bd88d961f6f0e950c590468b78f791821f7330af6536c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_f23e998f5a965fd4139bd88d961f6f0e950c590468b78f791821f7330af6536c->leave($__internal_f23e998f5a965fd4139bd88d961f6f0e950c590468b78f791821f7330af6536c_prof);

        
        $__internal_2d0e190b9abe77bc92f6aa96bc9bc7cc28350c962f9607bffeadbf79ec4d6bbe->leave($__internal_2d0e190b9abe77bc92f6aa96bc9bc7cc28350c962f9607bffeadbf79ec4d6bbe_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2bc73e51afa74337912b36df9c905a5d38384d79e8493c673cc3d78a2a4988ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bc73e51afa74337912b36df9c905a5d38384d79e8493c673cc3d78a2a4988ff->enter($__internal_2bc73e51afa74337912b36df9c905a5d38384d79e8493c673cc3d78a2a4988ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_dab0bd1b10b28852edaade91bb2a059843a5d368600ef940a8d388ef4f82f9e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dab0bd1b10b28852edaade91bb2a059843a5d368600ef940a8d388ef4f82f9e8->enter($__internal_dab0bd1b10b28852edaade91bb2a059843a5d368600ef940a8d388ef4f82f9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_dab0bd1b10b28852edaade91bb2a059843a5d368600ef940a8d388ef4f82f9e8->leave($__internal_dab0bd1b10b28852edaade91bb2a059843a5d368600ef940a8d388ef4f82f9e8_prof);

        
        $__internal_2bc73e51afa74337912b36df9c905a5d38384d79e8493c673cc3d78a2a4988ff->leave($__internal_2bc73e51afa74337912b36df9c905a5d38384d79e8493c673cc3d78a2a4988ff_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3e526767fe90dcc0be268474d0842b998e6265a5c46180e9020d13b8249617a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e526767fe90dcc0be268474d0842b998e6265a5c46180e9020d13b8249617a8->enter($__internal_3e526767fe90dcc0be268474d0842b998e6265a5c46180e9020d13b8249617a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_aaa20d0a82f28c3c2c7b75f995b334ae32fc2aa75563bdd6151592989522fc9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaa20d0a82f28c3c2c7b75f995b334ae32fc2aa75563bdd6151592989522fc9c->enter($__internal_aaa20d0a82f28c3c2c7b75f995b334ae32fc2aa75563bdd6151592989522fc9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_aaa20d0a82f28c3c2c7b75f995b334ae32fc2aa75563bdd6151592989522fc9c->leave($__internal_aaa20d0a82f28c3c2c7b75f995b334ae32fc2aa75563bdd6151592989522fc9c_prof);

        
        $__internal_3e526767fe90dcc0be268474d0842b998e6265a5c46180e9020d13b8249617a8->leave($__internal_3e526767fe90dcc0be268474d0842b998e6265a5c46180e9020d13b8249617a8_prof);

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
