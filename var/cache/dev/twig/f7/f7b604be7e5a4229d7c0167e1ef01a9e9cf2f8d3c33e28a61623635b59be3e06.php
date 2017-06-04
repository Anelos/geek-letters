<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_d2659fbc566f9faf8e6434c2ca0628fecbc4bf1e45a6ef8261da0bb3f2510867 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_78172fa0af61e7dd252bbd96f0d65f1d268c8c5860b75fe8f53220903481bdd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78172fa0af61e7dd252bbd96f0d65f1d268c8c5860b75fe8f53220903481bdd8->enter($__internal_78172fa0af61e7dd252bbd96f0d65f1d268c8c5860b75fe8f53220903481bdd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_f02aed56442aee18f625abfd2d2c40f664d7e913864c73a462e51500e977581e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f02aed56442aee18f625abfd2d2c40f664d7e913864c73a462e51500e977581e->enter($__internal_f02aed56442aee18f625abfd2d2c40f664d7e913864c73a462e51500e977581e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78172fa0af61e7dd252bbd96f0d65f1d268c8c5860b75fe8f53220903481bdd8->leave($__internal_78172fa0af61e7dd252bbd96f0d65f1d268c8c5860b75fe8f53220903481bdd8_prof);

        
        $__internal_f02aed56442aee18f625abfd2d2c40f664d7e913864c73a462e51500e977581e->leave($__internal_f02aed56442aee18f625abfd2d2c40f664d7e913864c73a462e51500e977581e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_778cc45736732f5acb10b5475a254011263787bec58fe5ee1dc54b17a010bea8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_778cc45736732f5acb10b5475a254011263787bec58fe5ee1dc54b17a010bea8->enter($__internal_778cc45736732f5acb10b5475a254011263787bec58fe5ee1dc54b17a010bea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_da91e309adc1bac158962a419fd400a817ec6b973bae344218c01c4c8eca860a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da91e309adc1bac158962a419fd400a817ec6b973bae344218c01c4c8eca860a->enter($__internal_da91e309adc1bac158962a419fd400a817ec6b973bae344218c01c4c8eca860a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_da91e309adc1bac158962a419fd400a817ec6b973bae344218c01c4c8eca860a->leave($__internal_da91e309adc1bac158962a419fd400a817ec6b973bae344218c01c4c8eca860a_prof);

        
        $__internal_778cc45736732f5acb10b5475a254011263787bec58fe5ee1dc54b17a010bea8->leave($__internal_778cc45736732f5acb10b5475a254011263787bec58fe5ee1dc54b17a010bea8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/html/geek-letters/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
