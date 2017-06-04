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
        $__internal_1826d0e3005abdd6716ea6d81245e9329096552b6905f93dc415d7a081a6785f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1826d0e3005abdd6716ea6d81245e9329096552b6905f93dc415d7a081a6785f->enter($__internal_1826d0e3005abdd6716ea6d81245e9329096552b6905f93dc415d7a081a6785f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_46f744b62f08b4ba88659619d9b808814f8922653baddcb4ace662cd4f809fea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46f744b62f08b4ba88659619d9b808814f8922653baddcb4ace662cd4f809fea->enter($__internal_46f744b62f08b4ba88659619d9b808814f8922653baddcb4ace662cd4f809fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1826d0e3005abdd6716ea6d81245e9329096552b6905f93dc415d7a081a6785f->leave($__internal_1826d0e3005abdd6716ea6d81245e9329096552b6905f93dc415d7a081a6785f_prof);

        
        $__internal_46f744b62f08b4ba88659619d9b808814f8922653baddcb4ace662cd4f809fea->leave($__internal_46f744b62f08b4ba88659619d9b808814f8922653baddcb4ace662cd4f809fea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fdf414a59771158f6f15ab6012d87d81c39f8fa903006bcfc7e63aeeebe93df3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdf414a59771158f6f15ab6012d87d81c39f8fa903006bcfc7e63aeeebe93df3->enter($__internal_fdf414a59771158f6f15ab6012d87d81c39f8fa903006bcfc7e63aeeebe93df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ec986acd9fa97c58ee53afbf4f606fa24d08a5b968940bbd9043d93e85fa37ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec986acd9fa97c58ee53afbf4f606fa24d08a5b968940bbd9043d93e85fa37ec->enter($__internal_ec986acd9fa97c58ee53afbf4f606fa24d08a5b968940bbd9043d93e85fa37ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_ec986acd9fa97c58ee53afbf4f606fa24d08a5b968940bbd9043d93e85fa37ec->leave($__internal_ec986acd9fa97c58ee53afbf4f606fa24d08a5b968940bbd9043d93e85fa37ec_prof);

        
        $__internal_fdf414a59771158f6f15ab6012d87d81c39f8fa903006bcfc7e63aeeebe93df3->leave($__internal_fdf414a59771158f6f15ab6012d87d81c39f8fa903006bcfc7e63aeeebe93df3_prof);

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
