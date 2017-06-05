<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_7f38e7e7819592eff5e8b644cc611116b78e00c300788443293ba8ef4f468a1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_6f5605a2b7d52c43a2b3a85b6f84a2717ec8a302430e36aa961428da6489e2b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f5605a2b7d52c43a2b3a85b6f84a2717ec8a302430e36aa961428da6489e2b0->enter($__internal_6f5605a2b7d52c43a2b3a85b6f84a2717ec8a302430e36aa961428da6489e2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_d77ab1bcaae56da3400d15bb131d713408ca3d08fd3c27e0145b595cdf4e9ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d77ab1bcaae56da3400d15bb131d713408ca3d08fd3c27e0145b595cdf4e9ee0->enter($__internal_d77ab1bcaae56da3400d15bb131d713408ca3d08fd3c27e0145b595cdf4e9ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f5605a2b7d52c43a2b3a85b6f84a2717ec8a302430e36aa961428da6489e2b0->leave($__internal_6f5605a2b7d52c43a2b3a85b6f84a2717ec8a302430e36aa961428da6489e2b0_prof);

        
        $__internal_d77ab1bcaae56da3400d15bb131d713408ca3d08fd3c27e0145b595cdf4e9ee0->leave($__internal_d77ab1bcaae56da3400d15bb131d713408ca3d08fd3c27e0145b595cdf4e9ee0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b4f6c1c575539e317f798e4246468f483dddb80f75737fcb66c227d6d0bc8e44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4f6c1c575539e317f798e4246468f483dddb80f75737fcb66c227d6d0bc8e44->enter($__internal_b4f6c1c575539e317f798e4246468f483dddb80f75737fcb66c227d6d0bc8e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cc1dde6ce5f5edbd759babf8a91d01d2656c97e291a37005f16cc68b91c2c090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc1dde6ce5f5edbd759babf8a91d01d2656c97e291a37005f16cc68b91c2c090->enter($__internal_cc1dde6ce5f5edbd759babf8a91d01d2656c97e291a37005f16cc68b91c2c090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_cc1dde6ce5f5edbd759babf8a91d01d2656c97e291a37005f16cc68b91c2c090->leave($__internal_cc1dde6ce5f5edbd759babf8a91d01d2656c97e291a37005f16cc68b91c2c090_prof);

        
        $__internal_b4f6c1c575539e317f798e4246468f483dddb80f75737fcb66c227d6d0bc8e44->leave($__internal_b4f6c1c575539e317f798e4246468f483dddb80f75737fcb66c227d6d0bc8e44_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/html/geek-letters/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
