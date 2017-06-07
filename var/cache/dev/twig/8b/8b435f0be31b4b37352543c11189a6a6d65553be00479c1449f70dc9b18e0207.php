<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_f3a06687469b7505b4d1f2532f8161a99f0fc5e954170c67e2ec0e401f252540 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_6e77cc93b2d3624172c19d27a9f5f4dcb480d65fd83ccfac2c61431540470611 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e77cc93b2d3624172c19d27a9f5f4dcb480d65fd83ccfac2c61431540470611->enter($__internal_6e77cc93b2d3624172c19d27a9f5f4dcb480d65fd83ccfac2c61431540470611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_7978741dbebad7bc3e587ddbece8936f6a06dc59816cb45cd1f08e1033bc9da1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7978741dbebad7bc3e587ddbece8936f6a06dc59816cb45cd1f08e1033bc9da1->enter($__internal_7978741dbebad7bc3e587ddbece8936f6a06dc59816cb45cd1f08e1033bc9da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e77cc93b2d3624172c19d27a9f5f4dcb480d65fd83ccfac2c61431540470611->leave($__internal_6e77cc93b2d3624172c19d27a9f5f4dcb480d65fd83ccfac2c61431540470611_prof);

        
        $__internal_7978741dbebad7bc3e587ddbece8936f6a06dc59816cb45cd1f08e1033bc9da1->leave($__internal_7978741dbebad7bc3e587ddbece8936f6a06dc59816cb45cd1f08e1033bc9da1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_721b0155c0636f46ae07199cfad65344888f3a93533a4e65e6e650107279e15f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_721b0155c0636f46ae07199cfad65344888f3a93533a4e65e6e650107279e15f->enter($__internal_721b0155c0636f46ae07199cfad65344888f3a93533a4e65e6e650107279e15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f397a1c05ef47435eee12b8adab0c79d1c9bfdec51d38fac7530c84ec8e74990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f397a1c05ef47435eee12b8adab0c79d1c9bfdec51d38fac7530c84ec8e74990->enter($__internal_f397a1c05ef47435eee12b8adab0c79d1c9bfdec51d38fac7530c84ec8e74990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_f397a1c05ef47435eee12b8adab0c79d1c9bfdec51d38fac7530c84ec8e74990->leave($__internal_f397a1c05ef47435eee12b8adab0c79d1c9bfdec51d38fac7530c84ec8e74990_prof);

        
        $__internal_721b0155c0636f46ae07199cfad65344888f3a93533a4e65e6e650107279e15f->leave($__internal_721b0155c0636f46ae07199cfad65344888f3a93533a4e65e6e650107279e15f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/var/www/html/geek-letters/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
