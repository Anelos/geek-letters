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
        $__internal_5ff0a84820f4e70dd9f8311b73ba4c76af17a7d0a4cc875fdac2f4bdbd95710e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ff0a84820f4e70dd9f8311b73ba4c76af17a7d0a4cc875fdac2f4bdbd95710e->enter($__internal_5ff0a84820f4e70dd9f8311b73ba4c76af17a7d0a4cc875fdac2f4bdbd95710e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_83f02c5cb321064870974752b4495e0921ff127d98494323daa58def90d93e86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83f02c5cb321064870974752b4495e0921ff127d98494323daa58def90d93e86->enter($__internal_83f02c5cb321064870974752b4495e0921ff127d98494323daa58def90d93e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ff0a84820f4e70dd9f8311b73ba4c76af17a7d0a4cc875fdac2f4bdbd95710e->leave($__internal_5ff0a84820f4e70dd9f8311b73ba4c76af17a7d0a4cc875fdac2f4bdbd95710e_prof);

        
        $__internal_83f02c5cb321064870974752b4495e0921ff127d98494323daa58def90d93e86->leave($__internal_83f02c5cb321064870974752b4495e0921ff127d98494323daa58def90d93e86_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b51d500416b901b1d8287103e69e4d07230801d56cc5ddce449545cadf318cbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b51d500416b901b1d8287103e69e4d07230801d56cc5ddce449545cadf318cbc->enter($__internal_b51d500416b901b1d8287103e69e4d07230801d56cc5ddce449545cadf318cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a1d1c5851799306a9d5c7249160a34e24e25a286e2120fa684151b177745c783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1d1c5851799306a9d5c7249160a34e24e25a286e2120fa684151b177745c783->enter($__internal_a1d1c5851799306a9d5c7249160a34e24e25a286e2120fa684151b177745c783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_a1d1c5851799306a9d5c7249160a34e24e25a286e2120fa684151b177745c783->leave($__internal_a1d1c5851799306a9d5c7249160a34e24e25a286e2120fa684151b177745c783_prof);

        
        $__internal_b51d500416b901b1d8287103e69e4d07230801d56cc5ddce449545cadf318cbc->leave($__internal_b51d500416b901b1d8287103e69e4d07230801d56cc5ddce449545cadf318cbc_prof);

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
