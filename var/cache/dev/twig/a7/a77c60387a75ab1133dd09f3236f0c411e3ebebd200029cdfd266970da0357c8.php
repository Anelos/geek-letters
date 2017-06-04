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
        $__internal_ab57a389d3bc1403597396dd04b61ec426a04428c8a5010bae26771fc0f8584a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab57a389d3bc1403597396dd04b61ec426a04428c8a5010bae26771fc0f8584a->enter($__internal_ab57a389d3bc1403597396dd04b61ec426a04428c8a5010bae26771fc0f8584a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_f7dc47434578893ddc66a70ee16e6c7bc01334fff441393d7d18a3f29d0d929b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7dc47434578893ddc66a70ee16e6c7bc01334fff441393d7d18a3f29d0d929b->enter($__internal_f7dc47434578893ddc66a70ee16e6c7bc01334fff441393d7d18a3f29d0d929b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab57a389d3bc1403597396dd04b61ec426a04428c8a5010bae26771fc0f8584a->leave($__internal_ab57a389d3bc1403597396dd04b61ec426a04428c8a5010bae26771fc0f8584a_prof);

        
        $__internal_f7dc47434578893ddc66a70ee16e6c7bc01334fff441393d7d18a3f29d0d929b->leave($__internal_f7dc47434578893ddc66a70ee16e6c7bc01334fff441393d7d18a3f29d0d929b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c9e450596fff931dc4331e0c841c8fe8b8ef863f607c6076a2d3ef1b23249d1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9e450596fff931dc4331e0c841c8fe8b8ef863f607c6076a2d3ef1b23249d1f->enter($__internal_c9e450596fff931dc4331e0c841c8fe8b8ef863f607c6076a2d3ef1b23249d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ae8ecaa4eb7358e7059d323ba2b7d6a358364b29a3e574d52d7ec8adcea41f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae8ecaa4eb7358e7059d323ba2b7d6a358364b29a3e574d52d7ec8adcea41f58->enter($__internal_ae8ecaa4eb7358e7059d323ba2b7d6a358364b29a3e574d52d7ec8adcea41f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_ae8ecaa4eb7358e7059d323ba2b7d6a358364b29a3e574d52d7ec8adcea41f58->leave($__internal_ae8ecaa4eb7358e7059d323ba2b7d6a358364b29a3e574d52d7ec8adcea41f58_prof);

        
        $__internal_c9e450596fff931dc4331e0c841c8fe8b8ef863f607c6076a2d3ef1b23249d1f->leave($__internal_c9e450596fff931dc4331e0c841c8fe8b8ef863f607c6076a2d3ef1b23249d1f_prof);

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
