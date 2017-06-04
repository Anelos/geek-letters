<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_f21ecd8de744247d9d758d26dd41c3340f442a982aa380cb783486cab736d6e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_043c0069e3397f8015ecad7755134bdd5318eb3671d16d6806b6f51cb7e46ed6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_043c0069e3397f8015ecad7755134bdd5318eb3671d16d6806b6f51cb7e46ed6->enter($__internal_043c0069e3397f8015ecad7755134bdd5318eb3671d16d6806b6f51cb7e46ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_72657479c3fbae3dd5d0a1fb8f50c3cdd8f8f8b3fd8beb9452523ab0d5a02f3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72657479c3fbae3dd5d0a1fb8f50c3cdd8f8f8b3fd8beb9452523ab0d5a02f3f->enter($__internal_72657479c3fbae3dd5d0a1fb8f50c3cdd8f8f8b3fd8beb9452523ab0d5a02f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_043c0069e3397f8015ecad7755134bdd5318eb3671d16d6806b6f51cb7e46ed6->leave($__internal_043c0069e3397f8015ecad7755134bdd5318eb3671d16d6806b6f51cb7e46ed6_prof);

        
        $__internal_72657479c3fbae3dd5d0a1fb8f50c3cdd8f8f8b3fd8beb9452523ab0d5a02f3f->leave($__internal_72657479c3fbae3dd5d0a1fb8f50c3cdd8f8f8b3fd8beb9452523ab0d5a02f3f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a665dbe9191fdd76a95d5ce908ee35e71147aa0edb503cd6f9a7e531deb711c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a665dbe9191fdd76a95d5ce908ee35e71147aa0edb503cd6f9a7e531deb711c5->enter($__internal_a665dbe9191fdd76a95d5ce908ee35e71147aa0edb503cd6f9a7e531deb711c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ec5549a9287393db49c9a78386346e6e39cc0cb3f2669fcff650e43251a0ec74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec5549a9287393db49c9a78386346e6e39cc0cb3f2669fcff650e43251a0ec74->enter($__internal_ec5549a9287393db49c9a78386346e6e39cc0cb3f2669fcff650e43251a0ec74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_ec5549a9287393db49c9a78386346e6e39cc0cb3f2669fcff650e43251a0ec74->leave($__internal_ec5549a9287393db49c9a78386346e6e39cc0cb3f2669fcff650e43251a0ec74_prof);

        
        $__internal_a665dbe9191fdd76a95d5ce908ee35e71147aa0edb503cd6f9a7e531deb711c5->leave($__internal_a665dbe9191fdd76a95d5ce908ee35e71147aa0edb503cd6f9a7e531deb711c5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/html/geek-letters/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
