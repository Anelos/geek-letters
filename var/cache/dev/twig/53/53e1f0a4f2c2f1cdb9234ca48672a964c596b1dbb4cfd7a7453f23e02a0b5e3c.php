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
        $__internal_df3450bd72cb7bad2d95b664b7dcb6323deef7fe9bfbc9d5b277237e66e9f1f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df3450bd72cb7bad2d95b664b7dcb6323deef7fe9bfbc9d5b277237e66e9f1f8->enter($__internal_df3450bd72cb7bad2d95b664b7dcb6323deef7fe9bfbc9d5b277237e66e9f1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_13dec68834fe3ffaf4decd74f067a756a36da0f08e6cfa23440ca92e459f2890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13dec68834fe3ffaf4decd74f067a756a36da0f08e6cfa23440ca92e459f2890->enter($__internal_13dec68834fe3ffaf4decd74f067a756a36da0f08e6cfa23440ca92e459f2890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df3450bd72cb7bad2d95b664b7dcb6323deef7fe9bfbc9d5b277237e66e9f1f8->leave($__internal_df3450bd72cb7bad2d95b664b7dcb6323deef7fe9bfbc9d5b277237e66e9f1f8_prof);

        
        $__internal_13dec68834fe3ffaf4decd74f067a756a36da0f08e6cfa23440ca92e459f2890->leave($__internal_13dec68834fe3ffaf4decd74f067a756a36da0f08e6cfa23440ca92e459f2890_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0c55e6596ae97c807f113822535b9a58fcd1c752984d237f7131dd4082d589d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c55e6596ae97c807f113822535b9a58fcd1c752984d237f7131dd4082d589d7->enter($__internal_0c55e6596ae97c807f113822535b9a58fcd1c752984d237f7131dd4082d589d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bab5ae00b2d74fbd6defedf62bd7ae3f4c09093afac2886548e198a1f61c8d74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bab5ae00b2d74fbd6defedf62bd7ae3f4c09093afac2886548e198a1f61c8d74->enter($__internal_bab5ae00b2d74fbd6defedf62bd7ae3f4c09093afac2886548e198a1f61c8d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_bab5ae00b2d74fbd6defedf62bd7ae3f4c09093afac2886548e198a1f61c8d74->leave($__internal_bab5ae00b2d74fbd6defedf62bd7ae3f4c09093afac2886548e198a1f61c8d74_prof);

        
        $__internal_0c55e6596ae97c807f113822535b9a58fcd1c752984d237f7131dd4082d589d7->leave($__internal_0c55e6596ae97c807f113822535b9a58fcd1c752984d237f7131dd4082d589d7_prof);

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
