<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_65855b5587c018146f18658020275c08006b3f3251a9456cbf9be9f4e55711b0 extends Twig_Template
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
        $__internal_2ded9be21728ce51beb5aa1687f8932070a9e2a206a8781757204f5aef3f2bf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ded9be21728ce51beb5aa1687f8932070a9e2a206a8781757204f5aef3f2bf0->enter($__internal_2ded9be21728ce51beb5aa1687f8932070a9e2a206a8781757204f5aef3f2bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_453fe3f7030fdb489b6ba6d7e31136d35c9be9020534121f59aa64f5cc0e5fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_453fe3f7030fdb489b6ba6d7e31136d35c9be9020534121f59aa64f5cc0e5fb7->enter($__internal_453fe3f7030fdb489b6ba6d7e31136d35c9be9020534121f59aa64f5cc0e5fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ded9be21728ce51beb5aa1687f8932070a9e2a206a8781757204f5aef3f2bf0->leave($__internal_2ded9be21728ce51beb5aa1687f8932070a9e2a206a8781757204f5aef3f2bf0_prof);

        
        $__internal_453fe3f7030fdb489b6ba6d7e31136d35c9be9020534121f59aa64f5cc0e5fb7->leave($__internal_453fe3f7030fdb489b6ba6d7e31136d35c9be9020534121f59aa64f5cc0e5fb7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5d3d7596761be3cbd0bb88d4cef0ccb5f6a69ef105d53bb49731894f7099f318 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d3d7596761be3cbd0bb88d4cef0ccb5f6a69ef105d53bb49731894f7099f318->enter($__internal_5d3d7596761be3cbd0bb88d4cef0ccb5f6a69ef105d53bb49731894f7099f318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c2d46a44e62485836524609fd34e13864acb0bd16e0b21bfd81e1e7dec2df7d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2d46a44e62485836524609fd34e13864acb0bd16e0b21bfd81e1e7dec2df7d2->enter($__internal_c2d46a44e62485836524609fd34e13864acb0bd16e0b21bfd81e1e7dec2df7d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_c2d46a44e62485836524609fd34e13864acb0bd16e0b21bfd81e1e7dec2df7d2->leave($__internal_c2d46a44e62485836524609fd34e13864acb0bd16e0b21bfd81e1e7dec2df7d2_prof);

        
        $__internal_5d3d7596761be3cbd0bb88d4cef0ccb5f6a69ef105d53bb49731894f7099f318->leave($__internal_5d3d7596761be3cbd0bb88d4cef0ccb5f6a69ef105d53bb49731894f7099f318_prof);

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
", "FOSUserBundle:Group:new.html.twig", "/var/www/html/geek-letters/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
