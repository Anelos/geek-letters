<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_637a11590c310f7188f224152d927f1337fa5bb20e7b5e34b457b0d3a7666c9a extends Twig_Template
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
        $__internal_0753b9b1190605fb4def03c103c10cb5de5c403bee6e29e03334db571eb8cea5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0753b9b1190605fb4def03c103c10cb5de5c403bee6e29e03334db571eb8cea5->enter($__internal_0753b9b1190605fb4def03c103c10cb5de5c403bee6e29e03334db571eb8cea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_31aa3fd42c857eade683c8a52e7c964b236e57902387e431955be453725519f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31aa3fd42c857eade683c8a52e7c964b236e57902387e431955be453725519f2->enter($__internal_31aa3fd42c857eade683c8a52e7c964b236e57902387e431955be453725519f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0753b9b1190605fb4def03c103c10cb5de5c403bee6e29e03334db571eb8cea5->leave($__internal_0753b9b1190605fb4def03c103c10cb5de5c403bee6e29e03334db571eb8cea5_prof);

        
        $__internal_31aa3fd42c857eade683c8a52e7c964b236e57902387e431955be453725519f2->leave($__internal_31aa3fd42c857eade683c8a52e7c964b236e57902387e431955be453725519f2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bb936be0456e29631a5d50508d447740e437ebb0b25b9d4f25353d72c0f0f297 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb936be0456e29631a5d50508d447740e437ebb0b25b9d4f25353d72c0f0f297->enter($__internal_bb936be0456e29631a5d50508d447740e437ebb0b25b9d4f25353d72c0f0f297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f996dfbb382148d6bf5e8a9cec070d8eed006112f6b012560460a6f15f741900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f996dfbb382148d6bf5e8a9cec070d8eed006112f6b012560460a6f15f741900->enter($__internal_f996dfbb382148d6bf5e8a9cec070d8eed006112f6b012560460a6f15f741900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_f996dfbb382148d6bf5e8a9cec070d8eed006112f6b012560460a6f15f741900->leave($__internal_f996dfbb382148d6bf5e8a9cec070d8eed006112f6b012560460a6f15f741900_prof);

        
        $__internal_bb936be0456e29631a5d50508d447740e437ebb0b25b9d4f25353d72c0f0f297->leave($__internal_bb936be0456e29631a5d50508d447740e437ebb0b25b9d4f25353d72c0f0f297_prof);

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
", "FOSUserBundle:Security:login.html.twig", "/var/www/html/geek-letters/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
