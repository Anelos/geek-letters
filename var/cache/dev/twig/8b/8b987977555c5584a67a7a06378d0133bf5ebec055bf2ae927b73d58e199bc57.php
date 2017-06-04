<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_1a550f5e11f09b488c236956f7b9b3ef370cb979b9654d9057cedfecbf5b06d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_588165cbbf38732528f15ed67c0fa2328ad64cafbd05b082084673cd8f161b44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_588165cbbf38732528f15ed67c0fa2328ad64cafbd05b082084673cd8f161b44->enter($__internal_588165cbbf38732528f15ed67c0fa2328ad64cafbd05b082084673cd8f161b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_0e2a8754b73611aac2943a90ff9139fd194e02e704d802014584d8b0958e146e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e2a8754b73611aac2943a90ff9139fd194e02e704d802014584d8b0958e146e->enter($__internal_0e2a8754b73611aac2943a90ff9139fd194e02e704d802014584d8b0958e146e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_588165cbbf38732528f15ed67c0fa2328ad64cafbd05b082084673cd8f161b44->leave($__internal_588165cbbf38732528f15ed67c0fa2328ad64cafbd05b082084673cd8f161b44_prof);

        
        $__internal_0e2a8754b73611aac2943a90ff9139fd194e02e704d802014584d8b0958e146e->leave($__internal_0e2a8754b73611aac2943a90ff9139fd194e02e704d802014584d8b0958e146e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8349bc85ca7e7d5df2529de9c9ecec916d14e0cb79422c89253fcaf56c4f4810 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8349bc85ca7e7d5df2529de9c9ecec916d14e0cb79422c89253fcaf56c4f4810->enter($__internal_8349bc85ca7e7d5df2529de9c9ecec916d14e0cb79422c89253fcaf56c4f4810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_522b4f325698cf7b91c66afb217ca421815d7a03236ea5bd4b521569a8e84c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_522b4f325698cf7b91c66afb217ca421815d7a03236ea5bd4b521569a8e84c45->enter($__internal_522b4f325698cf7b91c66afb217ca421815d7a03236ea5bd4b521569a8e84c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_522b4f325698cf7b91c66afb217ca421815d7a03236ea5bd4b521569a8e84c45->leave($__internal_522b4f325698cf7b91c66afb217ca421815d7a03236ea5bd4b521569a8e84c45_prof);

        
        $__internal_8349bc85ca7e7d5df2529de9c9ecec916d14e0cb79422c89253fcaf56c4f4810->leave($__internal_8349bc85ca7e7d5df2529de9c9ecec916d14e0cb79422c89253fcaf56c4f4810_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/html/geek-letters/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
