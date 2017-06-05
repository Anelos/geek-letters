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
        $__internal_c3d64983281b905ce05dacf9763ce07364b09937564b3def08e10eee483b250a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3d64983281b905ce05dacf9763ce07364b09937564b3def08e10eee483b250a->enter($__internal_c3d64983281b905ce05dacf9763ce07364b09937564b3def08e10eee483b250a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_cf04c18cdc19a280102c3c45332b22bbd00941be34927a47ee16fcd7501ddd65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf04c18cdc19a280102c3c45332b22bbd00941be34927a47ee16fcd7501ddd65->enter($__internal_cf04c18cdc19a280102c3c45332b22bbd00941be34927a47ee16fcd7501ddd65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3d64983281b905ce05dacf9763ce07364b09937564b3def08e10eee483b250a->leave($__internal_c3d64983281b905ce05dacf9763ce07364b09937564b3def08e10eee483b250a_prof);

        
        $__internal_cf04c18cdc19a280102c3c45332b22bbd00941be34927a47ee16fcd7501ddd65->leave($__internal_cf04c18cdc19a280102c3c45332b22bbd00941be34927a47ee16fcd7501ddd65_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1c05846feaadc8ad70fafcfe8c4190e817734b698a68b2011ca9d5ed7feda2de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c05846feaadc8ad70fafcfe8c4190e817734b698a68b2011ca9d5ed7feda2de->enter($__internal_1c05846feaadc8ad70fafcfe8c4190e817734b698a68b2011ca9d5ed7feda2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_095f2d490cb0bfeb4a872d073045156d8924c1ed2397c1a36f98179ae10f1a7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_095f2d490cb0bfeb4a872d073045156d8924c1ed2397c1a36f98179ae10f1a7e->enter($__internal_095f2d490cb0bfeb4a872d073045156d8924c1ed2397c1a36f98179ae10f1a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_095f2d490cb0bfeb4a872d073045156d8924c1ed2397c1a36f98179ae10f1a7e->leave($__internal_095f2d490cb0bfeb4a872d073045156d8924c1ed2397c1a36f98179ae10f1a7e_prof);

        
        $__internal_1c05846feaadc8ad70fafcfe8c4190e817734b698a68b2011ca9d5ed7feda2de->leave($__internal_1c05846feaadc8ad70fafcfe8c4190e817734b698a68b2011ca9d5ed7feda2de_prof);

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
