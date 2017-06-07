<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_83456c6784782c08302f7459b54958372a53d16e61f9290457bd54e98bf1af44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_aadd7989cbcd8315d866ba12794fe1a8f3a63c9be33e828c5891b5ffabb1e575 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aadd7989cbcd8315d866ba12794fe1a8f3a63c9be33e828c5891b5ffabb1e575->enter($__internal_aadd7989cbcd8315d866ba12794fe1a8f3a63c9be33e828c5891b5ffabb1e575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_015405307ea68a28980ea5cb94744e4a98326e01b6074196c7e1f2d3f1a08567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_015405307ea68a28980ea5cb94744e4a98326e01b6074196c7e1f2d3f1a08567->enter($__internal_015405307ea68a28980ea5cb94744e4a98326e01b6074196c7e1f2d3f1a08567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aadd7989cbcd8315d866ba12794fe1a8f3a63c9be33e828c5891b5ffabb1e575->leave($__internal_aadd7989cbcd8315d866ba12794fe1a8f3a63c9be33e828c5891b5ffabb1e575_prof);

        
        $__internal_015405307ea68a28980ea5cb94744e4a98326e01b6074196c7e1f2d3f1a08567->leave($__internal_015405307ea68a28980ea5cb94744e4a98326e01b6074196c7e1f2d3f1a08567_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ff1628686578f4c167a8e08cfbc020f35d0eae9bee7a2310ca6749da68819ccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff1628686578f4c167a8e08cfbc020f35d0eae9bee7a2310ca6749da68819ccd->enter($__internal_ff1628686578f4c167a8e08cfbc020f35d0eae9bee7a2310ca6749da68819ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ac11f06de072cb69624b6a7864d0bed1b6dfa2c7f10685c7bdd2cd54e6fa31ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac11f06de072cb69624b6a7864d0bed1b6dfa2c7f10685c7bdd2cd54e6fa31ae->enter($__internal_ac11f06de072cb69624b6a7864d0bed1b6dfa2c7f10685c7bdd2cd54e6fa31ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_ac11f06de072cb69624b6a7864d0bed1b6dfa2c7f10685c7bdd2cd54e6fa31ae->leave($__internal_ac11f06de072cb69624b6a7864d0bed1b6dfa2c7f10685c7bdd2cd54e6fa31ae_prof);

        
        $__internal_ff1628686578f4c167a8e08cfbc020f35d0eae9bee7a2310ca6749da68819ccd->leave($__internal_ff1628686578f4c167a8e08cfbc020f35d0eae9bee7a2310ca6749da68819ccd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/html/geek-letters/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
