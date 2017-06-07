<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_7bbb6160481602fb0f3cb48834e9c0f60284eb6aa27c91d5a61f078879a8c3de extends Twig_Template
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
        $__internal_0eb64ec4082bd31845c61cc416af171178207b1cb2b6bc35dfdcf7a1cd1898e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eb64ec4082bd31845c61cc416af171178207b1cb2b6bc35dfdcf7a1cd1898e0->enter($__internal_0eb64ec4082bd31845c61cc416af171178207b1cb2b6bc35dfdcf7a1cd1898e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_fd6a266f901583ca776ad333a88bb4f77d504c3156ebda161ee2e417894feae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd6a266f901583ca776ad333a88bb4f77d504c3156ebda161ee2e417894feae1->enter($__internal_fd6a266f901583ca776ad333a88bb4f77d504c3156ebda161ee2e417894feae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0eb64ec4082bd31845c61cc416af171178207b1cb2b6bc35dfdcf7a1cd1898e0->leave($__internal_0eb64ec4082bd31845c61cc416af171178207b1cb2b6bc35dfdcf7a1cd1898e0_prof);

        
        $__internal_fd6a266f901583ca776ad333a88bb4f77d504c3156ebda161ee2e417894feae1->leave($__internal_fd6a266f901583ca776ad333a88bb4f77d504c3156ebda161ee2e417894feae1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7b08ce45dc0136951dd0af0f24e6dd0686f0dd31d564a629b268173dd8c6b9d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b08ce45dc0136951dd0af0f24e6dd0686f0dd31d564a629b268173dd8c6b9d4->enter($__internal_7b08ce45dc0136951dd0af0f24e6dd0686f0dd31d564a629b268173dd8c6b9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9e160ad285ccf9384e1c778f1619b78f6373c472328422b942513b665c7b13d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e160ad285ccf9384e1c778f1619b78f6373c472328422b942513b665c7b13d8->enter($__internal_9e160ad285ccf9384e1c778f1619b78f6373c472328422b942513b665c7b13d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_9e160ad285ccf9384e1c778f1619b78f6373c472328422b942513b665c7b13d8->leave($__internal_9e160ad285ccf9384e1c778f1619b78f6373c472328422b942513b665c7b13d8_prof);

        
        $__internal_7b08ce45dc0136951dd0af0f24e6dd0686f0dd31d564a629b268173dd8c6b9d4->leave($__internal_7b08ce45dc0136951dd0af0f24e6dd0686f0dd31d564a629b268173dd8c6b9d4_prof);

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
", "FOSUserBundle:Group:new.html.twig", "/var/www/html/geek-letters/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
