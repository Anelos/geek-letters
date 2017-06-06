<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_5105f7cfb12b3952b03faa55cc85d9b7932662c7158f202a4fde715d8057924f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_056a51f60bdbe121f7b2f4fa684a3a1c996186cdb4378b304305645b85f1c9b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_056a51f60bdbe121f7b2f4fa684a3a1c996186cdb4378b304305645b85f1c9b6->enter($__internal_056a51f60bdbe121f7b2f4fa684a3a1c996186cdb4378b304305645b85f1c9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_c41a3680078e6f80fa388d41df79053905161adf0e9f2358d2bf119cd66d53f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c41a3680078e6f80fa388d41df79053905161adf0e9f2358d2bf119cd66d53f7->enter($__internal_c41a3680078e6f80fa388d41df79053905161adf0e9f2358d2bf119cd66d53f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_056a51f60bdbe121f7b2f4fa684a3a1c996186cdb4378b304305645b85f1c9b6->leave($__internal_056a51f60bdbe121f7b2f4fa684a3a1c996186cdb4378b304305645b85f1c9b6_prof);

        
        $__internal_c41a3680078e6f80fa388d41df79053905161adf0e9f2358d2bf119cd66d53f7->leave($__internal_c41a3680078e6f80fa388d41df79053905161adf0e9f2358d2bf119cd66d53f7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_591ee72da4e42263b5d6a2d01547921f2a6f399ae725744a43a1cdac28e347d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_591ee72da4e42263b5d6a2d01547921f2a6f399ae725744a43a1cdac28e347d0->enter($__internal_591ee72da4e42263b5d6a2d01547921f2a6f399ae725744a43a1cdac28e347d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c37c33f44d10d0ccb48a5151fe3d4ad490ac7e1103ae28226f042d14cbcd07e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c37c33f44d10d0ccb48a5151fe3d4ad490ac7e1103ae28226f042d14cbcd07e3->enter($__internal_c37c33f44d10d0ccb48a5151fe3d4ad490ac7e1103ae28226f042d14cbcd07e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_c37c33f44d10d0ccb48a5151fe3d4ad490ac7e1103ae28226f042d14cbcd07e3->leave($__internal_c37c33f44d10d0ccb48a5151fe3d4ad490ac7e1103ae28226f042d14cbcd07e3_prof);

        
        $__internal_591ee72da4e42263b5d6a2d01547921f2a6f399ae725744a43a1cdac28e347d0->leave($__internal_591ee72da4e42263b5d6a2d01547921f2a6f399ae725744a43a1cdac28e347d0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/var/www/html/geek-letters/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
