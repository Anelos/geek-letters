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
        $__internal_937f224ed6109925a82de0a7e7061acc29bcb7a1ad5007e8f97cc4e6aa152a94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_937f224ed6109925a82de0a7e7061acc29bcb7a1ad5007e8f97cc4e6aa152a94->enter($__internal_937f224ed6109925a82de0a7e7061acc29bcb7a1ad5007e8f97cc4e6aa152a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_e59b0e5105d54ad2e6fd4dea9de19afe39ef9f40c33e59f8edfe0dfe8201a7c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e59b0e5105d54ad2e6fd4dea9de19afe39ef9f40c33e59f8edfe0dfe8201a7c1->enter($__internal_e59b0e5105d54ad2e6fd4dea9de19afe39ef9f40c33e59f8edfe0dfe8201a7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_937f224ed6109925a82de0a7e7061acc29bcb7a1ad5007e8f97cc4e6aa152a94->leave($__internal_937f224ed6109925a82de0a7e7061acc29bcb7a1ad5007e8f97cc4e6aa152a94_prof);

        
        $__internal_e59b0e5105d54ad2e6fd4dea9de19afe39ef9f40c33e59f8edfe0dfe8201a7c1->leave($__internal_e59b0e5105d54ad2e6fd4dea9de19afe39ef9f40c33e59f8edfe0dfe8201a7c1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_21da61bde8ced6b803942a3538c8a667b9c4f99b95353e430ccc67573457e873 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21da61bde8ced6b803942a3538c8a667b9c4f99b95353e430ccc67573457e873->enter($__internal_21da61bde8ced6b803942a3538c8a667b9c4f99b95353e430ccc67573457e873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0a341523c999bcaaf2c7ba68abd61e8fbefed35609d8bf71020975a0a3e4d06d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a341523c999bcaaf2c7ba68abd61e8fbefed35609d8bf71020975a0a3e4d06d->enter($__internal_0a341523c999bcaaf2c7ba68abd61e8fbefed35609d8bf71020975a0a3e4d06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_0a341523c999bcaaf2c7ba68abd61e8fbefed35609d8bf71020975a0a3e4d06d->leave($__internal_0a341523c999bcaaf2c7ba68abd61e8fbefed35609d8bf71020975a0a3e4d06d_prof);

        
        $__internal_21da61bde8ced6b803942a3538c8a667b9c4f99b95353e430ccc67573457e873->leave($__internal_21da61bde8ced6b803942a3538c8a667b9c4f99b95353e430ccc67573457e873_prof);

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
