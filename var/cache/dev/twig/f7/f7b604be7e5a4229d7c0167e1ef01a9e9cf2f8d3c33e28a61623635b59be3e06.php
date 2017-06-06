<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_d2659fbc566f9faf8e6434c2ca0628fecbc4bf1e45a6ef8261da0bb3f2510867 extends Twig_Template
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
        $__internal_3244fbfeeb40b3c02c6fefc4763c8d43e70f10886df0a9b4173e90c3cddb1e52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3244fbfeeb40b3c02c6fefc4763c8d43e70f10886df0a9b4173e90c3cddb1e52->enter($__internal_3244fbfeeb40b3c02c6fefc4763c8d43e70f10886df0a9b4173e90c3cddb1e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_19ee9fdc6d0bf09f295848bf17254d07dbfe58c93a61ec8916bd66e0b244050b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19ee9fdc6d0bf09f295848bf17254d07dbfe58c93a61ec8916bd66e0b244050b->enter($__internal_19ee9fdc6d0bf09f295848bf17254d07dbfe58c93a61ec8916bd66e0b244050b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3244fbfeeb40b3c02c6fefc4763c8d43e70f10886df0a9b4173e90c3cddb1e52->leave($__internal_3244fbfeeb40b3c02c6fefc4763c8d43e70f10886df0a9b4173e90c3cddb1e52_prof);

        
        $__internal_19ee9fdc6d0bf09f295848bf17254d07dbfe58c93a61ec8916bd66e0b244050b->leave($__internal_19ee9fdc6d0bf09f295848bf17254d07dbfe58c93a61ec8916bd66e0b244050b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bbff302f2505167792883030a89fd45a04231682249d8985b1d20d0a48630074 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbff302f2505167792883030a89fd45a04231682249d8985b1d20d0a48630074->enter($__internal_bbff302f2505167792883030a89fd45a04231682249d8985b1d20d0a48630074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e1cea0dbe6fe75c491bc353e6b7b612b597bbfe24be0e472a3c8d94323bd6eeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1cea0dbe6fe75c491bc353e6b7b612b597bbfe24be0e472a3c8d94323bd6eeb->enter($__internal_e1cea0dbe6fe75c491bc353e6b7b612b597bbfe24be0e472a3c8d94323bd6eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_e1cea0dbe6fe75c491bc353e6b7b612b597bbfe24be0e472a3c8d94323bd6eeb->leave($__internal_e1cea0dbe6fe75c491bc353e6b7b612b597bbfe24be0e472a3c8d94323bd6eeb_prof);

        
        $__internal_bbff302f2505167792883030a89fd45a04231682249d8985b1d20d0a48630074->leave($__internal_bbff302f2505167792883030a89fd45a04231682249d8985b1d20d0a48630074_prof);

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
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/html/geek-letters/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
