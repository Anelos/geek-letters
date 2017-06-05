<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_d2659fbc566f9faf8e6434c2ca0628fecbc4bf1e45a6ef8261da0bb3f2510867 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_934cccb112112fc874840184a87560790c3891fc611fd9effe454013b88e3e09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_934cccb112112fc874840184a87560790c3891fc611fd9effe454013b88e3e09->enter($__internal_934cccb112112fc874840184a87560790c3891fc611fd9effe454013b88e3e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_6257d138fe4eb0c3056d7c45936ddc5deb493cf6594469788266b184aab1f147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6257d138fe4eb0c3056d7c45936ddc5deb493cf6594469788266b184aab1f147->enter($__internal_6257d138fe4eb0c3056d7c45936ddc5deb493cf6594469788266b184aab1f147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_934cccb112112fc874840184a87560790c3891fc611fd9effe454013b88e3e09->leave($__internal_934cccb112112fc874840184a87560790c3891fc611fd9effe454013b88e3e09_prof);

        
        $__internal_6257d138fe4eb0c3056d7c45936ddc5deb493cf6594469788266b184aab1f147->leave($__internal_6257d138fe4eb0c3056d7c45936ddc5deb493cf6594469788266b184aab1f147_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_83b2466fe01f3992ddebf0b9c6399a6d0e9fa8afaf15a0f2b03b8115f97d7b5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83b2466fe01f3992ddebf0b9c6399a6d0e9fa8afaf15a0f2b03b8115f97d7b5b->enter($__internal_83b2466fe01f3992ddebf0b9c6399a6d0e9fa8afaf15a0f2b03b8115f97d7b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_dbec8be2e2c43004ce6d3adc02644c53283ea0faef0491894b218aed6a90f002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbec8be2e2c43004ce6d3adc02644c53283ea0faef0491894b218aed6a90f002->enter($__internal_dbec8be2e2c43004ce6d3adc02644c53283ea0faef0491894b218aed6a90f002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_dbec8be2e2c43004ce6d3adc02644c53283ea0faef0491894b218aed6a90f002->leave($__internal_dbec8be2e2c43004ce6d3adc02644c53283ea0faef0491894b218aed6a90f002_prof);

        
        $__internal_83b2466fe01f3992ddebf0b9c6399a6d0e9fa8afaf15a0f2b03b8115f97d7b5b->leave($__internal_83b2466fe01f3992ddebf0b9c6399a6d0e9fa8afaf15a0f2b03b8115f97d7b5b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/html/geek-letters/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
