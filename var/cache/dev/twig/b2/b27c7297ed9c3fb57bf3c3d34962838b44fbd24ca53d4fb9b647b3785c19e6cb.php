<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_c83d66063a7da54b36bbe0cb3c6b1e6f4834e66bd488f103f4589658acfc7301 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_3ba52cd433a621414a07943e2a68857126d63be4dee12714e344fc33c4fb8162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ba52cd433a621414a07943e2a68857126d63be4dee12714e344fc33c4fb8162->enter($__internal_3ba52cd433a621414a07943e2a68857126d63be4dee12714e344fc33c4fb8162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_a87f1f9e6b3eef8ae2ed4c70dd105d359c26a52a75105db69a21eb5794804ed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a87f1f9e6b3eef8ae2ed4c70dd105d359c26a52a75105db69a21eb5794804ed4->enter($__internal_a87f1f9e6b3eef8ae2ed4c70dd105d359c26a52a75105db69a21eb5794804ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ba52cd433a621414a07943e2a68857126d63be4dee12714e344fc33c4fb8162->leave($__internal_3ba52cd433a621414a07943e2a68857126d63be4dee12714e344fc33c4fb8162_prof);

        
        $__internal_a87f1f9e6b3eef8ae2ed4c70dd105d359c26a52a75105db69a21eb5794804ed4->leave($__internal_a87f1f9e6b3eef8ae2ed4c70dd105d359c26a52a75105db69a21eb5794804ed4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7af850dce45c5d9c36c145e4bc041f95dc4995cbaebc91238077fe0a004775b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7af850dce45c5d9c36c145e4bc041f95dc4995cbaebc91238077fe0a004775b3->enter($__internal_7af850dce45c5d9c36c145e4bc041f95dc4995cbaebc91238077fe0a004775b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3892cf8be4556109b36c57e137229002d1535113cc55385cbe01daa77a92dab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3892cf8be4556109b36c57e137229002d1535113cc55385cbe01daa77a92dab3->enter($__internal_3892cf8be4556109b36c57e137229002d1535113cc55385cbe01daa77a92dab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_3892cf8be4556109b36c57e137229002d1535113cc55385cbe01daa77a92dab3->leave($__internal_3892cf8be4556109b36c57e137229002d1535113cc55385cbe01daa77a92dab3_prof);

        
        $__internal_7af850dce45c5d9c36c145e4bc041f95dc4995cbaebc91238077fe0a004775b3->leave($__internal_7af850dce45c5d9c36c145e4bc041f95dc4995cbaebc91238077fe0a004775b3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/var/www/html/geek-letters/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
