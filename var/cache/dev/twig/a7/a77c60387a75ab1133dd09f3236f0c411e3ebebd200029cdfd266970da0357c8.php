<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_705f4ed76cf93218e5fed0e7955cbf81faa31bd26b8de6086bb57ff3bda21b22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_ccffeeb3c41983635bed64e3ec1cb337d000df9463bd3d77db9157a509016471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccffeeb3c41983635bed64e3ec1cb337d000df9463bd3d77db9157a509016471->enter($__internal_ccffeeb3c41983635bed64e3ec1cb337d000df9463bd3d77db9157a509016471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_daa2e91949f0a11160a6679085a9ac471ae30a93f569132e8c3a5e45acef3296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa2e91949f0a11160a6679085a9ac471ae30a93f569132e8c3a5e45acef3296->enter($__internal_daa2e91949f0a11160a6679085a9ac471ae30a93f569132e8c3a5e45acef3296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccffeeb3c41983635bed64e3ec1cb337d000df9463bd3d77db9157a509016471->leave($__internal_ccffeeb3c41983635bed64e3ec1cb337d000df9463bd3d77db9157a509016471_prof);

        
        $__internal_daa2e91949f0a11160a6679085a9ac471ae30a93f569132e8c3a5e45acef3296->leave($__internal_daa2e91949f0a11160a6679085a9ac471ae30a93f569132e8c3a5e45acef3296_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e45628f6788d24609ace56441141b827b1d314919cb2afa29de497596fd0289b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e45628f6788d24609ace56441141b827b1d314919cb2afa29de497596fd0289b->enter($__internal_e45628f6788d24609ace56441141b827b1d314919cb2afa29de497596fd0289b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_26717dc742e5a962c7fb75d15f8e1812e40df4cb9bfbbb21b0aae9d7258781be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26717dc742e5a962c7fb75d15f8e1812e40df4cb9bfbbb21b0aae9d7258781be->enter($__internal_26717dc742e5a962c7fb75d15f8e1812e40df4cb9bfbbb21b0aae9d7258781be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_26717dc742e5a962c7fb75d15f8e1812e40df4cb9bfbbb21b0aae9d7258781be->leave($__internal_26717dc742e5a962c7fb75d15f8e1812e40df4cb9bfbbb21b0aae9d7258781be_prof);

        
        $__internal_e45628f6788d24609ace56441141b827b1d314919cb2afa29de497596fd0289b->leave($__internal_e45628f6788d24609ace56441141b827b1d314919cb2afa29de497596fd0289b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/var/www/html/geek-letters/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
