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
        $__internal_57269d8e08e9fbaf75fede44c8d8edd7b42f1166ffed1ccadbd8c868ab55148a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57269d8e08e9fbaf75fede44c8d8edd7b42f1166ffed1ccadbd8c868ab55148a->enter($__internal_57269d8e08e9fbaf75fede44c8d8edd7b42f1166ffed1ccadbd8c868ab55148a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_781818352aa4de41e0d0c01650c50499588528f1d1f603b411b0d4ac40193c02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_781818352aa4de41e0d0c01650c50499588528f1d1f603b411b0d4ac40193c02->enter($__internal_781818352aa4de41e0d0c01650c50499588528f1d1f603b411b0d4ac40193c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57269d8e08e9fbaf75fede44c8d8edd7b42f1166ffed1ccadbd8c868ab55148a->leave($__internal_57269d8e08e9fbaf75fede44c8d8edd7b42f1166ffed1ccadbd8c868ab55148a_prof);

        
        $__internal_781818352aa4de41e0d0c01650c50499588528f1d1f603b411b0d4ac40193c02->leave($__internal_781818352aa4de41e0d0c01650c50499588528f1d1f603b411b0d4ac40193c02_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_94d9ab82180b2c585b9925d192aeb008a71896086ff1015b47eb4d3e6fd9e5bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94d9ab82180b2c585b9925d192aeb008a71896086ff1015b47eb4d3e6fd9e5bc->enter($__internal_94d9ab82180b2c585b9925d192aeb008a71896086ff1015b47eb4d3e6fd9e5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_98012656237ad0835f7914327a9cad45e78315c23b97b9a90b6c9f6af1141b0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98012656237ad0835f7914327a9cad45e78315c23b97b9a90b6c9f6af1141b0d->enter($__internal_98012656237ad0835f7914327a9cad45e78315c23b97b9a90b6c9f6af1141b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_98012656237ad0835f7914327a9cad45e78315c23b97b9a90b6c9f6af1141b0d->leave($__internal_98012656237ad0835f7914327a9cad45e78315c23b97b9a90b6c9f6af1141b0d_prof);

        
        $__internal_94d9ab82180b2c585b9925d192aeb008a71896086ff1015b47eb4d3e6fd9e5bc->leave($__internal_94d9ab82180b2c585b9925d192aeb008a71896086ff1015b47eb4d3e6fd9e5bc_prof);

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
