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
        $__internal_c13c9bfd97476c5f49514b935eda52f2c92fd96420b166fea548cc10ac6a970c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c13c9bfd97476c5f49514b935eda52f2c92fd96420b166fea548cc10ac6a970c->enter($__internal_c13c9bfd97476c5f49514b935eda52f2c92fd96420b166fea548cc10ac6a970c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_81ce3868c6b3a636155505c8b7c862d3ed764c826a6cc1128297a1776f16d0d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81ce3868c6b3a636155505c8b7c862d3ed764c826a6cc1128297a1776f16d0d5->enter($__internal_81ce3868c6b3a636155505c8b7c862d3ed764c826a6cc1128297a1776f16d0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c13c9bfd97476c5f49514b935eda52f2c92fd96420b166fea548cc10ac6a970c->leave($__internal_c13c9bfd97476c5f49514b935eda52f2c92fd96420b166fea548cc10ac6a970c_prof);

        
        $__internal_81ce3868c6b3a636155505c8b7c862d3ed764c826a6cc1128297a1776f16d0d5->leave($__internal_81ce3868c6b3a636155505c8b7c862d3ed764c826a6cc1128297a1776f16d0d5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e7099757929bab1f8c337555bb15531280a291d0511f3280d609897e459fc5d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7099757929bab1f8c337555bb15531280a291d0511f3280d609897e459fc5d4->enter($__internal_e7099757929bab1f8c337555bb15531280a291d0511f3280d609897e459fc5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_041c0411a1cd9890da7cdd8ce5020258c78eff9928cad013537e660884d629fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_041c0411a1cd9890da7cdd8ce5020258c78eff9928cad013537e660884d629fc->enter($__internal_041c0411a1cd9890da7cdd8ce5020258c78eff9928cad013537e660884d629fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_041c0411a1cd9890da7cdd8ce5020258c78eff9928cad013537e660884d629fc->leave($__internal_041c0411a1cd9890da7cdd8ce5020258c78eff9928cad013537e660884d629fc_prof);

        
        $__internal_e7099757929bab1f8c337555bb15531280a291d0511f3280d609897e459fc5d4->leave($__internal_e7099757929bab1f8c337555bb15531280a291d0511f3280d609897e459fc5d4_prof);

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
