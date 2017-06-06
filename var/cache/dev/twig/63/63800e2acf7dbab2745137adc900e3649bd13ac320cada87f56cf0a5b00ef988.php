<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_38401dc021f0f660a9dcbe9959c097979b732d40968ba3c8ca466bb1ecedb8e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_0fe7d146064f943902f9bafd9dc1dfe75d308a8f323812aaff21115fdea1c6a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fe7d146064f943902f9bafd9dc1dfe75d308a8f323812aaff21115fdea1c6a3->enter($__internal_0fe7d146064f943902f9bafd9dc1dfe75d308a8f323812aaff21115fdea1c6a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_f54d5881b0503249d9ee64e5793eb7662d685b3d210ec492c09a6021173325e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f54d5881b0503249d9ee64e5793eb7662d685b3d210ec492c09a6021173325e1->enter($__internal_f54d5881b0503249d9ee64e5793eb7662d685b3d210ec492c09a6021173325e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fe7d146064f943902f9bafd9dc1dfe75d308a8f323812aaff21115fdea1c6a3->leave($__internal_0fe7d146064f943902f9bafd9dc1dfe75d308a8f323812aaff21115fdea1c6a3_prof);

        
        $__internal_f54d5881b0503249d9ee64e5793eb7662d685b3d210ec492c09a6021173325e1->leave($__internal_f54d5881b0503249d9ee64e5793eb7662d685b3d210ec492c09a6021173325e1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8006d23cd6d40644997798fce0952bf069089e678378617f1df8f46129a61b22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8006d23cd6d40644997798fce0952bf069089e678378617f1df8f46129a61b22->enter($__internal_8006d23cd6d40644997798fce0952bf069089e678378617f1df8f46129a61b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_81252b1aefd94156c0723a4ea5ab8eaa589cbb4937cf044d59faabea51c577a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81252b1aefd94156c0723a4ea5ab8eaa589cbb4937cf044d59faabea51c577a5->enter($__internal_81252b1aefd94156c0723a4ea5ab8eaa589cbb4937cf044d59faabea51c577a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_81252b1aefd94156c0723a4ea5ab8eaa589cbb4937cf044d59faabea51c577a5->leave($__internal_81252b1aefd94156c0723a4ea5ab8eaa589cbb4937cf044d59faabea51c577a5_prof);

        
        $__internal_8006d23cd6d40644997798fce0952bf069089e678378617f1df8f46129a61b22->leave($__internal_8006d23cd6d40644997798fce0952bf069089e678378617f1df8f46129a61b22_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/html/geek-letters/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
