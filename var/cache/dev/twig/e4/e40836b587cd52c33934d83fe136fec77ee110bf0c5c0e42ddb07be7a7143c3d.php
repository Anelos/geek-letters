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
        $__internal_7e1d3f1c22c4d248d892334bed680188a479b00f25b513fd49f7b6f170f8b993 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e1d3f1c22c4d248d892334bed680188a479b00f25b513fd49f7b6f170f8b993->enter($__internal_7e1d3f1c22c4d248d892334bed680188a479b00f25b513fd49f7b6f170f8b993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_68dcff0e34d39a2947c0073d4fd018609d65cf8d6a17a1a44f1a0b7c7e366b04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68dcff0e34d39a2947c0073d4fd018609d65cf8d6a17a1a44f1a0b7c7e366b04->enter($__internal_68dcff0e34d39a2947c0073d4fd018609d65cf8d6a17a1a44f1a0b7c7e366b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e1d3f1c22c4d248d892334bed680188a479b00f25b513fd49f7b6f170f8b993->leave($__internal_7e1d3f1c22c4d248d892334bed680188a479b00f25b513fd49f7b6f170f8b993_prof);

        
        $__internal_68dcff0e34d39a2947c0073d4fd018609d65cf8d6a17a1a44f1a0b7c7e366b04->leave($__internal_68dcff0e34d39a2947c0073d4fd018609d65cf8d6a17a1a44f1a0b7c7e366b04_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6943a3cceed572aa27826d8a972b5eeed56721c3035bce3a3dedd31f45bd9f61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6943a3cceed572aa27826d8a972b5eeed56721c3035bce3a3dedd31f45bd9f61->enter($__internal_6943a3cceed572aa27826d8a972b5eeed56721c3035bce3a3dedd31f45bd9f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d957525c81aa26f0c0c494ff733a14be063ef33e972d47b4bb0df05f9127ef44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d957525c81aa26f0c0c494ff733a14be063ef33e972d47b4bb0df05f9127ef44->enter($__internal_d957525c81aa26f0c0c494ff733a14be063ef33e972d47b4bb0df05f9127ef44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_d957525c81aa26f0c0c494ff733a14be063ef33e972d47b4bb0df05f9127ef44->leave($__internal_d957525c81aa26f0c0c494ff733a14be063ef33e972d47b4bb0df05f9127ef44_prof);

        
        $__internal_6943a3cceed572aa27826d8a972b5eeed56721c3035bce3a3dedd31f45bd9f61->leave($__internal_6943a3cceed572aa27826d8a972b5eeed56721c3035bce3a3dedd31f45bd9f61_prof);

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
