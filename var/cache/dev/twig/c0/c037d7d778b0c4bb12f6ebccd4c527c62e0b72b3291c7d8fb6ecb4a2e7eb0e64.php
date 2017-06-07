<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_8447bf2a1d23150105bc55fbd55cd9301c9f1d2f62eeb006848cc45fe4c4267b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_ab48c62f883a7991cc5477f304ddacabe115ff18f3d86fd042f9ef71ac59f75a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab48c62f883a7991cc5477f304ddacabe115ff18f3d86fd042f9ef71ac59f75a->enter($__internal_ab48c62f883a7991cc5477f304ddacabe115ff18f3d86fd042f9ef71ac59f75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_38d3a5191f1f76bc824e57b7f02fe0910ff9bfd2b6f222d1ea60a62d1e3e732a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38d3a5191f1f76bc824e57b7f02fe0910ff9bfd2b6f222d1ea60a62d1e3e732a->enter($__internal_38d3a5191f1f76bc824e57b7f02fe0910ff9bfd2b6f222d1ea60a62d1e3e732a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab48c62f883a7991cc5477f304ddacabe115ff18f3d86fd042f9ef71ac59f75a->leave($__internal_ab48c62f883a7991cc5477f304ddacabe115ff18f3d86fd042f9ef71ac59f75a_prof);

        
        $__internal_38d3a5191f1f76bc824e57b7f02fe0910ff9bfd2b6f222d1ea60a62d1e3e732a->leave($__internal_38d3a5191f1f76bc824e57b7f02fe0910ff9bfd2b6f222d1ea60a62d1e3e732a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_065f6ee982e038dd206a37e7038a16cf5edef9e0b196dee7b7015e9dc0bc82c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_065f6ee982e038dd206a37e7038a16cf5edef9e0b196dee7b7015e9dc0bc82c4->enter($__internal_065f6ee982e038dd206a37e7038a16cf5edef9e0b196dee7b7015e9dc0bc82c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8fdef95a86508e7002e1b2e9922444c52971078b27d9cc85daf13dbc71e3c5f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fdef95a86508e7002e1b2e9922444c52971078b27d9cc85daf13dbc71e3c5f7->enter($__internal_8fdef95a86508e7002e1b2e9922444c52971078b27d9cc85daf13dbc71e3c5f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_8fdef95a86508e7002e1b2e9922444c52971078b27d9cc85daf13dbc71e3c5f7->leave($__internal_8fdef95a86508e7002e1b2e9922444c52971078b27d9cc85daf13dbc71e3c5f7_prof);

        
        $__internal_065f6ee982e038dd206a37e7038a16cf5edef9e0b196dee7b7015e9dc0bc82c4->leave($__internal_065f6ee982e038dd206a37e7038a16cf5edef9e0b196dee7b7015e9dc0bc82c4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/var/www/html/geek-letters/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
