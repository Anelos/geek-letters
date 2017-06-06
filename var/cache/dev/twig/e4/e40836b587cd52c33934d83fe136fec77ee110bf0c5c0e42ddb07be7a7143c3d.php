<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_b4af14ac508032fa5374739cd82b9604feecd3413e63e9fcc418a3beda202bec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_e72a5164312e359decc524a12a9a56f9b9338d15f183ac2469e84ca97e71b7f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e72a5164312e359decc524a12a9a56f9b9338d15f183ac2469e84ca97e71b7f2->enter($__internal_e72a5164312e359decc524a12a9a56f9b9338d15f183ac2469e84ca97e71b7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_b84ee1fbdb146c16ab34351f90b0b8a8f6fd7d9d2742d3b7025403ab6f5e4d75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b84ee1fbdb146c16ab34351f90b0b8a8f6fd7d9d2742d3b7025403ab6f5e4d75->enter($__internal_b84ee1fbdb146c16ab34351f90b0b8a8f6fd7d9d2742d3b7025403ab6f5e4d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e72a5164312e359decc524a12a9a56f9b9338d15f183ac2469e84ca97e71b7f2->leave($__internal_e72a5164312e359decc524a12a9a56f9b9338d15f183ac2469e84ca97e71b7f2_prof);

        
        $__internal_b84ee1fbdb146c16ab34351f90b0b8a8f6fd7d9d2742d3b7025403ab6f5e4d75->leave($__internal_b84ee1fbdb146c16ab34351f90b0b8a8f6fd7d9d2742d3b7025403ab6f5e4d75_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_afe257cc7d220d2e05c94c599c0172494e38e1f6d63c4b5d754b7ff0b0bcb12c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afe257cc7d220d2e05c94c599c0172494e38e1f6d63c4b5d754b7ff0b0bcb12c->enter($__internal_afe257cc7d220d2e05c94c599c0172494e38e1f6d63c4b5d754b7ff0b0bcb12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f3c3cff04531eb1d13af180d71d393d98d20c3375bb9cafa2e570032c7b864c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3c3cff04531eb1d13af180d71d393d98d20c3375bb9cafa2e570032c7b864c7->enter($__internal_f3c3cff04531eb1d13af180d71d393d98d20c3375bb9cafa2e570032c7b864c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_f3c3cff04531eb1d13af180d71d393d98d20c3375bb9cafa2e570032c7b864c7->leave($__internal_f3c3cff04531eb1d13af180d71d393d98d20c3375bb9cafa2e570032c7b864c7_prof);

        
        $__internal_afe257cc7d220d2e05c94c599c0172494e38e1f6d63c4b5d754b7ff0b0bcb12c->leave($__internal_afe257cc7d220d2e05c94c599c0172494e38e1f6d63c4b5d754b7ff0b0bcb12c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/var/www/html/geek-letters/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
