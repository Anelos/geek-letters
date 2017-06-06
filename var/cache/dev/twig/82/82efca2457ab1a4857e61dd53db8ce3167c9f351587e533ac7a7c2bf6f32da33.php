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
        $__internal_4a9a786ae9d64d24278dff594ced3812ef9ffec59f29d9ece538dad615faca27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a9a786ae9d64d24278dff594ced3812ef9ffec59f29d9ece538dad615faca27->enter($__internal_4a9a786ae9d64d24278dff594ced3812ef9ffec59f29d9ece538dad615faca27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_76fea5ed1194d6aa2b840422a90a3824bd4b8875bd54b4be4f6bfe384be6020c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76fea5ed1194d6aa2b840422a90a3824bd4b8875bd54b4be4f6bfe384be6020c->enter($__internal_76fea5ed1194d6aa2b840422a90a3824bd4b8875bd54b4be4f6bfe384be6020c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a9a786ae9d64d24278dff594ced3812ef9ffec59f29d9ece538dad615faca27->leave($__internal_4a9a786ae9d64d24278dff594ced3812ef9ffec59f29d9ece538dad615faca27_prof);

        
        $__internal_76fea5ed1194d6aa2b840422a90a3824bd4b8875bd54b4be4f6bfe384be6020c->leave($__internal_76fea5ed1194d6aa2b840422a90a3824bd4b8875bd54b4be4f6bfe384be6020c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_90a042db9a9a537a9742a3e067a7a1823fcb6264d654be0a2b3da5289ff4111c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90a042db9a9a537a9742a3e067a7a1823fcb6264d654be0a2b3da5289ff4111c->enter($__internal_90a042db9a9a537a9742a3e067a7a1823fcb6264d654be0a2b3da5289ff4111c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_67933ae7619874a7bd9716c0b116d0dc58db19c7c587439c2002424725ef462c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67933ae7619874a7bd9716c0b116d0dc58db19c7c587439c2002424725ef462c->enter($__internal_67933ae7619874a7bd9716c0b116d0dc58db19c7c587439c2002424725ef462c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_67933ae7619874a7bd9716c0b116d0dc58db19c7c587439c2002424725ef462c->leave($__internal_67933ae7619874a7bd9716c0b116d0dc58db19c7c587439c2002424725ef462c_prof);

        
        $__internal_90a042db9a9a537a9742a3e067a7a1823fcb6264d654be0a2b3da5289ff4111c->leave($__internal_90a042db9a9a537a9742a3e067a7a1823fcb6264d654be0a2b3da5289ff4111c_prof);

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
