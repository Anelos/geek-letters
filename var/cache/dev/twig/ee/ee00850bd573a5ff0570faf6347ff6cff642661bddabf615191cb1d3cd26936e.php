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
        $__internal_4c669d909bd11a6b6dd9a62082d9e2582edd65f503669e1d2a9e6716e3a47b58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c669d909bd11a6b6dd9a62082d9e2582edd65f503669e1d2a9e6716e3a47b58->enter($__internal_4c669d909bd11a6b6dd9a62082d9e2582edd65f503669e1d2a9e6716e3a47b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_d27a471b00573125a57acce3014b4adcc482a32860df7aded61a6502bca3e760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d27a471b00573125a57acce3014b4adcc482a32860df7aded61a6502bca3e760->enter($__internal_d27a471b00573125a57acce3014b4adcc482a32860df7aded61a6502bca3e760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c669d909bd11a6b6dd9a62082d9e2582edd65f503669e1d2a9e6716e3a47b58->leave($__internal_4c669d909bd11a6b6dd9a62082d9e2582edd65f503669e1d2a9e6716e3a47b58_prof);

        
        $__internal_d27a471b00573125a57acce3014b4adcc482a32860df7aded61a6502bca3e760->leave($__internal_d27a471b00573125a57acce3014b4adcc482a32860df7aded61a6502bca3e760_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_df1a875d178c8e901623c4d0ff01b944d6199004fba2f1fb19e47f93705d7c7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df1a875d178c8e901623c4d0ff01b944d6199004fba2f1fb19e47f93705d7c7b->enter($__internal_df1a875d178c8e901623c4d0ff01b944d6199004fba2f1fb19e47f93705d7c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0c6794426c560abfc3a9a6b3e99c049976d37899736bdc61ddec8b943e1950c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c6794426c560abfc3a9a6b3e99c049976d37899736bdc61ddec8b943e1950c4->enter($__internal_0c6794426c560abfc3a9a6b3e99c049976d37899736bdc61ddec8b943e1950c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_0c6794426c560abfc3a9a6b3e99c049976d37899736bdc61ddec8b943e1950c4->leave($__internal_0c6794426c560abfc3a9a6b3e99c049976d37899736bdc61ddec8b943e1950c4_prof);

        
        $__internal_df1a875d178c8e901623c4d0ff01b944d6199004fba2f1fb19e47f93705d7c7b->leave($__internal_df1a875d178c8e901623c4d0ff01b944d6199004fba2f1fb19e47f93705d7c7b_prof);

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
