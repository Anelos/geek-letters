<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_7f38e7e7819592eff5e8b644cc611116b78e00c300788443293ba8ef4f468a1e extends Twig_Template
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
        $__internal_a70e7e937b4de18da3a45b5ca516a9e74660e774705d054292d9ff281f9321b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a70e7e937b4de18da3a45b5ca516a9e74660e774705d054292d9ff281f9321b7->enter($__internal_a70e7e937b4de18da3a45b5ca516a9e74660e774705d054292d9ff281f9321b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_19d29dace953968a91caf89091be83f473c0a2215a1bb8a96f9a377215c6111b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19d29dace953968a91caf89091be83f473c0a2215a1bb8a96f9a377215c6111b->enter($__internal_19d29dace953968a91caf89091be83f473c0a2215a1bb8a96f9a377215c6111b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a70e7e937b4de18da3a45b5ca516a9e74660e774705d054292d9ff281f9321b7->leave($__internal_a70e7e937b4de18da3a45b5ca516a9e74660e774705d054292d9ff281f9321b7_prof);

        
        $__internal_19d29dace953968a91caf89091be83f473c0a2215a1bb8a96f9a377215c6111b->leave($__internal_19d29dace953968a91caf89091be83f473c0a2215a1bb8a96f9a377215c6111b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ec4fb07c9649981714171bc78eec9a18c1b800e43a713ed6d86786cccb035c90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec4fb07c9649981714171bc78eec9a18c1b800e43a713ed6d86786cccb035c90->enter($__internal_ec4fb07c9649981714171bc78eec9a18c1b800e43a713ed6d86786cccb035c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a41a7d7c202169d2907c3b5da3937f3d15b2222444cbf24dc2a2cd89e178fbaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a41a7d7c202169d2907c3b5da3937f3d15b2222444cbf24dc2a2cd89e178fbaf->enter($__internal_a41a7d7c202169d2907c3b5da3937f3d15b2222444cbf24dc2a2cd89e178fbaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_a41a7d7c202169d2907c3b5da3937f3d15b2222444cbf24dc2a2cd89e178fbaf->leave($__internal_a41a7d7c202169d2907c3b5da3937f3d15b2222444cbf24dc2a2cd89e178fbaf_prof);

        
        $__internal_ec4fb07c9649981714171bc78eec9a18c1b800e43a713ed6d86786cccb035c90->leave($__internal_ec4fb07c9649981714171bc78eec9a18c1b800e43a713ed6d86786cccb035c90_prof);

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
", "FOSUserBundle:Registration:register.html.twig", "/var/www/html/geek-letters/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
