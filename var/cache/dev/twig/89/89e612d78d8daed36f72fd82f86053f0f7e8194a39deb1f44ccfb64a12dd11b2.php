<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_65855b5587c018146f18658020275c08006b3f3251a9456cbf9be9f4e55711b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_97607a92a31eeeababbde3a2c8b660ef0e3ae2cadf77eea0b461b4735cec43a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97607a92a31eeeababbde3a2c8b660ef0e3ae2cadf77eea0b461b4735cec43a5->enter($__internal_97607a92a31eeeababbde3a2c8b660ef0e3ae2cadf77eea0b461b4735cec43a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_cc6258e575f7f4c1ca75b46aebe3c8d4af978cba0b552c6c16bdf2e052b1cde9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc6258e575f7f4c1ca75b46aebe3c8d4af978cba0b552c6c16bdf2e052b1cde9->enter($__internal_cc6258e575f7f4c1ca75b46aebe3c8d4af978cba0b552c6c16bdf2e052b1cde9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97607a92a31eeeababbde3a2c8b660ef0e3ae2cadf77eea0b461b4735cec43a5->leave($__internal_97607a92a31eeeababbde3a2c8b660ef0e3ae2cadf77eea0b461b4735cec43a5_prof);

        
        $__internal_cc6258e575f7f4c1ca75b46aebe3c8d4af978cba0b552c6c16bdf2e052b1cde9->leave($__internal_cc6258e575f7f4c1ca75b46aebe3c8d4af978cba0b552c6c16bdf2e052b1cde9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_91b867b11240042cce6d432b47d2aecda7e66a3e17a4fcd4b722ae04a1a5d8b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91b867b11240042cce6d432b47d2aecda7e66a3e17a4fcd4b722ae04a1a5d8b1->enter($__internal_91b867b11240042cce6d432b47d2aecda7e66a3e17a4fcd4b722ae04a1a5d8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_89ef8724915d611b4f50fecb9e6b148e52c330543768b586197982ad95b9bf84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ef8724915d611b4f50fecb9e6b148e52c330543768b586197982ad95b9bf84->enter($__internal_89ef8724915d611b4f50fecb9e6b148e52c330543768b586197982ad95b9bf84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_89ef8724915d611b4f50fecb9e6b148e52c330543768b586197982ad95b9bf84->leave($__internal_89ef8724915d611b4f50fecb9e6b148e52c330543768b586197982ad95b9bf84_prof);

        
        $__internal_91b867b11240042cce6d432b47d2aecda7e66a3e17a4fcd4b722ae04a1a5d8b1->leave($__internal_91b867b11240042cce6d432b47d2aecda7e66a3e17a4fcd4b722ae04a1a5d8b1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/html/geek-letters/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
