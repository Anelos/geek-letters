<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_95d2246a9b3f41614f21e86da6a7e4b6c465e4ef7d207f438153bd444f27429c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_e632f6a73ee45666fc44f391a1fceb0df08b42ca35d325237d391cf16393da36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e632f6a73ee45666fc44f391a1fceb0df08b42ca35d325237d391cf16393da36->enter($__internal_e632f6a73ee45666fc44f391a1fceb0df08b42ca35d325237d391cf16393da36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_8070414bc2e6c7ebf795e19e8cf97f0525fca3fe082bf8c0f19918086ec17e0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8070414bc2e6c7ebf795e19e8cf97f0525fca3fe082bf8c0f19918086ec17e0a->enter($__internal_8070414bc2e6c7ebf795e19e8cf97f0525fca3fe082bf8c0f19918086ec17e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e632f6a73ee45666fc44f391a1fceb0df08b42ca35d325237d391cf16393da36->leave($__internal_e632f6a73ee45666fc44f391a1fceb0df08b42ca35d325237d391cf16393da36_prof);

        
        $__internal_8070414bc2e6c7ebf795e19e8cf97f0525fca3fe082bf8c0f19918086ec17e0a->leave($__internal_8070414bc2e6c7ebf795e19e8cf97f0525fca3fe082bf8c0f19918086ec17e0a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9b08ec76bd7e45238103e842e9340c4711667435ca2dba88be8867612811c9ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b08ec76bd7e45238103e842e9340c4711667435ca2dba88be8867612811c9ea->enter($__internal_9b08ec76bd7e45238103e842e9340c4711667435ca2dba88be8867612811c9ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_86ac1dc4adb87cffbf66a6d396bf5d46e59a63c389b8fe3fea612a10e6559e48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86ac1dc4adb87cffbf66a6d396bf5d46e59a63c389b8fe3fea612a10e6559e48->enter($__internal_86ac1dc4adb87cffbf66a6d396bf5d46e59a63c389b8fe3fea612a10e6559e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_86ac1dc4adb87cffbf66a6d396bf5d46e59a63c389b8fe3fea612a10e6559e48->leave($__internal_86ac1dc4adb87cffbf66a6d396bf5d46e59a63c389b8fe3fea612a10e6559e48_prof);

        
        $__internal_9b08ec76bd7e45238103e842e9340c4711667435ca2dba88be8867612811c9ea->leave($__internal_9b08ec76bd7e45238103e842e9340c4711667435ca2dba88be8867612811c9ea_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/html/geek-letters/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
