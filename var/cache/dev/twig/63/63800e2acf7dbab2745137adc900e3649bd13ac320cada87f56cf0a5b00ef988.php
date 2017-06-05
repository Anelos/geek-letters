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
        $__internal_88b62bf8c39b8c2fcaa631c47a23b3f4030e802c5205c8dde61828d4348de415 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88b62bf8c39b8c2fcaa631c47a23b3f4030e802c5205c8dde61828d4348de415->enter($__internal_88b62bf8c39b8c2fcaa631c47a23b3f4030e802c5205c8dde61828d4348de415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_d51a2368ded9870982a3b5781e707a50e05236c7bdf86a556c2c86affbcaef3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d51a2368ded9870982a3b5781e707a50e05236c7bdf86a556c2c86affbcaef3a->enter($__internal_d51a2368ded9870982a3b5781e707a50e05236c7bdf86a556c2c86affbcaef3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88b62bf8c39b8c2fcaa631c47a23b3f4030e802c5205c8dde61828d4348de415->leave($__internal_88b62bf8c39b8c2fcaa631c47a23b3f4030e802c5205c8dde61828d4348de415_prof);

        
        $__internal_d51a2368ded9870982a3b5781e707a50e05236c7bdf86a556c2c86affbcaef3a->leave($__internal_d51a2368ded9870982a3b5781e707a50e05236c7bdf86a556c2c86affbcaef3a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d59f962ec6ef7fe5c0c367863802431efd3d161c0bde96c75abba4946ac0c23c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d59f962ec6ef7fe5c0c367863802431efd3d161c0bde96c75abba4946ac0c23c->enter($__internal_d59f962ec6ef7fe5c0c367863802431efd3d161c0bde96c75abba4946ac0c23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ad485c09f19d360558624410d6c76fc3d0e70295afb91a826f0943dec9a5942c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad485c09f19d360558624410d6c76fc3d0e70295afb91a826f0943dec9a5942c->enter($__internal_ad485c09f19d360558624410d6c76fc3d0e70295afb91a826f0943dec9a5942c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_ad485c09f19d360558624410d6c76fc3d0e70295afb91a826f0943dec9a5942c->leave($__internal_ad485c09f19d360558624410d6c76fc3d0e70295afb91a826f0943dec9a5942c_prof);

        
        $__internal_d59f962ec6ef7fe5c0c367863802431efd3d161c0bde96c75abba4946ac0c23c->leave($__internal_d59f962ec6ef7fe5c0c367863802431efd3d161c0bde96c75abba4946ac0c23c_prof);

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
