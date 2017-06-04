<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_38401dc021f0f660a9dcbe9959c097979b732d40968ba3c8ca466bb1ecedb8e6 extends Twig_Template
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
        $__internal_4a499facc7da822b89fed861179bb0474af4796a283287e238931888256c83a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a499facc7da822b89fed861179bb0474af4796a283287e238931888256c83a9->enter($__internal_4a499facc7da822b89fed861179bb0474af4796a283287e238931888256c83a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_0f856e3d739f6fd7a436ac40f3c210e71677304b4737522ce6c3add38f1284bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f856e3d739f6fd7a436ac40f3c210e71677304b4737522ce6c3add38f1284bf->enter($__internal_0f856e3d739f6fd7a436ac40f3c210e71677304b4737522ce6c3add38f1284bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a499facc7da822b89fed861179bb0474af4796a283287e238931888256c83a9->leave($__internal_4a499facc7da822b89fed861179bb0474af4796a283287e238931888256c83a9_prof);

        
        $__internal_0f856e3d739f6fd7a436ac40f3c210e71677304b4737522ce6c3add38f1284bf->leave($__internal_0f856e3d739f6fd7a436ac40f3c210e71677304b4737522ce6c3add38f1284bf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6f549ca9b0a90b3a40416eea38cd1ce8ef9f07f6e14a6bd22e6660c56bda938c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f549ca9b0a90b3a40416eea38cd1ce8ef9f07f6e14a6bd22e6660c56bda938c->enter($__internal_6f549ca9b0a90b3a40416eea38cd1ce8ef9f07f6e14a6bd22e6660c56bda938c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4ddaf744d0ad60a1b75a0544345c846ce6f022ac7a2e88fc8ca0e963aab5185f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ddaf744d0ad60a1b75a0544345c846ce6f022ac7a2e88fc8ca0e963aab5185f->enter($__internal_4ddaf744d0ad60a1b75a0544345c846ce6f022ac7a2e88fc8ca0e963aab5185f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_4ddaf744d0ad60a1b75a0544345c846ce6f022ac7a2e88fc8ca0e963aab5185f->leave($__internal_4ddaf744d0ad60a1b75a0544345c846ce6f022ac7a2e88fc8ca0e963aab5185f_prof);

        
        $__internal_6f549ca9b0a90b3a40416eea38cd1ce8ef9f07f6e14a6bd22e6660c56bda938c->leave($__internal_6f549ca9b0a90b3a40416eea38cd1ce8ef9f07f6e14a6bd22e6660c56bda938c_prof);

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
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/html/geek-letters/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
