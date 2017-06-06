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
        $__internal_afb4908ff432ce39f9ba1c2db9d4f34f411ed4c8c83f759c7392b0401a6197bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afb4908ff432ce39f9ba1c2db9d4f34f411ed4c8c83f759c7392b0401a6197bd->enter($__internal_afb4908ff432ce39f9ba1c2db9d4f34f411ed4c8c83f759c7392b0401a6197bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_d2be02e25e8aed613a71ca9ad302cf88fd69ce3b9a4dde2971a841e5270e0dee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2be02e25e8aed613a71ca9ad302cf88fd69ce3b9a4dde2971a841e5270e0dee->enter($__internal_d2be02e25e8aed613a71ca9ad302cf88fd69ce3b9a4dde2971a841e5270e0dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afb4908ff432ce39f9ba1c2db9d4f34f411ed4c8c83f759c7392b0401a6197bd->leave($__internal_afb4908ff432ce39f9ba1c2db9d4f34f411ed4c8c83f759c7392b0401a6197bd_prof);

        
        $__internal_d2be02e25e8aed613a71ca9ad302cf88fd69ce3b9a4dde2971a841e5270e0dee->leave($__internal_d2be02e25e8aed613a71ca9ad302cf88fd69ce3b9a4dde2971a841e5270e0dee_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f836981ae67a06d73648e36654b758189c4d27ac348a6b9f04430e4d204efd4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f836981ae67a06d73648e36654b758189c4d27ac348a6b9f04430e4d204efd4d->enter($__internal_f836981ae67a06d73648e36654b758189c4d27ac348a6b9f04430e4d204efd4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a4274c0e3aafa92c1a71bbe671ddc77ab9168122e8cd3240ba2b0f21137d6c78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4274c0e3aafa92c1a71bbe671ddc77ab9168122e8cd3240ba2b0f21137d6c78->enter($__internal_a4274c0e3aafa92c1a71bbe671ddc77ab9168122e8cd3240ba2b0f21137d6c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_a4274c0e3aafa92c1a71bbe671ddc77ab9168122e8cd3240ba2b0f21137d6c78->leave($__internal_a4274c0e3aafa92c1a71bbe671ddc77ab9168122e8cd3240ba2b0f21137d6c78_prof);

        
        $__internal_f836981ae67a06d73648e36654b758189c4d27ac348a6b9f04430e4d204efd4d->leave($__internal_f836981ae67a06d73648e36654b758189c4d27ac348a6b9f04430e4d204efd4d_prof);

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
