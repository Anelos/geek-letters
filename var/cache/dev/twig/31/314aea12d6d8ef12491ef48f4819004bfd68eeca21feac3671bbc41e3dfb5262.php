<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_147c95c450eee32d79bfca60c2099f6a2cce374204abd8dc2047bfe53f43031b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_45f8ee939b328d30015f2a6845941ae438fde59c62169a3a40ce35474f8906de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45f8ee939b328d30015f2a6845941ae438fde59c62169a3a40ce35474f8906de->enter($__internal_45f8ee939b328d30015f2a6845941ae438fde59c62169a3a40ce35474f8906de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_be74f70a4c761e300d4576213e3069cf48a156819c809b2fcf5e49ee2cd6c536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be74f70a4c761e300d4576213e3069cf48a156819c809b2fcf5e49ee2cd6c536->enter($__internal_be74f70a4c761e300d4576213e3069cf48a156819c809b2fcf5e49ee2cd6c536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45f8ee939b328d30015f2a6845941ae438fde59c62169a3a40ce35474f8906de->leave($__internal_45f8ee939b328d30015f2a6845941ae438fde59c62169a3a40ce35474f8906de_prof);

        
        $__internal_be74f70a4c761e300d4576213e3069cf48a156819c809b2fcf5e49ee2cd6c536->leave($__internal_be74f70a4c761e300d4576213e3069cf48a156819c809b2fcf5e49ee2cd6c536_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_42ad5d07aab9576f2042443ebcecc3905d2eb9bfe56a68e09aa7c19ac18f7c69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42ad5d07aab9576f2042443ebcecc3905d2eb9bfe56a68e09aa7c19ac18f7c69->enter($__internal_42ad5d07aab9576f2042443ebcecc3905d2eb9bfe56a68e09aa7c19ac18f7c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5cbe1aeac457114f81eeeeb901d4dd0a671b3be763c01c0806988bfd119ff085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cbe1aeac457114f81eeeeb901d4dd0a671b3be763c01c0806988bfd119ff085->enter($__internal_5cbe1aeac457114f81eeeeb901d4dd0a671b3be763c01c0806988bfd119ff085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_5cbe1aeac457114f81eeeeb901d4dd0a671b3be763c01c0806988bfd119ff085->leave($__internal_5cbe1aeac457114f81eeeeb901d4dd0a671b3be763c01c0806988bfd119ff085_prof);

        
        $__internal_42ad5d07aab9576f2042443ebcecc3905d2eb9bfe56a68e09aa7c19ac18f7c69->leave($__internal_42ad5d07aab9576f2042443ebcecc3905d2eb9bfe56a68e09aa7c19ac18f7c69_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/html/geek-letters/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
