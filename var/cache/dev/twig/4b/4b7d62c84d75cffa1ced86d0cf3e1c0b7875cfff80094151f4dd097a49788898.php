<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_425e477f53f79490838371c4bed0894b6b209538c38387d83af71a90f17cf170 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_eac3383112afdfbdfffe0feb25afbeb8b963986f5f0da6aef2fec9cb003a3e56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eac3383112afdfbdfffe0feb25afbeb8b963986f5f0da6aef2fec9cb003a3e56->enter($__internal_eac3383112afdfbdfffe0feb25afbeb8b963986f5f0da6aef2fec9cb003a3e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_85b4c72610476719bfa7603a61e4d155653ec7338b3474c806b063e29e5855f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85b4c72610476719bfa7603a61e4d155653ec7338b3474c806b063e29e5855f6->enter($__internal_85b4c72610476719bfa7603a61e4d155653ec7338b3474c806b063e29e5855f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eac3383112afdfbdfffe0feb25afbeb8b963986f5f0da6aef2fec9cb003a3e56->leave($__internal_eac3383112afdfbdfffe0feb25afbeb8b963986f5f0da6aef2fec9cb003a3e56_prof);

        
        $__internal_85b4c72610476719bfa7603a61e4d155653ec7338b3474c806b063e29e5855f6->leave($__internal_85b4c72610476719bfa7603a61e4d155653ec7338b3474c806b063e29e5855f6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8b35a0fe1fb524132b8c8f01cd27ca6c0d74dc5b665133944b205b04786870bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b35a0fe1fb524132b8c8f01cd27ca6c0d74dc5b665133944b205b04786870bf->enter($__internal_8b35a0fe1fb524132b8c8f01cd27ca6c0d74dc5b665133944b205b04786870bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c17f0bcd857a126d5fab1105fc79168296b6d9ce61962684016414b420e20810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c17f0bcd857a126d5fab1105fc79168296b6d9ce61962684016414b420e20810->enter($__internal_c17f0bcd857a126d5fab1105fc79168296b6d9ce61962684016414b420e20810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_c17f0bcd857a126d5fab1105fc79168296b6d9ce61962684016414b420e20810->leave($__internal_c17f0bcd857a126d5fab1105fc79168296b6d9ce61962684016414b420e20810_prof);

        
        $__internal_8b35a0fe1fb524132b8c8f01cd27ca6c0d74dc5b665133944b205b04786870bf->leave($__internal_8b35a0fe1fb524132b8c8f01cd27ca6c0d74dc5b665133944b205b04786870bf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/html/geek-letters/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
