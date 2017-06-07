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
        $__internal_9ace026da713ee9211a2bc66a9830449eef3ee6b29e4a7284c971a8ee45d4d3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ace026da713ee9211a2bc66a9830449eef3ee6b29e4a7284c971a8ee45d4d3f->enter($__internal_9ace026da713ee9211a2bc66a9830449eef3ee6b29e4a7284c971a8ee45d4d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_22a3f2fc661e848330f59a9cd0ca7a3deeddf9499201b521aa52ae3f7df0c706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22a3f2fc661e848330f59a9cd0ca7a3deeddf9499201b521aa52ae3f7df0c706->enter($__internal_22a3f2fc661e848330f59a9cd0ca7a3deeddf9499201b521aa52ae3f7df0c706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ace026da713ee9211a2bc66a9830449eef3ee6b29e4a7284c971a8ee45d4d3f->leave($__internal_9ace026da713ee9211a2bc66a9830449eef3ee6b29e4a7284c971a8ee45d4d3f_prof);

        
        $__internal_22a3f2fc661e848330f59a9cd0ca7a3deeddf9499201b521aa52ae3f7df0c706->leave($__internal_22a3f2fc661e848330f59a9cd0ca7a3deeddf9499201b521aa52ae3f7df0c706_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_964209e209ad6502d3654f178590a0a529aeb72071b5ae2be2295b919e32fb0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_964209e209ad6502d3654f178590a0a529aeb72071b5ae2be2295b919e32fb0e->enter($__internal_964209e209ad6502d3654f178590a0a529aeb72071b5ae2be2295b919e32fb0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f62acefb007067ab0ec0ba2cdc34c1635a5aafc02b5559282c2e704584fd9381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f62acefb007067ab0ec0ba2cdc34c1635a5aafc02b5559282c2e704584fd9381->enter($__internal_f62acefb007067ab0ec0ba2cdc34c1635a5aafc02b5559282c2e704584fd9381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_f62acefb007067ab0ec0ba2cdc34c1635a5aafc02b5559282c2e704584fd9381->leave($__internal_f62acefb007067ab0ec0ba2cdc34c1635a5aafc02b5559282c2e704584fd9381_prof);

        
        $__internal_964209e209ad6502d3654f178590a0a529aeb72071b5ae2be2295b919e32fb0e->leave($__internal_964209e209ad6502d3654f178590a0a529aeb72071b5ae2be2295b919e32fb0e_prof);

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
