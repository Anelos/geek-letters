<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_ee582589d092a0093665c419d2298d76a452ddf72952b7781a81616a5225f1c7 extends Twig_Template
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
        $__internal_4a1c85a09ffbaffb39bbb29977986cc1fe061991aa13a66c24c86b17cfaa2da9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a1c85a09ffbaffb39bbb29977986cc1fe061991aa13a66c24c86b17cfaa2da9->enter($__internal_4a1c85a09ffbaffb39bbb29977986cc1fe061991aa13a66c24c86b17cfaa2da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_c9deb6e6f14c1371b913d38501cc3cb3d3b4629766932b1f1a8a8cf7db4fb972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9deb6e6f14c1371b913d38501cc3cb3d3b4629766932b1f1a8a8cf7db4fb972->enter($__internal_c9deb6e6f14c1371b913d38501cc3cb3d3b4629766932b1f1a8a8cf7db4fb972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4a1c85a09ffbaffb39bbb29977986cc1fe061991aa13a66c24c86b17cfaa2da9->leave($__internal_4a1c85a09ffbaffb39bbb29977986cc1fe061991aa13a66c24c86b17cfaa2da9_prof);

        
        $__internal_c9deb6e6f14c1371b913d38501cc3cb3d3b4629766932b1f1a8a8cf7db4fb972->leave($__internal_c9deb6e6f14c1371b913d38501cc3cb3d3b4629766932b1f1a8a8cf7db4fb972_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e4a1bc6abefac981f85da741441f1c1af404a153f447751baa4d3c9f34007cd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4a1bc6abefac981f85da741441f1c1af404a153f447751baa4d3c9f34007cd5->enter($__internal_e4a1bc6abefac981f85da741441f1c1af404a153f447751baa4d3c9f34007cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_db39ab2c7028e6e06a5234c2e405158e0401d14dd9faecdd6ac6c52c60689fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db39ab2c7028e6e06a5234c2e405158e0401d14dd9faecdd6ac6c52c60689fb7->enter($__internal_db39ab2c7028e6e06a5234c2e405158e0401d14dd9faecdd6ac6c52c60689fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_db39ab2c7028e6e06a5234c2e405158e0401d14dd9faecdd6ac6c52c60689fb7->leave($__internal_db39ab2c7028e6e06a5234c2e405158e0401d14dd9faecdd6ac6c52c60689fb7_prof);

        
        $__internal_e4a1bc6abefac981f85da741441f1c1af404a153f447751baa4d3c9f34007cd5->leave($__internal_e4a1bc6abefac981f85da741441f1c1af404a153f447751baa4d3c9f34007cd5_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a53c5ebff973bd440c2cceec8fd9a8abe8f61e867f548b9e67e42e09090f99ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a53c5ebff973bd440c2cceec8fd9a8abe8f61e867f548b9e67e42e09090f99ed->enter($__internal_a53c5ebff973bd440c2cceec8fd9a8abe8f61e867f548b9e67e42e09090f99ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_00efdb642488c54d5ac17ae3768b56dbe87841b6a0386210ed8769a30b390006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00efdb642488c54d5ac17ae3768b56dbe87841b6a0386210ed8769a30b390006->enter($__internal_00efdb642488c54d5ac17ae3768b56dbe87841b6a0386210ed8769a30b390006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_00efdb642488c54d5ac17ae3768b56dbe87841b6a0386210ed8769a30b390006->leave($__internal_00efdb642488c54d5ac17ae3768b56dbe87841b6a0386210ed8769a30b390006_prof);

        
        $__internal_a53c5ebff973bd440c2cceec8fd9a8abe8f61e867f548b9e67e42e09090f99ed->leave($__internal_a53c5ebff973bd440c2cceec8fd9a8abe8f61e867f548b9e67e42e09090f99ed_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_becb048d2c66c60c4049b9fca6ab2b3d7a8344e92f4636c6abd3a7a3b8f458b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_becb048d2c66c60c4049b9fca6ab2b3d7a8344e92f4636c6abd3a7a3b8f458b3->enter($__internal_becb048d2c66c60c4049b9fca6ab2b3d7a8344e92f4636c6abd3a7a3b8f458b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_ed24e4421571c7b839200527fd15fb620751f1771e57740773203f3214edcea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed24e4421571c7b839200527fd15fb620751f1771e57740773203f3214edcea5->enter($__internal_ed24e4421571c7b839200527fd15fb620751f1771e57740773203f3214edcea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ed24e4421571c7b839200527fd15fb620751f1771e57740773203f3214edcea5->leave($__internal_ed24e4421571c7b839200527fd15fb620751f1771e57740773203f3214edcea5_prof);

        
        $__internal_becb048d2c66c60c4049b9fca6ab2b3d7a8344e92f4636c6abd3a7a3b8f458b3->leave($__internal_becb048d2c66c60c4049b9fca6ab2b3d7a8344e92f4636c6abd3a7a3b8f458b3_prof);

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
", "FOSUserBundle:Registration:email.txt.twig", "/var/www/html/geek-letters/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
