<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_a265e033c2631d82974aa30d51a41c71e64f91126cf81488216ca6a4b0dcf0a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_8b792df7fa0c670d001d6922b3c4e5e9a4bb359060bf9ff5c43f06023dcbe744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b792df7fa0c670d001d6922b3c4e5e9a4bb359060bf9ff5c43f06023dcbe744->enter($__internal_8b792df7fa0c670d001d6922b3c4e5e9a4bb359060bf9ff5c43f06023dcbe744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_b1f4026d88193c5fbd3a9f8f200b41a2cebe09d5cf4b15db8c9ae14625ac7c47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1f4026d88193c5fbd3a9f8f200b41a2cebe09d5cf4b15db8c9ae14625ac7c47->enter($__internal_b1f4026d88193c5fbd3a9f8f200b41a2cebe09d5cf4b15db8c9ae14625ac7c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b792df7fa0c670d001d6922b3c4e5e9a4bb359060bf9ff5c43f06023dcbe744->leave($__internal_8b792df7fa0c670d001d6922b3c4e5e9a4bb359060bf9ff5c43f06023dcbe744_prof);

        
        $__internal_b1f4026d88193c5fbd3a9f8f200b41a2cebe09d5cf4b15db8c9ae14625ac7c47->leave($__internal_b1f4026d88193c5fbd3a9f8f200b41a2cebe09d5cf4b15db8c9ae14625ac7c47_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_00fdabe19c0669200d88434cbed51440de16588881a4a1d5b42ca08041ac87af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00fdabe19c0669200d88434cbed51440de16588881a4a1d5b42ca08041ac87af->enter($__internal_00fdabe19c0669200d88434cbed51440de16588881a4a1d5b42ca08041ac87af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bb4543d453d33bd9374d8f3c3caf89f38c851c2063b0b3d6c99adfcca1e72c84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb4543d453d33bd9374d8f3c3caf89f38c851c2063b0b3d6c99adfcca1e72c84->enter($__internal_bb4543d453d33bd9374d8f3c3caf89f38c851c2063b0b3d6c99adfcca1e72c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_bb4543d453d33bd9374d8f3c3caf89f38c851c2063b0b3d6c99adfcca1e72c84->leave($__internal_bb4543d453d33bd9374d8f3c3caf89f38c851c2063b0b3d6c99adfcca1e72c84_prof);

        
        $__internal_00fdabe19c0669200d88434cbed51440de16588881a4a1d5b42ca08041ac87af->leave($__internal_00fdabe19c0669200d88434cbed51440de16588881a4a1d5b42ca08041ac87af_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/html/geek-letters/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
