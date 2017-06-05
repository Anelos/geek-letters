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
        $__internal_9d31e91eb5512989d4e6a92e6c7bc873dcc5b8395a54e63cf8c19ef3e2c441e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d31e91eb5512989d4e6a92e6c7bc873dcc5b8395a54e63cf8c19ef3e2c441e8->enter($__internal_9d31e91eb5512989d4e6a92e6c7bc873dcc5b8395a54e63cf8c19ef3e2c441e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_60a2d007b6c14cb45582b347f9698555f970a5f11bcc399db835b5a1bed43312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60a2d007b6c14cb45582b347f9698555f970a5f11bcc399db835b5a1bed43312->enter($__internal_60a2d007b6c14cb45582b347f9698555f970a5f11bcc399db835b5a1bed43312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d31e91eb5512989d4e6a92e6c7bc873dcc5b8395a54e63cf8c19ef3e2c441e8->leave($__internal_9d31e91eb5512989d4e6a92e6c7bc873dcc5b8395a54e63cf8c19ef3e2c441e8_prof);

        
        $__internal_60a2d007b6c14cb45582b347f9698555f970a5f11bcc399db835b5a1bed43312->leave($__internal_60a2d007b6c14cb45582b347f9698555f970a5f11bcc399db835b5a1bed43312_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6989c387c07c74fd9d4f9b2d1e2338f0c430dc2cd9aa6bd41e0388bd7590251a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6989c387c07c74fd9d4f9b2d1e2338f0c430dc2cd9aa6bd41e0388bd7590251a->enter($__internal_6989c387c07c74fd9d4f9b2d1e2338f0c430dc2cd9aa6bd41e0388bd7590251a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b728f035f3667fd711620ff94d4aa528dd5a4f8fb9a1a1399d3eabaad071b8fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b728f035f3667fd711620ff94d4aa528dd5a4f8fb9a1a1399d3eabaad071b8fb->enter($__internal_b728f035f3667fd711620ff94d4aa528dd5a4f8fb9a1a1399d3eabaad071b8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_b728f035f3667fd711620ff94d4aa528dd5a4f8fb9a1a1399d3eabaad071b8fb->leave($__internal_b728f035f3667fd711620ff94d4aa528dd5a4f8fb9a1a1399d3eabaad071b8fb_prof);

        
        $__internal_6989c387c07c74fd9d4f9b2d1e2338f0c430dc2cd9aa6bd41e0388bd7590251a->leave($__internal_6989c387c07c74fd9d4f9b2d1e2338f0c430dc2cd9aa6bd41e0388bd7590251a_prof);

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
