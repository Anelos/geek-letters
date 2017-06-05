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
        $__internal_ad5c834d9e0b9f0523a1656baf96e8e165182a7a72b85410833782e64a6ad24b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad5c834d9e0b9f0523a1656baf96e8e165182a7a72b85410833782e64a6ad24b->enter($__internal_ad5c834d9e0b9f0523a1656baf96e8e165182a7a72b85410833782e64a6ad24b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_e4f52edbd1a77f5fdcb3ff8a5ab49b261d60747bc96afe9fb503e9882375a58e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4f52edbd1a77f5fdcb3ff8a5ab49b261d60747bc96afe9fb503e9882375a58e->enter($__internal_e4f52edbd1a77f5fdcb3ff8a5ab49b261d60747bc96afe9fb503e9882375a58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad5c834d9e0b9f0523a1656baf96e8e165182a7a72b85410833782e64a6ad24b->leave($__internal_ad5c834d9e0b9f0523a1656baf96e8e165182a7a72b85410833782e64a6ad24b_prof);

        
        $__internal_e4f52edbd1a77f5fdcb3ff8a5ab49b261d60747bc96afe9fb503e9882375a58e->leave($__internal_e4f52edbd1a77f5fdcb3ff8a5ab49b261d60747bc96afe9fb503e9882375a58e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6250179b7c9e171fcd253c56a349e3b01294a12b355fdedae0e4642f5671f0c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6250179b7c9e171fcd253c56a349e3b01294a12b355fdedae0e4642f5671f0c6->enter($__internal_6250179b7c9e171fcd253c56a349e3b01294a12b355fdedae0e4642f5671f0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d02a8313e05b6f97274e796f1e11c7d1eb27b36e2fae8687203fa0fe661a772f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d02a8313e05b6f97274e796f1e11c7d1eb27b36e2fae8687203fa0fe661a772f->enter($__internal_d02a8313e05b6f97274e796f1e11c7d1eb27b36e2fae8687203fa0fe661a772f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_d02a8313e05b6f97274e796f1e11c7d1eb27b36e2fae8687203fa0fe661a772f->leave($__internal_d02a8313e05b6f97274e796f1e11c7d1eb27b36e2fae8687203fa0fe661a772f_prof);

        
        $__internal_6250179b7c9e171fcd253c56a349e3b01294a12b355fdedae0e4642f5671f0c6->leave($__internal_6250179b7c9e171fcd253c56a349e3b01294a12b355fdedae0e4642f5671f0c6_prof);

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
