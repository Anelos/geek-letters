<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_052e800c709a56f60ecef975d63b68e0b87e62805b3e3d797b7aa75b46f602e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_ae0d5ef259194ed38f7f5d5aecacc010c7ec655de2ff90d80eb5a5681ac5f190 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae0d5ef259194ed38f7f5d5aecacc010c7ec655de2ff90d80eb5a5681ac5f190->enter($__internal_ae0d5ef259194ed38f7f5d5aecacc010c7ec655de2ff90d80eb5a5681ac5f190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_3bf81dd3beeafe2e115b23962a5e307885f77d28359d2f57c5f5f9c316cad033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bf81dd3beeafe2e115b23962a5e307885f77d28359d2f57c5f5f9c316cad033->enter($__internal_3bf81dd3beeafe2e115b23962a5e307885f77d28359d2f57c5f5f9c316cad033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae0d5ef259194ed38f7f5d5aecacc010c7ec655de2ff90d80eb5a5681ac5f190->leave($__internal_ae0d5ef259194ed38f7f5d5aecacc010c7ec655de2ff90d80eb5a5681ac5f190_prof);

        
        $__internal_3bf81dd3beeafe2e115b23962a5e307885f77d28359d2f57c5f5f9c316cad033->leave($__internal_3bf81dd3beeafe2e115b23962a5e307885f77d28359d2f57c5f5f9c316cad033_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bdb6282888644db4e99e6bbfd28fe15bdbf79f39e34fa7ca3223f33428a88a7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdb6282888644db4e99e6bbfd28fe15bdbf79f39e34fa7ca3223f33428a88a7e->enter($__internal_bdb6282888644db4e99e6bbfd28fe15bdbf79f39e34fa7ca3223f33428a88a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_19f51e59ff4e299c645beaf85c53ea023fe93417d6db3d7485fb47a2c15661e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f51e59ff4e299c645beaf85c53ea023fe93417d6db3d7485fb47a2c15661e5->enter($__internal_19f51e59ff4e299c645beaf85c53ea023fe93417d6db3d7485fb47a2c15661e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_19f51e59ff4e299c645beaf85c53ea023fe93417d6db3d7485fb47a2c15661e5->leave($__internal_19f51e59ff4e299c645beaf85c53ea023fe93417d6db3d7485fb47a2c15661e5_prof);

        
        $__internal_bdb6282888644db4e99e6bbfd28fe15bdbf79f39e34fa7ca3223f33428a88a7e->leave($__internal_bdb6282888644db4e99e6bbfd28fe15bdbf79f39e34fa7ca3223f33428a88a7e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/html/geek-letters/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
