<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_425e477f53f79490838371c4bed0894b6b209538c38387d83af71a90f17cf170 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_3cd937252d29b907d222f6449ba3d76180d2b0d01f411209adc9fd96d2538eb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cd937252d29b907d222f6449ba3d76180d2b0d01f411209adc9fd96d2538eb3->enter($__internal_3cd937252d29b907d222f6449ba3d76180d2b0d01f411209adc9fd96d2538eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_d7f75083035d9f09ef5f9c082980263250e4704c6b52b2a094d1ce6e24789d81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7f75083035d9f09ef5f9c082980263250e4704c6b52b2a094d1ce6e24789d81->enter($__internal_d7f75083035d9f09ef5f9c082980263250e4704c6b52b2a094d1ce6e24789d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cd937252d29b907d222f6449ba3d76180d2b0d01f411209adc9fd96d2538eb3->leave($__internal_3cd937252d29b907d222f6449ba3d76180d2b0d01f411209adc9fd96d2538eb3_prof);

        
        $__internal_d7f75083035d9f09ef5f9c082980263250e4704c6b52b2a094d1ce6e24789d81->leave($__internal_d7f75083035d9f09ef5f9c082980263250e4704c6b52b2a094d1ce6e24789d81_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2b41a0fdf01f2eebc601a85e1d65809ce09da6ba374044ed6311a3fc10e1eb2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b41a0fdf01f2eebc601a85e1d65809ce09da6ba374044ed6311a3fc10e1eb2b->enter($__internal_2b41a0fdf01f2eebc601a85e1d65809ce09da6ba374044ed6311a3fc10e1eb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0b4beccd4ef2b899e11c82c8af380b9501594edae3f177b009cd11094a1aab05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b4beccd4ef2b899e11c82c8af380b9501594edae3f177b009cd11094a1aab05->enter($__internal_0b4beccd4ef2b899e11c82c8af380b9501594edae3f177b009cd11094a1aab05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_0b4beccd4ef2b899e11c82c8af380b9501594edae3f177b009cd11094a1aab05->leave($__internal_0b4beccd4ef2b899e11c82c8af380b9501594edae3f177b009cd11094a1aab05_prof);

        
        $__internal_2b41a0fdf01f2eebc601a85e1d65809ce09da6ba374044ed6311a3fc10e1eb2b->leave($__internal_2b41a0fdf01f2eebc601a85e1d65809ce09da6ba374044ed6311a3fc10e1eb2b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/html/geek-letters/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
