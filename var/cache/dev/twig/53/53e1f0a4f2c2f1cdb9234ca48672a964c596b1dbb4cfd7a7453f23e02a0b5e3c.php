<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_c0d652991680a46b7f2c3ab46c24b5cd20c4519c076d81f9fd2cd2f2670d7e2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_ad9b281839c79cab9b46ca52a54eb0dfcedc019e968df3bb64f93e86fc678fc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad9b281839c79cab9b46ca52a54eb0dfcedc019e968df3bb64f93e86fc678fc3->enter($__internal_ad9b281839c79cab9b46ca52a54eb0dfcedc019e968df3bb64f93e86fc678fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_ada87fac9b17c4300480362ef583eac76b10d8ecc58a08db020b94bb4cde86e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ada87fac9b17c4300480362ef583eac76b10d8ecc58a08db020b94bb4cde86e4->enter($__internal_ada87fac9b17c4300480362ef583eac76b10d8ecc58a08db020b94bb4cde86e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad9b281839c79cab9b46ca52a54eb0dfcedc019e968df3bb64f93e86fc678fc3->leave($__internal_ad9b281839c79cab9b46ca52a54eb0dfcedc019e968df3bb64f93e86fc678fc3_prof);

        
        $__internal_ada87fac9b17c4300480362ef583eac76b10d8ecc58a08db020b94bb4cde86e4->leave($__internal_ada87fac9b17c4300480362ef583eac76b10d8ecc58a08db020b94bb4cde86e4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_69213ef59ebe6510cf0e23b832758793548a47d2d6fb1b7df2c106bf71ad0a39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69213ef59ebe6510cf0e23b832758793548a47d2d6fb1b7df2c106bf71ad0a39->enter($__internal_69213ef59ebe6510cf0e23b832758793548a47d2d6fb1b7df2c106bf71ad0a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_02004fe7abb2ab20e144caf19877786222825d7271f7fcb27731b73a383a204d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02004fe7abb2ab20e144caf19877786222825d7271f7fcb27731b73a383a204d->enter($__internal_02004fe7abb2ab20e144caf19877786222825d7271f7fcb27731b73a383a204d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_02004fe7abb2ab20e144caf19877786222825d7271f7fcb27731b73a383a204d->leave($__internal_02004fe7abb2ab20e144caf19877786222825d7271f7fcb27731b73a383a204d_prof);

        
        $__internal_69213ef59ebe6510cf0e23b832758793548a47d2d6fb1b7df2c106bf71ad0a39->leave($__internal_69213ef59ebe6510cf0e23b832758793548a47d2d6fb1b7df2c106bf71ad0a39_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/html/geek-letters/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
