<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_16a1cabf4508296f015c445647fad6b7887126e726fa8ba8449e54074e2ea9a6 extends Twig_Template
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
        $__internal_ec8c6b1e6e30347668597030a4bcb7a5d75decfdd9c1917ab45b950896c2ea45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec8c6b1e6e30347668597030a4bcb7a5d75decfdd9c1917ab45b950896c2ea45->enter($__internal_ec8c6b1e6e30347668597030a4bcb7a5d75decfdd9c1917ab45b950896c2ea45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_114b832d73f5e3ca23b7fe28dbd0d21fedfe2946c92ea0f3d8d90cd801fdaaba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_114b832d73f5e3ca23b7fe28dbd0d21fedfe2946c92ea0f3d8d90cd801fdaaba->enter($__internal_114b832d73f5e3ca23b7fe28dbd0d21fedfe2946c92ea0f3d8d90cd801fdaaba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec8c6b1e6e30347668597030a4bcb7a5d75decfdd9c1917ab45b950896c2ea45->leave($__internal_ec8c6b1e6e30347668597030a4bcb7a5d75decfdd9c1917ab45b950896c2ea45_prof);

        
        $__internal_114b832d73f5e3ca23b7fe28dbd0d21fedfe2946c92ea0f3d8d90cd801fdaaba->leave($__internal_114b832d73f5e3ca23b7fe28dbd0d21fedfe2946c92ea0f3d8d90cd801fdaaba_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a7559bb395f46bee9f5390d780ac73418b3b1e54d8a36e7825e83a297bc61e90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7559bb395f46bee9f5390d780ac73418b3b1e54d8a36e7825e83a297bc61e90->enter($__internal_a7559bb395f46bee9f5390d780ac73418b3b1e54d8a36e7825e83a297bc61e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f7e68d83b8c0c07ac56a5c7554862e1dd0c86a591ef402299ee79759f05d1dcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e68d83b8c0c07ac56a5c7554862e1dd0c86a591ef402299ee79759f05d1dcf->enter($__internal_f7e68d83b8c0c07ac56a5c7554862e1dd0c86a591ef402299ee79759f05d1dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_f7e68d83b8c0c07ac56a5c7554862e1dd0c86a591ef402299ee79759f05d1dcf->leave($__internal_f7e68d83b8c0c07ac56a5c7554862e1dd0c86a591ef402299ee79759f05d1dcf_prof);

        
        $__internal_a7559bb395f46bee9f5390d780ac73418b3b1e54d8a36e7825e83a297bc61e90->leave($__internal_a7559bb395f46bee9f5390d780ac73418b3b1e54d8a36e7825e83a297bc61e90_prof);

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
