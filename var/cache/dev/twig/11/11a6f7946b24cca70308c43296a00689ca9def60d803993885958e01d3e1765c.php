<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_cafeff1285b13766b9e7f1fa2cf80d1088fcbb37a9bab69587a37ab853a080b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_7124738a0d272f9e7da1023125bb3ada9c6d6e4bb2fe1a339591cf23227f435c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7124738a0d272f9e7da1023125bb3ada9c6d6e4bb2fe1a339591cf23227f435c->enter($__internal_7124738a0d272f9e7da1023125bb3ada9c6d6e4bb2fe1a339591cf23227f435c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_199587322eede7da114a9da179262deca7ef39c91ef4e665d817a0c614df7e2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_199587322eede7da114a9da179262deca7ef39c91ef4e665d817a0c614df7e2d->enter($__internal_199587322eede7da114a9da179262deca7ef39c91ef4e665d817a0c614df7e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7124738a0d272f9e7da1023125bb3ada9c6d6e4bb2fe1a339591cf23227f435c->leave($__internal_7124738a0d272f9e7da1023125bb3ada9c6d6e4bb2fe1a339591cf23227f435c_prof);

        
        $__internal_199587322eede7da114a9da179262deca7ef39c91ef4e665d817a0c614df7e2d->leave($__internal_199587322eede7da114a9da179262deca7ef39c91ef4e665d817a0c614df7e2d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bccec66d296a0d054e8a260c1053f189b59103274058ed834d878145d677a52a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bccec66d296a0d054e8a260c1053f189b59103274058ed834d878145d677a52a->enter($__internal_bccec66d296a0d054e8a260c1053f189b59103274058ed834d878145d677a52a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_23807f2554481e7d58d0c3ef762b9447cf47bc6023ab7e759e2ac79613d3d623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23807f2554481e7d58d0c3ef762b9447cf47bc6023ab7e759e2ac79613d3d623->enter($__internal_23807f2554481e7d58d0c3ef762b9447cf47bc6023ab7e759e2ac79613d3d623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_23807f2554481e7d58d0c3ef762b9447cf47bc6023ab7e759e2ac79613d3d623->leave($__internal_23807f2554481e7d58d0c3ef762b9447cf47bc6023ab7e759e2ac79613d3d623_prof);

        
        $__internal_bccec66d296a0d054e8a260c1053f189b59103274058ed834d878145d677a52a->leave($__internal_bccec66d296a0d054e8a260c1053f189b59103274058ed834d878145d677a52a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/html/geek-letters/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
