<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_c0d652991680a46b7f2c3ab46c24b5cd20c4519c076d81f9fd2cd2f2670d7e2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_42909b16da4cbb1af23b5af97b65495e787481112a688f2cac2f80c15114cf9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42909b16da4cbb1af23b5af97b65495e787481112a688f2cac2f80c15114cf9f->enter($__internal_42909b16da4cbb1af23b5af97b65495e787481112a688f2cac2f80c15114cf9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_ce4117364c6a3d28f8239ca92b5e5d8c940ea2bac01a5c1c275c6fca50b9b520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce4117364c6a3d28f8239ca92b5e5d8c940ea2bac01a5c1c275c6fca50b9b520->enter($__internal_ce4117364c6a3d28f8239ca92b5e5d8c940ea2bac01a5c1c275c6fca50b9b520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42909b16da4cbb1af23b5af97b65495e787481112a688f2cac2f80c15114cf9f->leave($__internal_42909b16da4cbb1af23b5af97b65495e787481112a688f2cac2f80c15114cf9f_prof);

        
        $__internal_ce4117364c6a3d28f8239ca92b5e5d8c940ea2bac01a5c1c275c6fca50b9b520->leave($__internal_ce4117364c6a3d28f8239ca92b5e5d8c940ea2bac01a5c1c275c6fca50b9b520_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2bfd31fc92cc0f7f6736e9970523566d7ec1b03c4fcc5b48f8a0f5e443c92f8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bfd31fc92cc0f7f6736e9970523566d7ec1b03c4fcc5b48f8a0f5e443c92f8d->enter($__internal_2bfd31fc92cc0f7f6736e9970523566d7ec1b03c4fcc5b48f8a0f5e443c92f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c4cb4459d5e569d7a3b7d94a807faaeb667b442d5dc920bdf438eb4e6ffd93aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4cb4459d5e569d7a3b7d94a807faaeb667b442d5dc920bdf438eb4e6ffd93aa->enter($__internal_c4cb4459d5e569d7a3b7d94a807faaeb667b442d5dc920bdf438eb4e6ffd93aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_c4cb4459d5e569d7a3b7d94a807faaeb667b442d5dc920bdf438eb4e6ffd93aa->leave($__internal_c4cb4459d5e569d7a3b7d94a807faaeb667b442d5dc920bdf438eb4e6ffd93aa_prof);

        
        $__internal_2bfd31fc92cc0f7f6736e9970523566d7ec1b03c4fcc5b48f8a0f5e443c92f8d->leave($__internal_2bfd31fc92cc0f7f6736e9970523566d7ec1b03c4fcc5b48f8a0f5e443c92f8d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/html/geek-letters/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
