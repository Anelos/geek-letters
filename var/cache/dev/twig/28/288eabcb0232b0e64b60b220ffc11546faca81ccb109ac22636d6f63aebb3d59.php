<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_186673cb5cbab59f06a76ef724e84ceca7048c7ee9f843cbe314e49648bfbbbb extends Twig_Template
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
        $__internal_9a1a4182df15e14cbb57b4166689f697ac2e442ce8648c176fe7e42969e442f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a1a4182df15e14cbb57b4166689f697ac2e442ce8648c176fe7e42969e442f9->enter($__internal_9a1a4182df15e14cbb57b4166689f697ac2e442ce8648c176fe7e42969e442f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_f8e0b8951cf634cf0b669357253f1e92c943f8567ce99f823836845870e4f0bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8e0b8951cf634cf0b669357253f1e92c943f8567ce99f823836845870e4f0bc->enter($__internal_f8e0b8951cf634cf0b669357253f1e92c943f8567ce99f823836845870e4f0bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a1a4182df15e14cbb57b4166689f697ac2e442ce8648c176fe7e42969e442f9->leave($__internal_9a1a4182df15e14cbb57b4166689f697ac2e442ce8648c176fe7e42969e442f9_prof);

        
        $__internal_f8e0b8951cf634cf0b669357253f1e92c943f8567ce99f823836845870e4f0bc->leave($__internal_f8e0b8951cf634cf0b669357253f1e92c943f8567ce99f823836845870e4f0bc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0ff658047a72ef7fc235c0275b654cbf0f55aed3cd1c9d7766de7ae47811d427 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ff658047a72ef7fc235c0275b654cbf0f55aed3cd1c9d7766de7ae47811d427->enter($__internal_0ff658047a72ef7fc235c0275b654cbf0f55aed3cd1c9d7766de7ae47811d427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2d7641d421fd9b957963e2ba8e03bd4ada832181d3c25f5e217fc2ff1d613862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d7641d421fd9b957963e2ba8e03bd4ada832181d3c25f5e217fc2ff1d613862->enter($__internal_2d7641d421fd9b957963e2ba8e03bd4ada832181d3c25f5e217fc2ff1d613862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_2d7641d421fd9b957963e2ba8e03bd4ada832181d3c25f5e217fc2ff1d613862->leave($__internal_2d7641d421fd9b957963e2ba8e03bd4ada832181d3c25f5e217fc2ff1d613862_prof);

        
        $__internal_0ff658047a72ef7fc235c0275b654cbf0f55aed3cd1c9d7766de7ae47811d427->leave($__internal_0ff658047a72ef7fc235c0275b654cbf0f55aed3cd1c9d7766de7ae47811d427_prof);

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
", "FOSUserBundle:Profile:show.html.twig", "/var/www/html/geek-letters/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
